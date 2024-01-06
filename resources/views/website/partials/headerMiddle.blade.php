<div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="{{ route('web.maaster') }}" class="logo">
                            <img src="{{ url('assets/website/images/logo.png') }}"  alt="Molla Logo" width="105" height="25">
                        </a>
                        <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Bangla</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                    <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>

                                    @if (Route::has('login'))

                                    @auth
                                    <li><a href="{{ route('show.post') }}">My Post</a></li>
                                    <li><a href="{{ route('create.post') }}">Create Post</a></li>
                                    <li>
                                        <x-app-layout>
                                        </x-app-layout> 
                                    </li>
                                    @else
                                    <li><a href="{{ route('login') }}"><i class="icon-user"></i>Login</a></li>
                                    <li><a href="{{ route('register') }}"><i class="icon-user"></i>Register</a></li>
                                    @endauth

                                    @endif
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->
                    </div><!-- End .header-left -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->



