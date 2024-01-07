<!DOCTYPE html>
<html lang="en">


<!-- molla/blog-listing.html  22 Nov 2019 10:04:10 GMT -->
<head>
    @include('website.partials.css')

</head>

<body>

    @include('sweetalert::alert')
    <div class="page-wrapper">
        <header class="header">
            @include('website.partials.header')

            @include('website.partials.headerMiddle')
        </header><!-- End .header -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Update Page<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
        
        <div>
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

                <form action="{{ route('user.post.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $data->title }}"  placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <select name="category" id="" class="form-control"  required>
                            <option disabled selected>Choose Option</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <textarea  name="description" class="form-control" id="summernote"  required>   @php echo $data->description; @endphp </textarea>
                    </div>
                    <div class="form-group">
                    <label>Current Image</label>
                        <img src="/postImage/{{ $data->image }}" width=100 alt="">
                    </div>
                    <div class="form-group">
                        <label>Image upload</label>
                        <input type="file"  name="image" class="form-control" placeholder="Image" >
                    </div>
                    
                    <input type="submit" class="btn btn-outline-secondary">    
                </form>
            </div>
        </div>
    </div>
        
        </main><!-- End .main -->

        <footer class="footer">
	        @include('website.partials.footer')
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    

    <!-- Plugins JS File -->
    @include('website.partials.script')
</body>


<!-- molla/blog-listing.html  22 Nov 2019 10:04:12 GMT -->
</html>

