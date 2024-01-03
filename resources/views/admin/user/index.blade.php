@extends('admin.partials.app')
@section('admin.content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users table</h4>     
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach ($users as $key=>$user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->usertype }}</td>

                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection