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
                    <h4>Booklet</h4>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookletAdd"> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="save-stage" style="width:100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>File Booklet</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($imageBooklet as $no => $booklet)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{$booklet->image}}</td> --}}
                                        <td class="text-center">
                                            <div class="zoom">
                                                <img id="image" class="profile-user-img img-responsive"
                                                    style="height: auto; width: 100px; display: block; margin: auto;"
                                                    src="{{ url('img/booklet-original/' . $booklet->image) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('delete.booklet', $booklet->id) }}"
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

    <!-- Modal tambah booklet -->
    <div class="modal fade" id="bookletAdd" tabindex="-1" role="dialog" aria-labelledby="formModalJenis"
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
                    <form action="{{ route('store.booklet') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image Booklet</label>
                            <small>*max ukuran foto 2MB<br></small>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="img/*" id="file-input" onchange="imageExtensionValidate(this)" required>
                            @error('image')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
