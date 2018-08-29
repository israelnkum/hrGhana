@extends('layouts.app')
@section('content')


    <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="{{assets('img/slider-1.jpg')}}" alt="" title="#slider-caption-1"/>
                <img src="{{assets('img/slider-2.jpg')}}" alt="" title="#slider-caption-2"/>
                <img src="{{assets('img/slider-3.jpg')}}" alt="" title="#slider-caption-3"/>
            </div><!-- /#main-slider -->

            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                {{--<h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>--}}
                                <h1 class="wow cssanimation leFadeInRight sequence display-4">Better Life for People</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join Us</a>--}}
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-1 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">Together we  <br>can make a Difference</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join Us</a>--}}
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-2 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                {{--<h5 class="wow cssanimation fadeInBottom">Join Us Today</h5>--}}
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">Give a little. Change a lot.</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">Help today because tomorrow you may be the one who needs helping! <br>Forget what you can get and see what you can give.</p>
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Join Us</a>--}}
                                {{--<a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Donate Now</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /#slider-caption-3 -->
        </div>
    </section><!-- /#slider-Section -->

    <section class="promo-section bd-bottom">
        <div class="promo-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <img class="profile" src="public/img/profile.jpg" alt="profile">
                            <h3>Ernestina Baaba Allotey <span>CEO & Founder of HR Ghana.</span></h3>
                            {{--<img src="img/sign.png" alt="sign">--}}
                        </div>
                    </div>

                    <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <h2>Our Vision</h2>
                            <p>
                                Changing an orphan’s future through the love of God and family.
                            </p>
                            <a href="/about-us" class="default-btn btn-sm">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4 xs-padding">
                        <div class="profile-wrap">
                            <h2>Our Mission</h2>
                            <p>
                                Providing loving, nurturing, Christ-centered homes for orphaned Children.
                            </p>
                            <a href="/about-us" class="default-btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Promo Section -->


    <section class="events-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Upcoming Events</h2>
                <span class="heading-border"></span>
                {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>--}}
            </div><!-- /Section Heading -->
            <div id="event-carousel" class="events-wrap owl-Carousel">
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="public/img/events-1.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Let's talk about the poor children education.</h3>
                        <div class="event-info">
                            {{--<p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>--}}
                            {{--<p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>--}}
                        </div>
                        <p>
                            Its aim was to develop positive school cultures on the basis of the rights of the child and to improve achievement for all children through having schools and early childhood education centers become learning communities that know, promote, and live human rights and responsibilities.
                        </p>
                        {{--<a href="#" class="default-btn">Read More</a>--}}
                    </div>
                </div><!-- Event-1 -->
                <div class="events-item">
                    <div class="event-thumb">
                        <img src="public/img/events-2.jpg" alt="events">
                    </div>
                    <div class="event-details">
                        <h3>Insure clean water to everyone in Africa.</h3>
                        <div class="event-info">
                            {{--<p><i class="ti-calendar"></i>Started On: 12:00 PM.</p>--}}
                            {{--<p><i class="ti-location-pin"></i>Grand Mahal, Dubai 2100.</p>--}}
                        </div>
                        <p>
                            Ensuring universal access to safe and affordable drinking water for all by 2030 requires we invest in adequate infrastructure, provide sanitation facilities and encourage hygiene at every level. Protecting and restoring water-related ecosystems such as forests, mountains, wetlands and rivers is essential if we are to mitigate water scarcity.
                        </p>
                        {{--<a href="#" class="default-btn">Read More</a>--}}
                    </div>
                </div><!-- Event-2 -->

            </div>
        </div>
    </section><!-- Events Section -->











    <section id="counter" class="counter-section">
        <div class="container">
            <ul class="row counters">
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-money"></i>
                        <h3 class="counter">85389</h3>
                        <h4 class="text-white">Money Donated</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-face-smile"></i>
                        <h3 class="counter">10693</h3>
                        <h4 class="text-white">Volunteer Around The World</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-user"></i>
                        <h3 class="counter">50177</h3>
                        <h4 class="text-white">People Impacted</h4>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6 sm-padding">
                    <div class="counter-content">
                        <i class="ti-comments"></i>
                        <h3 class="counter">669</h3>
                        <h4 class="text-white">Positive Feedbacks</h4>
                    </div>
                </li>
            </ul>
        </div>
    </section><!-- Counter Section -->



    {{--<section class="testimonial-section bd-bottom padding">--}}
    {{--<div class="container">--}}
    {{--<div class="section-heading text-center mb-40">--}}
    {{--<h2>What People Say</h2>--}}
    {{--<span class="heading-border"></span>--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>--}}
    {{--</div><!-- /Section Heading -->--}}
    {{--<div id="testimonial-carousel" class="testimonial-carousel owl-carousel">--}}
    {{--<div class="testimonial-item">--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
    {{--<div class="testi-footer">--}}
    {{--<img src="img/team-1.jpg" alt="profile">--}}
    {{--<h4>Jonathan Smith <span>Marketer</span></h4>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="testimonial-item">--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
    {{--<div class="testi-footer">--}}
    {{--<img src="img/team-2.jpg" alt="profile">--}}
    {{--<h4>Angelina Rose <span>Designer</span></h4>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="testimonial-item">--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
    {{--<div class="testi-footer">--}}
    {{--<img src="img/team-3.jpg" alt="profile">--}}
    {{--<h4>Taylor Swift <span>Developer</span></h4>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="testimonial-item">--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
    {{--<div class="testi-footer">--}}
    {{--<img src="img/team-4.jpg" alt="profile">--}}
    {{--<h4>Michel Brown <span>Programer</span></h4>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section><!-- Testimonial Section -->--}}

    {{--<section class="blog-section bg-grey bd-bottom padding">--}}
    {{--<div class="container">--}}
    {{--<div class="section-heading text-center mb-40">--}}
    {{--<h2>Recent Stories</h2>--}}
    {{--<span class="heading-border"></span>--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> It has survived not only five centuries.</p>--}}
    {{--</div><!-- /Section Heading -->--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-12 xs-padding">--}}
    {{--<div class="blog-items grid-list row">--}}
    {{--<div class="col-md-4 padding-15">--}}
    {{--<div class="blog-post">--}}
    {{--<img src="img/home-blog-1.jpg" alt="blog post">--}}
    {{--<div class="blog-content">--}}
    {{--<span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>--}}
    {{--<h3><a href="#">Standard gallery post</a></h3>--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
    {{--<a href="#" class="post-meta">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- Post 1 -->--}}
    {{--<div class="col-md-4 padding-15">--}}
    {{--<div class="blog-post">--}}
    {{--<img src="img/home-blog-2.jpg" alt="blog post">--}}
    {{--<div class="blog-content">--}}
    {{--<span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>--}}
    {{--<h3><a href="#">Blog post with couple photos</a></h3>--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
    {{--<a href="#" class="post-meta">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- Post 2 -->--}}
    {{--<div class="col-md-4 padding-15">--}}
    {{--<div class="blog-post">--}}
    {{--<img src="img/home-blog-3.jpg" alt="blog post">--}}
    {{--<div class="blog-content">--}}
    {{--<span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>--}}
    {{--<h3><a href="#">Standard gallery post</a></h3>--}}
    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
    {{--<a href="#" class="post-meta">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div><!-- Post 3 -->--}}
    {{--</div>--}}
    {{--</div><!-- Blog Posts -->--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section><!-- Blog Section -->--}}

    {{--<div class="sponsor-section bd-bottom">--}}
    {{--<div class="container">--}}
    {{--<ul id="sponsor-carousel" class="sponsor-items owl-carousel">--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-1.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-2.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-3.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-4.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-5.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-6.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-7.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--<li class="sponsor-item">--}}
    {{--<img src="img/sponsor-8.png" alt="sponsor-image">--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div><!-- ./Sponsor Section -->--}}

@endsection