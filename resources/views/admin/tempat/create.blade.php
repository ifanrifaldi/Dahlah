@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{url('admin/tempat')}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                <div class="card">
                    <div class="card-header">
                        Tambah Data Tempat

                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/tempat') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""class="control-label">Nama Tempat</label>
                                <input type="text" class="form-control" name="nama">
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""class="control-label">Foto Tempat</label>
                                        <input type="file" class="form-control" name="foto"
                                            accept=".png, .jpg, .jpeg">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
