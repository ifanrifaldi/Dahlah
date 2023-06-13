@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ url('admin/video') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                <div class="card">
                    <div class="card-header">
                        Tambah Data Video

                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/video') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""class="control-label">Nama video</label>
                                <input type="text" class="form-control" name="nama">
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""class="control-label">Video</label>
                                        <input type="file" class="form-control" name="video" accept=".mp4, .avi, .mov">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi </label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-secondary float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
