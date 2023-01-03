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
    <!-- Menu Start -->
    <div class="menu">
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
                        {{ $food->links('pagination::bootstrap-4') }}
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
                        {{ $snack->links('pagination::bootstrap-4') }}
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
                        {{ $drink->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @foreach ($booklets as $booklet)
                <div class="row">
                    <div class="zoom">
                        <img id="image" class="profile-user-img img-responsive"
                            style="height: auto; width: 50%; display: block; margin: auto;"
                            src="{{ url('img/booklet-original/' . $booklet->image) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Menu End -->
@endsection
