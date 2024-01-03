@extends('admin.partials.app')
@section('admin.content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Posts Table<Table></Table></h4>

                <div class="form-group">
                    <label for="exampleInputName1">Full Name</label>
                    <input type="text" value="{{ $user->name }}" name="title" class="form-control"  placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email Id</label>
                    <input type="text" value="{{ $user->email }}" name="title" class="form-control"  placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Created At</label>
                    <input type="text" value="{{ $user->created_at->format('d/m/y') }}" name="title" class="form-control"  placeholder="Title">
                </div>

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="exampleInputName1">User Role</label>
                        <select class="form-control" name="role_as" id="">
                            <option value="admin" {{ $user->usertype == 'admin' ? 'selected':'' }}>Admin</option>
                            <option value="user" {{ $user->usertype == 'user' ? 'selected':'' }}>User</option>
                            <option value="blogger" {{ $user->usertype == 'blogger' ? 'selected':'' }}>Bloger</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Update User Role</button>
                </form>

        </div>
    </div>
</div>
@endsection