@extends('user.app')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                @foreach ($banner as $banners)
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{ url('img/banner/' . $banners->file) }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>{{ $banners->judul }}</h1>
                            <p>{{ $banners->keterangan }}</p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="{{ route('menu') }}">View Menu</a>
                                <a class="btn custom-btn" href="{{ route('reservasi') }}">Book Table</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Booking Start -->
    <div class="booking">
        <div class="container"><br>
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
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="booking-content">
                        <div class="section-header">
                            <p>Book A Table</p>
                            <h2>Book Your Table For Private Dinners & Happy Hours</h2>
                        </div>
                        <div class="about-text">
                            {{-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="booking-form">
                        <form action="{{ route('reserv.store') }}" method="POST" role="form" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="100">
                            {{ csrf_field() }}
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Name" required="required" name="name" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-user"></i></div>
                                    </div>
                                    @error('name')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email" required="required" name="email" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                    </div>
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('wa') is-invalid @enderror"
                                        placeholder="Mobile (WhatsApp)" required="required" name="wa" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                    </div>
                                    @error('wa')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group date" id="date" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control @error('tanggal') is-invalid @enderror datetimepicker-input"
                                        placeholder="Date" data-target="#date" data-toggle="datetimepicker" name="tanggal"
                                        required />
                                    <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                    </div>
                                    @error('tanggal')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group time" id="time" data-target-input="nearest">
                                    <input type="text"
                                        class="form-control @error('waktu') is-invalid @enderror datetimepicker-input datetimepicker-input"
                                        placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="waktu"
                                        required />
                                    <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                    @error('waktu')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('jmlkursi') is-invalid @enderror"
                                        placeholder="Guest" required="required" name="jmlkursi" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    @error('jmlkursi')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
    <!-- About Start -->
    <div class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ url('user/img/a.JPG') }}" alt="Image">
                        {{-- <button type="button" class="btn-play" data-toggle="modal"
                            data-src="" data-target="#videoModal">
                            <span></span>
                        </button> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2>Koromi Resto</h2>
                        </div>
                        <div class="about-text">
                            @foreach ($about as $abouts)
                                @if ($abouts->judul == 'About Us')
                                    <p>{{ $abouts->isi }}</p>
                                @endif
                            @endforeach
                            {{-- <a class="btn custom-btn" href="">Book A Table</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <p>Why Choose Us</p>
                        <h2>Our Key Features</h2>
                    </div>
                    <div class="feature-text">
                        <div class="feature-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="{{ url('user/img/b.JPG') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ url('user/img/aaaaa.JPG') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ url('user/img/aaa.JPG') }}" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="{{ url('user/img/aa.JPG') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                        {{-- <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit
                            non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl
                            nec nisi sceleri maximus
                        </p> --}}
                        <a class="btn custom-btn" href="{{ route('reservasi') }}">Book A Table</a>
                    </div>
                </div>
                <div class="col-lg-7" style="margin-top: 150px">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-cooking"></i>
                                <h3>Special Menu</h3>
                                {{-- <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non
                                    vulput metus tortor
                                </p> --}}
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-vegetable"></i>
                                <h3>Welcome for reservation</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-medal"></i>
                                <h3>Exclusive service</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-meat"></i>
                                <h3>Comfort Place</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Food Start -->
    <div class="food">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="{{ url('user/img/coffee.png') }}" style="width: 75px; padding-bottom:15px"
                            alt="">
                        <h2 style="color: #125836">Kopi</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non
                            vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="">View Menu</a> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="{{ url('user/img/breads.png') }}" style="width: 75px; padding-bottom:15px"
                            alt="">
                        <h2 style="color: #125836">Roti</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non
                            vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="">View Menu</a> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <img src="{{ url('user/img/noodles.png') }}" style="width: 75px; padding-bottom:15px"
                            alt="">
                        <h2 style="color: #125836">Mie</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non
                            vulputa. Aliquam metus tortor auctor quis sem.
                        </p>
                        <a href="">View Menu</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food End -->


    <!-- Menu Start -->
    <div class="menu" id="menu">
        <div class="container">
            <div class="section-header text-center">
                <p>Food Menu</p>
                <h2>Delicious Food Menu</h2>
            </div>
            <div class="menu-tab">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#makanan">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#snack">Snacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#minuman">Beverages</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="makanan" class="container tab-pane active">
                        <div class="row">
                            @foreach ($food as $menus)
                                {{-- @if ($menus->kategori == 'Makanan') --}}
                                    <div class="col-lg-6 col-md-12">
                                        <div class="menu-item">
                                            <div class="menu-text style="font-size: 8pt"">
                                                <h3><span>{{ $menus->namaMenu }}</span>
                                                    <strong>{{ $menus->harga }}</strong>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}
                            @endforeach
                        </div>
                    </div>
                    <div id="snack" class="container tab-pane fade">
                        <div class="row">
                            @foreach ($snack as $menus)
                                {{-- @if ($menus->kategori == 'Snack') --}}
                                    <div class="col-lg-6 col-md-12">
                                        <div class="menu-item">
                                            <div class="menu-text" style="font-size: 8pt">
                                                <h3><span>{{ $menus->namaMenu }}</span>
                                                    <strong>{{ $menus->harga }}</strong>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}
                            @endforeach
                        </div>
                    </div>
                    <div id="minuman" class="container tab-pane fade">
                        <div class="row">
                            @foreach ($drink as $menus)
                                {{-- @if ($menus->kategori == 'Minuman') --}}
                                    <div class="col-lg-6 col-md-12">
                                        <div class="menu-item">
                                            <div class="menu-text" style="font-size: 8pt">
                                                <h3><span>{{ $menus->namaMenu }}</span>
                                                    <strong>{{ $menus->harga }}</strong>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                {{-- @endif --}}
                            @endforeach
                        </div>
                    </div><br>
                    <a href="{{ route('menu') }}" class="text-center"><p style="font-size: 20pt">See More ...</p><hr></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Team Start -->
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Our Master Chef</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('user/img/team-1.jpg') }}" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>CEO, Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('user/img/team-2.jpg') }}" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('user/img/team-3.jpg') }}" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Jhon Doe</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('user/img/team-4.jpg') }}" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Master Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


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
                                <a href="https://api.whatsapp.com/send/?phone=6281231315677&text&type=phone_number&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.instagram.com/koromi.cafe/?hl=id" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row contact-form">
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6569554092434!2d112.65482329999999!3d-7.165596899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd801b20156d187%3A0x265d8476011ad0f1!2sKoromi!5e0!3m2!1sid!2sid!4v1671357780062!5m2!1sid!2sid"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-6">
                    <div id="success"></div>
                    <form action="{{ route('kontak.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="nama"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email"
                                required="required" data-validation-required-message="Please enter your email" />
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
