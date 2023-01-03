@extends('admin-layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>Reservasi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Tanggal Reservasi :</strong>
                                    {{ date('d F Y', strtotime($reserv->created_at)) }}</li>
                                <li class="list-group-item"><strong>Nama Pemesan :</strong> {{ $reserv->name }}</li>
                                <li class="list-group-item"><strong>Whatsapp :</strong> {{ $reserv->wa }}</li>
                                <li class="list-group-item"><strong>Email :</strong> {{ $reserv->email }}</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Tanggal :</strong> {{ date('d F Y', strtotime($reserv->tanggal)) }}</li>
                                <li class="list-group-item"><strong>Waktu :</strong> {{ $reserv->waktu }}</li>
                                <li class="list-group-item"><strong>Tempat Duduk :</strong> {{ $reserv->jmlkursi }} Orang</li>
                                {{-- <li class="list-group-item">Catatan Tambahan : {{ $reserv->note }}</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
