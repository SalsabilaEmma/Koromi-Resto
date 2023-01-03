@extends('user.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Reservasi</h2>
                </div>
                <div class="col-12">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="">Detail</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
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
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required="required" name="name" />
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required="required" name="email"/>
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
                                        <input type="text" class="form-control @error('wa') is-invalid @enderror" placeholder="Mobile (WhatsApp)" required="required" name="wa"/>
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
                                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" name="tanggal" required/>
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
                                        <input type="text" class="form-control @error('waktu') is-invalid @enderror datetimepicker-input datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" name="waktu" required/>
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
                                        <input type="text" class="form-control @error('jmlkursi') is-invalid @enderror" placeholder="Guest" required="required" name="jmlkursi"/>
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


    <!-- Single Post Start-->
    {{-- <div class="single">
        <div class="container">
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
            <div class="row">
                <form action="{{ route('reserv.store') }}" method="post" role="form" class="php-email-form"
                    data-aos="fade-up" data-aos-delay="100">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <p>Nama :</p>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                required id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Nama Anda">
                            @error('name')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <p>Tanggal :</p>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                required id="tanggal" placeholder="Date" data-rule="minlen:4"
                                data-msg="Pilih Tanggal Pesan">
                            @error('tanggal')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <p>Waktu/Jam :</p>
                            <input type="time" class="form-control @error('waktu') is-invalid @enderror" required
                                name="waktu" id="waktu" placeholder="Time" data-rule="minlen:4"
                                data-msg="Pilih Jam Pesan">
                            @error('waktu')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <p>Tempat Duduk :</p>
                            <input type="number" class="form-control @error('jmlkursi') is-invalid @enderror" required
                                name="jmlkursi" id="jmlkursi" placeholder="Jumlah Pesan Tempat Duduk" data-rule="minlen:1"
                                data-msg="Please enter at least 1 chars">
                            @error('jmlkursi')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <p>E-mail :</p>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" required
                                name="email" id="email" placeholder="Email Anda" data-rule="email"
                                data-msg="Please enter a valid email">
                            @error('email')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <p>No. Whatsapp :</p>
                            <input type="text" class="form-control @error('waz') is-invalid @enderror" required
                                name="wa" id="wa" placeholder="No Whatsapp" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            @error('wa')
                                <small>{{ $message }}</small>
                            @enderror
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <p>Catatan :</p>
                        <textarea class="form-control" name="note" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. Thank you!
                        </div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn custom-btn">Kirim Reservasi</button></div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Single Post End-->
@endsection
