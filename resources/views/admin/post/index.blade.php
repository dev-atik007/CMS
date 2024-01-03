@extends('admin.partials.app')
@section('admin.content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Category table</h4>
            <p class="card-description"><a href="{{ route('posts.create') }}" class="btn btn-info btn-sm">Add Posts</a></p>      
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
                    @foreach ($posts as $key=>$post)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->usertype }}</td>
                            <td>{{ Str::limit($post->description, 15) }}</td>
                            <td>
                                <img src="postImage/{{$post->image}}" width=50>
                            </td>
                            <td>{{ $post->is_publish }}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>

@endsection