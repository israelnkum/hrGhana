@extends('layouts.app')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="about-section bd-bottom shape circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="img/profile.jpg" alt="profile">
                        <h3>Ernestina Baaba Allotey<span>CEO & Founder of HR Ghana.</span></h3>
                        {{--<p>General Manager at Blessedfield Limited</p>--}}
                        <img src="img/sign.png" alt="sign">
                    </div>
                </div>
                <div class="col-md-8 xs-padding">
                    <div class="about-wrap row">
                        <div class="col-md-6 xs-padding">
                            <img src="img/history.jpg" alt="about-thumb">
                            <h3>Our Vision</h3>
                            <p>
                                Changing an orphan’s future through the love of God and family.
                            </p>
                        </div>
                        <div class="col-md-6 xs-padding">
                            <img src="img/mission.jpg" alt="about-thumb">
                            <h3>Our Mission</h3>
                            <p>
                                Providing loving, nurturing, Christ-centered homes for orphaned Children.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    {{--<section id="counter" class="counter-section">--}}
        {{--<div class="container">--}}
            {{--<ul class="row counters">--}}
                {{--<li class="col-md-3 col-sm-6 sm-padding">--}}
                    {{--<div class="counter-content">--}}
                        {{--<i class="ti-money"></i>--}}
                        {{--<h3 class="counter">85389</h3>--}}
                        {{--<h4 class="text-white">Money Donated</h4>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="col-md-3 col-sm-6 sm-padding">--}}
                    {{--<div class="counter-content">--}}
                        {{--<i class="ti-face-smile"></i>--}}
                        {{--<h3 class="counter">10693</h3>--}}
                        {{--<h4 class="text-white">Volunteer Around The World</h4>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="col-md-3 col-sm-6 sm-padding">--}}
                    {{--<div class="counter-content">--}}
                        {{--<i class="ti-user"></i>--}}
                        {{--<h3 class="counter">50177</h3>--}}
                        {{--<h4 class="text-white">People Impacted</h4>--}}
                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="col-md-3 col-sm-6 sm-padding">--}}
                    {{--<div class="counter-content">--}}
                        {{--<i class="ti-comments"></i>--}}
                        {{--<h3 class="counter">669</h3>--}}
                        {{--<h4 class="text-white">Positive Feedbacks</h4>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</section><!-- Counter Section -->--}}
    @endsection