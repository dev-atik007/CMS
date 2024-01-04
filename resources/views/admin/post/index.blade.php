@extends('admin.partials.app')
@section('admin.content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if (count($posts) > 0)
                <h4 class="card-title">Category table</h4>
                <p class="card-description"><a href="{{ route('posts.create') }}" class="btn btn-info btn-sm">Add Posts</a></p>      
                <table id="posts-table" class="table table-bordered" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>User Type</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody>
                        @foreach ($posts as $key=>$post)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <td>{{ Str::limit($post->title, 15) }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->usertype }}</td>
                                <td>{{ Str::limit($post->description, 15) }}</td>
                                <td>
                                    <img src="postImage/{{$post->image}}" width=50>
                                </td>
                                <td>{{ $post->is_publish == 1 ? 'Published' : 'Draft' }}</td>
                                <td>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                    <a href="{{ route('posts.delete', $post->id) }}" onclick="confirmation(event)" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            @else
                <h3 class="text-center text-danger">No Post Found</h3>
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

