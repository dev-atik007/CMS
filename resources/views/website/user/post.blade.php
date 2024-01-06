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
        			<h1 class="page-title">Posts Table<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                
            </nav><!-- End .breadcrumb-nav -->

    <div>
    <div class="col-18 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
           
            <h4 class="card-title"><Table></Table></h4>

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Post title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"  placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <select name="category" id="" class="form-control" required>
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
                    <textarea  name="description" class="form-control" id="summernote" cols="30" rows="20" required></textarea>
                </div>
                <div class="form-group">
                    <label>Image upload</label>
                    <input type="file" name="image" class="form-control" placeholder="Image" required>
                </div>
               

                    <button type="submit" class="btn btn-success" style="background-color: black;">Submit</button>
                    <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
    </div>




    </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	            
	        </div><!-- End .footer-middle -->

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