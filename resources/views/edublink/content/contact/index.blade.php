@extends('edublink.layouts.master')

@section('content')

<!--=====================================-->
<!--=       Contact Me Area Start       =-->
<!--=====================================-->
<section class="section-gap-equal-60">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6">
                <div class="contact-us-info">
                    <h3 class="heading-title">We're Always Eager to Hear From You!</h3>
                    <ul class="address-list">
                        <li>
                            <h5 class="title">Address</h5>
                            <p>Studio 76d, Riley Ford, North Michael chester, CF99 6QQ</p>
                        </li>
                        <li>
                            <h5 class="title">Email</h5>
                            <p><a href="mailto:edublink@example.com">edublink@example.com</a></p>
                        </li>
                        <li>
                            <h5 class="title">Phone</h5>
                            <p><a href="tel:+0914135548598">(+091) 413 554 8598</a></p>
                        </li>
                    </ul>
                    <ul class="social-share">
                        <li><a href="#"><i class="icon-share-alt"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="offset-xl-2 col-lg-6">
                <div class="contact-form form-style-2">
                    <div class="section-title">
                        <h4 class="title">Get In Touch</h4>
                        <p>Fill out this form for booking a consultant advising session.</p>
                    </div>
                    <form class="rnt-contact-form rwt-dynamic-form" id="contact-form" method="POST" action="mail.php">
                        <div class="row row--10">
                            <div class="form-group col-12">
                                <input type="text" name="contact-name" id="contact-name" placeholder="Your name">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" name="contact-email" id="contact-email"
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" name="contact-phone" id="contact-phone" placeholder="Phone number">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="contact-message" id="contact-message" cols="30" rows="4"
                                    placeholder="Your message"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <button class="rn-btn edu-btn btn-medium submit-btn" name="submit" type="submit">Submit
                                    Message <i class="icon-4"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="shape-group">
                        <li class="shape-1 scene"><img data-depth="1" src="assets/images/about/shape-13.png"
                                alt="Shape"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection