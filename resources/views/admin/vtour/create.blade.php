@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <a href="{{url('admin/vtour')}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

            <div class="card">
                <div class="card-header ">
                    Tambah Data VTour

                </div>
                <div class="card-body">

                    <form action="{{url('admin/vtour')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        </select>
                        </option>
                        <div class="form-group">
                            <label for="" class="control-label">Nama Tempat</label>
                            <select name="id_tempat" class="form-control">
                                <option value=""> Pilih Tempat</option>
                                @foreach($list_tempat as $tempat)
                                <option value="{{$tempat->id}}"> {{$tempat->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Foto Tempat</label>
                            <input type="file" class="form-control" name="foto" accept=".png, .jpg, .jpeg">
                        </div>


                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi Tempat</label>
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