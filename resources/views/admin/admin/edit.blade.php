@extends('admin.base')

@section('content')

<div class="container">
     <div class= "row">
              <div class="col-md-12 mt-5">
                <a href="{{url('admin/admin')}}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                    <div class="card">
                        <div class="card-header">
                            Ubah Data Admin
                           
                        </div>   
                        <div class="card-body">
                        <form action="{{url('admin/admin', $admin->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for=""class ="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$admin->nama}}">
                                </div>
                             
                                <div class="form-group">
                                    <label for=""class ="control-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$admin->username}}">
                                </div>
                                <div class="form-group">
                                    <label for=""class ="control-label">email</label>
                                    <input type="email" class="form-control" name="email" value="{{$admin->email}}">
                                </div>
                                <div class="form-group">
                                    <label for=""class ="control-label">Password</label>
                                    <input type="password" class="form-control" name="password" >
                                </div>
                          
                                
                              
                                <button class="btn btn-secondary float-right"><i class="fa fa-save"></i>Simpan</button>
                            </form>
                        </div>  
                    </div>
             </div>
     </div>
</div>     
@endsection