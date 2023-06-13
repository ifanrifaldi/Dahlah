@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card">
                    <a href="{{ url('admin/tempat') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                    <div class="card-header">
                        Ubah Data Tempat

                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/tempat', $tempat->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for=""class="control-label">Nama </label>
                                <input type="text" class="form-control" name="nama" value="{{ $tempat->nama }}">

                            </div>
                            <div class="form-group">
                                <label for=""class="control-label">Nama video</label>
                                <input type="text" class="form-control" name="nama" value="{{ $video->nama }}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Video</label>
                                <img class="img-preview img-fluid">
                                <input type="file" name="video" class="form-control" accept=".MP4, .AVI, .MOV">
                                <img src="{{ url("public/$video->video") }}" class="rounded float-end" width="20%"
                                    alt="...">

                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi </label>
                                <textarea name="deskripsi" class="form-control" value="{{$video->deskripsi}}"></textarea>
                            </div>
                            <button class="btn btn-secondary float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
