@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <a href="{{url('admin/vtour')}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

            <div class="card">
                <div class="card-header ">
                    Ubah Data Vtour

                </div>
                <div class="card-body">
                    <form action="{{url('admin/vtour', $vtour->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label class="control-label">Foto Tempat</label>
                            <img class="img-preview img-fluid">
                            <input type="file" name="foto" class="form-control" accept=".png, .jpg, .jpeg">
                            <img src="{{ url('public', $vtour->foto) }}" class="rounded float-end" width="20%" alt="...">
                        </div>
                
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control">{{$vtour->deskripsi}}</textarea>

                        </div>
                        <button class="btn btn-secondary float-right"><i class="fa fa-save"></i>Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection