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
                    <div class="table-responsive">
                        <table class="table table-striped" id="save-stage" style="width:100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Nama</th>
                                    <th>Untuk Tanggal</th>
                                    <th>Waktu/Jam</th>
                                    <th>Tempat Duduk</th>
                                    {{-- <th>Nomor Whatsapp</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reserv as $r)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ date('d F Y', strtotime($r->created_at)) }}</td>
                                        <td>{{ $r->name }}</td>
                                        <td class="text-center">{{ date('d F Y', strtotime($r->tanggal)) }}</td>
                                        <td class="text-center">{{ $r->waktu }}</td>
                                        <td class="text-center">{{ $r->jmlkursi }}</td>
                                        {{-- <td class="text-center">{{ $r->wa }}</td> --}}
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('destroy.reserv', $r->id) }}" method="POST">
                                                <a href="{{ route('indexDetail.reserv', $r->id) }}" id="detail"
                                                    name="detail" class="btn btn-outline-info btn-sm fa fa-info"></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i
                                                        data-feather="trash-2"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
