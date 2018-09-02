<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div><!-- Preloader -->

<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li>
                            <a href="mailto:info@hrghana.com" target="_blank">
                                <i class="ti-email"></i>
                                info@hrghana.com
                            </a></li>
                        <li><a href="#"><i class="ti-mobile"></i>+233 244 657 439</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <li><a href="https://www.facebook.com/elevationcareer.fair.5"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="#"><img src="{{'img/logo.png'}}" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="{{route('about')}}">About</a>
                        </li>
                        <li class="{{ Request::is('gallery1') ? 'active' : '' }}">
                            <a href="{{route('gallery1')}}">Gallery</a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}">
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="{{ Request::is('blog') ? 'active' : '' }}">
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->

<div class="header-height"></div>