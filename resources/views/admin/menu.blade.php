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
                    <h4>Menu</h4>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#isi">
                            Tambah Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="save-stage" style="width:100%;">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th>Nama Menu</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $no => $m)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($m->kategori == 'Makanan')
                                                Makanan
                                            @elseif ($m->kategori == 'Minuman')
                                                Minuman
                                            @else
                                                Snacks
                                            @endif
                                        </td>
                                        {{-- <td>{{$m->kategori ?? NULL}}</td> --}}
                                        <td>{{ $m->jenis->jenisMenu ?? null }}</td>
                                        <td class="text-left">{{ $m->namaMenu }}</td>
                                        <td>{{ $m->harga }}</td>
                                        <td>
                                            <form action="{{ route('delete.menu', $m->id) }}"
                                                onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                method="post">
                                                <a href="{{ route('edit.menu', $m->id) }}" type="button"
                                                    class="btn btn-outline-warning btn-sm fa fa-pen"></a>
                                                @csrf
                                                <button class="btn btn-outline-danger btn-sm fa fa-trash"
                                                    type="submit"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-body">
                            <div class="pull-right">
                                {{-- {{ $menu->links('vendor.pagination.bootstrap-4') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah menu-->
    <div class="modal fade" id="isi" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.menu') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori">
                                <option value="Makanan">Makanan</option>
                                <option value="Snack">Snack</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis</label>
                            <select class="form-control" name="idJenis">
                                @foreach ($jenis as $j)
                                    <option value="{{ $j->id }}">{{ $j->jenisMenu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <div id="inputFormRow">
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control m-input @error('namaMenu') is-invalid @enderror"
                                        id="namaMenu" autocomplete="off" name="namaMenu[]" placeholder="Masukkan menu"
                                        required>
                                    @error('namaMenu')
                                        <small>{{ $message }}</small>
                                    @enderror
                                    <input type="text"
                                        class="form-control m-input @error('harga') is-invalid @enderror" id="harga"
                                        autocomplete="off" name="harga[]" placeholder="Masukkan Harga" required>
                                    @error('harga')
                                        <small>{{ $message }}</small>
                                    @enderror
                                    <div class="input-group-append">
                                        <button id="removeRow" type=""
                                            class="btn btn-outline-danger btn-sm fa fa-trash"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-success m-t-15 waves-effect">+ Tambah
                            Baris</button>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect"
                            style="float:right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group">';
            html +=
                '<input type="text" name="namaMenu[]" class="form-control m-input" placeholder="Masukkan Menu" autocomplete="off">';
            html +=
                '<input type="text" name="harga[]" class="form-control m-input" placeholder="Masukkan Harga" autocomplete="off">';
            html += '<div class="input-group-append">';
            html +=
                '<button id="removeRow" type="button" class="btn btn-outline-danger btn-sm fa fa-trash"></button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
@endsection
