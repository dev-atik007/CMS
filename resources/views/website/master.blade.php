<!DOCTYPE html>
<html lang="en">


<!-- molla/blog-listing.html  22 Nov 2019 10:04:10 GMT -->
<head>
    @include('website.partials.css')
</head>

<body>

    <div class="page-wrapper">
        <header class="header">
            @include('website.partials.header')

            @include('website.partials.headerMiddle')
        </header><!-- End .header -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Blog<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		@include('website.partials.media')

                		<aside class="col-lg-3">
                			<div class="sidebar">
                				@include('website.partials.category')

                                @include('website.partials.popular')

                                @include('website.partials.banner_side')

                                @include('website.partials.browse')

                                @include('website.partials.about_blog')
                			</div><!-- End .sidebar -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		@include('website.partials.social_icon')

	            		@include('website.partials.useful_links')

	            		@include('website.partials.custum_service')

	            		@include('website.partials.my_account')
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
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