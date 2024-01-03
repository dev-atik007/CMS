@extends('admin.partials.app')
@section('admin.content')

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
            <h4 class="card-title">Category Form</h4>

                <form action="{{ route('category.post') }}" method="POST" >
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="category" class="form-control"  placeholder="Name" required>
                    </div> 
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
        </div>
    </div>
</div>
@endsection