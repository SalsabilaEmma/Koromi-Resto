@extends('admin-layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>KOROMI RESTO</h4>
                        </div>
                        <div class="card-body zoom">
                            <center><img src="{{ url('img') }}/logo.png" height="80px" alt="Koromi Resto Logo"></center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Total Pengunjung Situs</h4>
                        </div>
                        <div class="card-body text-center zoom">
                            <!-- Histats.com  (div with counter) -->
                            <div id="histats_counter"></div>
                            <!-- Histats.com  START  (aync)-->
                            <script type="text/javascript">
                                var _Hasync = _Hasync || [];
                                _Hasync.push(['Histats.start', '1,4725779,4,428,112,75,00011110']);
                                _Hasync.push(['Histats.fasi', '1']);
                                _Hasync.push(['Histats.track_hits', '']);
                                (function() {
                                    var hs = document.createElement('script');
                                    hs.type = 'text/javascript';
                                    hs.async = true;
                                    hs.src = ('//s10.histats.com/js15_as.js');
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                                })();
                            </script>
                            <noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4725779&101"
                                        alt="" border="0"></a></noscript>
                            <!-- Histats.com  END  -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('index.reserv') }}">
                                <h4>Reservasi</h4>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Untuk Tanggal</th>
                                        <th>Nama</th>
                                        <th>Tempat Duduk</th>
                                    </tr>
                                    @foreach ($reserv as $r)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date('d F Y', strtotime($r->tanggal)) }}</td>
                                            <td class="text-left">{{ $r->name }}</td>
                                            <td>{{ $r->jmlkursi }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <a href="{{ route('index.reserv') }}">Lihat Selengkapnya ..</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pesan Masuk</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" style="width:100%;">
                                    {{--  id="save-stage myTable" --}}
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 50px">No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Subjek</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_kontak as $kontak)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $kontak->nama }}</td>
                                                <td>{{ $kontak->email }}</td>
                                                <td>{{ $kontak->subjek }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{ route('kontak.list') }}">Lihat Selengkapnya ..</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
