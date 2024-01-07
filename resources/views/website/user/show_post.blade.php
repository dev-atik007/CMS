<!DOCTYPE html>
<html lang="en">


<!-- molla/blog-listing.html  22 Nov 2019 10:04:10 GMT -->
<head>
    @include('website.partials.css')

    <style type="text/css">
        .post
        {
            padding: 30px;
            text-align: center;
        }
        .titile
        {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
        }
        .description
        {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }
    </style>
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
        			<h1 class="page-title">My post<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
        
        @foreach ($data as $data)
            <div class="post">
                <img src="/postImage/{{ $data->image }}">
                <h4 class="title">{{ $data->title }}</h4>
                <p class="description">{!! $data->description !!}</p>   
                <a href="{{ route('user.post.edit', $data->id) }}" class="btn btn-success">Post Edit</a>           
                <a href="{{ route('post.delete', $data->id) }}" onclick="confirmation(event)" class="btn btn-danger">Post Delete</a>
                <h1 style="text-align: center; padding: 15px;">==========Next==========</h1>
            </div>
        @endforeach
        
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

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to Delete this post",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {         
                window.location.href = urlToRedirect;               
            }  
        });        
    }
</script>