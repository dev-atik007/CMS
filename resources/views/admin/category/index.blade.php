@extends('admin.partials.app')
@section('admin.content')
    
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

        @if (session()->has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
        @endif
        
        @if (count($categories) > 0)
            <h4 class="card-title">Category table</h4>
            <p class="card-description"><a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Add Category</a></p>      
            <table id="posts-table" class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Category Name </th>
                        <th> Action </th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach ($categories as $key=>$category)
                        <tr>
                          <td> {{ $key+1 }} </td>
                          <td> {{ $category->name }} </td>
                          <td>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{ route('category.delete', $category->id) }}" onclick="confirmation(event)" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
                          </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        @else
            <h3 class="text-center text-danger">No Category Found</h3>
        @endif
        </div>
    </div>
</div>
@endsection

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {         
                window.location.href = urlToRedirect;               
            }  
        });        
    }
</script>