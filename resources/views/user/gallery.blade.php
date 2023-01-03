@extends('user.app')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gallery</h2>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('index') }}">Home</a>
                    <a href="">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Mini Gallery</p>
                <h2>Our Gallery</h2>
            </div>
            <div class="row">
                @foreach ($gallery as $img)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img zoom">
                                <img src="{{ url('img/gallery/' . $img->image) }}" style="" alt="Image">
                            </div>
                            <!-- <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>CEO, Co Founder</p>
                            </div> -->
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{ $gallery->links('pagination::bootstrap-4') }}

    {{-- <div class="container">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            @foreach ($gallery as $img)
                <div class="col-12 col-md-6 col-lg-3">
                    <img src="{{ url('img/gallery/' . $img->image) }}" data-target="#indicators" data-slide-to="0"
                        alt="" />
                </div>
            @endforeach
        </div>

        <!--  -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#indicators" data-slide-to="0" class="active"></li>
                            <li data-target="#indicators" data-slide-to="1"></li>
                            <li data-target="#indicators" data-slide-to="2"></li>
                            <li data-target="#indicators" data-slide-to="3"></li>
                            <li data-target="#indicators" data-slide-to="4"></li>
                            <li data-target="#indicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/201" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/202" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/203" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/204" alt="Fifth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://source.unsplash.com/random/205" alt="Sixth slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
@endsection
