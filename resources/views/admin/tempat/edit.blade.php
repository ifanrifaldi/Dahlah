@extends('admin.base')

@section('content')

<div class="container">
        <div class= "row">
             <div class="col mt-5">
                    <div class="card">
                        <a href="{{url('admin/tempat')}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                        <div class="card-header" >
                            Ubah Data Tempat
                           
                        </div>   
                        <div class="card-body">
                            <form action="{{url('admin/tempat', $tempat->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form-group">
                                    <label for=""class ="control-label">Nama Gedung</label>
                                    <input type="text" class="form-control" name="nama" value="{{$tempat->nama}}">

                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label">Foto Tempat</label>
                                    <img class="img-preview img-fluid">
                                    <input type="file" name="foto"
                                     class="form-control" accept=".png, .jpg, .jpeg">
                                    <img src="{{ url("public/$tempat->foto") }}"
                                     class="rounded float-end" width="20%" alt="...">
                                                                           
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