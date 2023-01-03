@extends('user.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Menu</h2>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <hr>

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Contact Us</p>
                <h2>Contact For Any Query</h2>
            </div>
            <div class="row align-items-center contact-information">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Address</h3>
                            <p>Jl. Panglima Sudirman Nomor 73, Gresik, Jawa Timur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Us</h3>
                            <p>0812-3131-5677</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email Us</h3>
                            <p>officialkoromi@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-share"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Follow Us</h3>
                            <div class="contact-social">
                                <a href="https://api.whatsapp.com/send/?phone=6281231315677&text&type=phone_number&app_absent=0"
                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.instagram.com/koromi.cafe/?hl=id" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row contact-form">
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6569554092434!2d112.65482329999999!3d-7.165596899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd801b20156d187%3A0x265d8476011ad0f1!2sKoromi!5e0!3m2!1sid!2sid!4v1671357780062!5m2!1sid!2sid"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div id="success"></div>
                    <form action="{{ route('kontak.store') }}" novalidate="novalidate" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                name="email" required="required"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subjek" placeholder="Subject" name="subjek"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="isi" placeholder="Message" required="required" name="isi"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn custom-btn" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
