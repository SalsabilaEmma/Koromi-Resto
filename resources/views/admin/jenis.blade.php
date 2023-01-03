@extends('admin-layout.app')
@section('content')
    <div class="main-content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>Jenis Menu</h4>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#paket">Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="save-stage" style="width:100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis as $no => $j)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $j->jenisMenu }}</td>
                                        <td class="text-center">
                                            {{-- <a href="{{ route('edit.jenis', $j->id) }}" type="button"
                                                    class="btn btn-outline-warning btn-sm fa fa-pen"></a> --}}
                                            <form action="{{ route('delete.jenis', $j->id) }}"
                                                onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                                @csrf
                                                <button class="btn btn-outline-danger btn-sm fa fa-trash" type="submit">
                                                </button>
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

    <!-- Modal tambah jenis -->
    <div class="modal fade" id="paket" tabindex="-1" role="dialog" aria-labelledby="formModalJenis"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalJenis">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.jenis') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Jenis</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input type="text" class="form-control @error('jenisMenu') is-invalid @enderror"
                                    id="jenisMenu" placeholder="Masukkan Jenis Menu" name="jenisMenu" required>
                                @error('jenisMenu')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
