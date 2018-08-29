@extends('layouts.app')
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Contact us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="contact-section padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12  text-center">
                    <h3 class="mb-0">Have any Questions?</h3>
                </div>
            </div>

            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <ul>
                            <li><i class="ti-location-pin"></i> 315 West 33rd Street New York, NY 10001</li>
                            <li><i class="ti-mobile"></i> +233 244 657 439, +233 277 553 105, +233 209 114 609</li>
                            <li><i class="ti-email"></i> info@hrghana.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us a line</h3>
                         <form action="/" method="post" id="ajax_form" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Contact Section -->
    @endsection