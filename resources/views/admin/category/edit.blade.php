@extends('admin.partials.app')
@section('admin.content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Category Edit Form</h4>

                <form action="{{ route('category.update', $category->id) }}" method="POST" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" value="{{ $category->name }}" name="category" class="form-control"  placeholder="Name" required>
                    </div> 
                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
        </div>
    </div>
</div>
@endsection