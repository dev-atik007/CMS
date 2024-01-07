@extends('admin.partials.app')
@section('admin.content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tele Phone</h4>
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Phone </th>
                        <th> Action </th>
                    </tr>
                </thead>
                    <tbody>
                  
                        <tr>
                          <td> 1 </td>
                          <td> 654 </td>
                          <td>
                            <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                          </td>
                        </tr>
                   
                    </tbody>
            </table>
        </div>
    </div>
</div>



<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <h4 class="card-title">Tele Phone Form</h4>

                <form action="" method="POST" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Number</label>
                        <input type="number" name="category" class="form-control"  placeholder="Tele Phone" required>
                    </div> 
                    <button type="submit"  class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
        </div>
    </div>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <h4 class="card-title">Edit Tele Phone Number</h4>

                <form action="" method="POST" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Number</label>
                        <input type="number" name="category" class="form-control"  placeholder="Tele Phone" required>
                    </div> 
                    <button type="submit"  class="btn btn-gradient-primary me-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
        </div>
    </div>
</div>
@endsection