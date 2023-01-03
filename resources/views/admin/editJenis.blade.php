@extends('admin-layout.app')
@section('content')
    <div class="main-content">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="modal-body">
                    <form action="{{route('update.jenis', $jenis->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div id="inputFormRow">
                            <label>Jenis</label>
                            <div class="input-group">
                                <input type="text" class="form-control m-input @error('jenis') is-invalid @enderror"
                                    id="jenis" autocomplete="off" name="jenis" value="{{ $jenis->jenis }}">
                                @error('jenis')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" style="float:right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
