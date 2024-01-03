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

            <h4 class="card-title">Posts Table<Table></Table></h4>

            <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" value="{{ $post->title }}" name="title" class="form-control"  placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <select name="category" id="" class="form-control"  >
                        <option disabled selected>Choose Option</option>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Description</label>
                    <!-- <input type="text" name="title" class="form-control"  placeholder="Name"> -->
                    <textarea  name="description" value="{{ $post->description }}" class="form-control"  cols="30" rows="20" ></textarea>
                </div>
                <div class="form-group">
                    <label>Old Image</label>
                        <img src="/postImage/{{ $post->image }}" width=100 alt="">
                </div>
                <div class="form-group">
                    <label>Image upload</label>
                    <input type="file" name="image" class="form-control" placeholder="Image" >
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Published</label>
                    <select name="is_publish" class="form-control" required>
                        <option disabled selected>Choose Option</option>
                        <option @selected( old('is_publish') == 1) value="1">Published</option>
                        <option @selected( old('is_publish') == 0) value="0">Draf</option>
                    </select>
                </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    
            </form>
        </div>
    </div>
</div>
@endsection