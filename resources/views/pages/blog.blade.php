@extends('layouts.app')
@section('content')


    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Our Blog </h2>
                {{--<p>Lorem Ipsum is simply text of the industry. </p>--}}
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 sm-padding">
                    <div class="blog-items single-post row">
                        <img src="{{asset('img/post-1.jpg')}}" alt="blog post">
                        <h2>The Elevation career fair overview</h2><br>
                        {{--<div class="meta-info">--}}
                            {{--<p><i class="ti-user"></i> Written By <a href="#">David Cameroon</a></p>--}}

                        {{--</div><!-- Meta Info -->--}}
                        <p>
                            The elevation career fair is an inspiring project that brings children; teens and young adults together to offer them needed training and guidelines on career choices, career path, career progression and contemporary issues for evaluative skills that add value for development in view of global trends.
                            This stems from the fact that many up and coming young ones either end up their future career prematurely, due to lack of consensual career mismatch in career choices. Perhaps, influence from family, peer pressure and poor guidance also contribute to missing ones career path which becomes a hurdle to overcome.
                        </p>

                        <p>
                            Others may also be tempted to give up what they have settled for without commitment or inability to make agile decision for adjustments.
                            Another, challenge for career progression is the dilemma the young ones face because of inadequate understanding including knowledge or extent of the subject area, world view and expectation.
                        </p>

                        <p>
                            We the professional Team from HR Ghana Strategy plus Services (HR Ghana) have researched into career challenges and have realized that employers are looking for people with sharpen business acumen including initiatives that will benefit the organization. We have taken the responsibility to offer services in myriad dimensions while supporting the next generation to reach their talented potential.
                        </p>

                        <p>We believe that consistency is the power to success, hence our desire for this initiative to work with the people to achieve the benefits of neurodiversity and inclusion.</p>
                        <p>
                            The ultimate is building a reserve of intellectual capital eligible for strategic business solution that will impact the bottom line with ability to scan the external environment for critical evaluation to move the company to the next level.
                        </p>

                        <p>
                            In order to grow Human Capital in the nation we are starting from the premier region, we intend to cover the Nzema, Ahanta, Wassa and the proposed North Western Region area in career development processes.
                        </p>

                        <p>
                            Your positive response and support for this project to engage interested participants in schools, communities and townships will enhance and strengthen the people as well as business in the longer term.
                        </p>
                        {{--<div class="share-wrap">--}}
                            {{--<h4>Share This Article</h4>--}}
                            {{--<ul class="share-icon">--}}
                                {{--<li><a href="#"><i class="ti-facebook"></i> Facebook</a></li>--}}
                                {{--<li><a href="#"><i class="ti-twitter"></i> Twitter</a></li>--}}
                                {{--<li><a href="#"><i class="ti-google"></i> Google+</a></li>--}}
                                {{--<li><a href="#"><i class="ti-instagram"></i> Instagram</a></li>--}}
                                {{--<li><a href="#"><i class="ti-linkedin"></i> Linkedin</a></li>--}}
                            {{--</ul>--}}
                        {{--</div><!-- Share Wrap -->--}}

                        {{--<div class="comments-wrapper">--}}
                            {{--<h4>There are 4 comments</h4>--}}
                            {{--<ul id="comments-list" class="comments-list">--}}
                                {{--<li>--}}
                                    {{--<div class="comment-main-level">--}}
                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="comment-avatar"> <img src="img/comment-1.jpg" alt="comment"> </div>--}}
                                        {{--<!-- Contenedor del Comentario -->--}}
                                        {{--<div class="comment-box">--}}
                                            {{--<div class="comment-head">--}}
                                                {{--<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>--}}
                                                {{--<span>hace 20 minutos</span>--}}
                                                {{--<i class="fa fa-reply"></i>--}}
                                                {{--<i class="fa fa-heart"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-content">--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Respuestas de los comentarios -->--}}
                                    {{--<ul class="comments-list reply-list">--}}
                                        {{--<li>--}}
                                            {{--<!-- Avatar -->--}}
                                            {{--<div class="comment-avatar"> <img src="img/comment-2.jpg" alt="comment"> </div>--}}
                                            {{--<!-- Contenedor del Comentario -->--}}
                                            {{--<div class="comment-box">--}}
                                                {{--<div class="comment-head">--}}
                                                    {{--<h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>--}}
                                                    {{--<span>hace 10 minutos</span>--}}
                                                    {{--<i class="fa fa-reply"></i>--}}
                                                    {{--<i class="fa fa-heart"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="comment-content">--}}
                                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<!-- Avatar -->--}}
                                            {{--<div class="comment-avatar"> <img src="img/comment-3.jpg" alt="comment"> </div>--}}
                                            {{--<!-- Contenedor del Comentario -->--}}
                                            {{--<div class="comment-box">--}}
                                                {{--<div class="comment-head">--}}
                                                    {{--<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Agustin Ortiz</a></h6>--}}
                                                    {{--<span>hace 10 minutos</span>--}}
                                                    {{--<i class="fa fa-reply"></i>--}}
                                                    {{--<i class="fa fa-heart"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="comment-content">--}}
                                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="comment-main-level">--}}
                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="comment-avatar"> <img src="img/comment-4.jpg" alt="comment"> </div>--}}
                                        {{--<!-- Contenedor del Comentario -->--}}
                                        {{--<div class="comment-box">--}}
                                            {{--<div class="comment-head">--}}
                                                {{--<h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>--}}
                                                {{--<span>hace 10 minutos</span>--}}
                                                {{--<i class="fa fa-reply"></i>--}}
                                                {{--<i class="fa fa-heart"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="comment-content">--}}
                                                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="comment-form">--}}
                                {{--<h4>Leave a reply</h4>--}}
                                {{--<p>Your email address will not be published. Required fields are marked *</p>--}}
                                {{--<form action="http://wowthemez.com/demos/charitify/contact.php" method="post" id="ajax_form" class="form-horizontal">--}}
                                    {{--<div class="form-group colum-row row">--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<input type="website" id="website" name="website" class="form-control" placeholder="Website" required>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<button id="submit" class="default-btn" type="submit">Send Message</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div id="form-messages" class="alert" role="alert"></div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div><!-- Blog Posts -->
                <div class="col-lg-3 sm-padding">
                    <div class="sidebar-wrap">
                        {{--<div class="sidebar-widget mb-50">--}}
                            {{--<h4>Search Posts</h4>--}}
                            {{--<form action="#" class="search-form">--}}
                                {{--<input type="text" class="form-control" placeholder="Type here">--}}
                                {{--<button class="search-btn" type="button"><i class="fa fa-search"></i></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        <div class="sidebar-widget mb-50">
                            <h4>Recent Posts</h4>
                            <ul class="recent-posts">
                                <li>
                                    <img src="img/rel-post-1.jpg" alt="blog post">
                                    <div>
                                        <h4><a href="#">ElevationCareer Fair</a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/rel-post-2.jpg" alt="blog post">
                                    <div>
                                        <h4><a href="#">Let's talk about the poor children education.</a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> January 01.2018</span>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- Recent Posts -->
                        {{--<div class="sidebar-widget mb-50">--}}
                            {{--<h4>Tags</h4>--}}
                            {{--<ul class="tags">--}}
                                {{--<li><a href="#">Audio</a></li>--}}
                                {{--<li><a href="#">Blog</a></li>--}}
                                {{--<li><a href="#">Design</a></li>--}}
                                {{--<li><a href="#">Magazine</a></li>--}}
                                {{--<li><a href="#">Gallery</a></li>--}}
                                {{--<li><a href="#">Creative</a></li>--}}
                                {{--<li><a href="#">Post</a></li>--}}
                                {{--<li><a href="#">Quotes</a></li>--}}
                            {{--</ul>--}}
                        {{--</div><!-- Tag -->--}}
                    </div><!-- /Sidebar Wrapper -->
                </div>
            </div>
        </div>
    </section><!-- /Blog Section -->
    @endsection