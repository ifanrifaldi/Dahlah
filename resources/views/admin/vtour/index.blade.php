@extends('admin.base')
@section('title', 'V-Tour')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            
        <h5><strong>// Data V-Tour</strong></h5>
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <div>
                            <button type="button" class="btn btn-primary float- mb-10" data-toggle="modal" data-target="#modal-lg"><span class="fa fa-plus"></span> 
                            </button>
                        </div>
                        <br>
                        <br>
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Tempat</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_vtour as $vtour)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ url("admin/vtour/$vtour->id") }}" class="btn btn-primary"><span class="fa fa-info"></span> </a>
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#modal-edit{{ $vtour->id }}"><span class="fa fa-edit"></span></a>
                                        @include('admin.utils.delete', ['url' => "url"('admin/vtour', $vtour->id)])
                                    </div>
                                </td>
                                <td class="text-center">{{ $vtour->judul }}</td>
                                <td class="text-center">
                                    <img src="{{ url("public/$vtour->foto") }}" class="img-responsive" style="width:40% ; object-fit: cover">
                                </td>
                            </tr>
                            <div class="modal fade" id="modal-edit{{ $vtour->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data V-Tour</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{url('admin/vtour', $vtour->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Judul</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="judul" value="{{ $vtour->judul }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Tempat</label>
                                                    <div class="col-sm-10">
                                                        <!-- <select name="nama_tempat" class="form-control">
                                                        <option value=""> Pilih Tempat</option>
                                                        <option value="1"> Keraton Matan</option>
                                                        <option value="2"> Makam Tanjung Pura</option>
                                                    </select> -->
                                                        <select name="nama_tempat" class="form-control">
                                                            <option value="1" @if ($vtour->nama_tempat == '1') selected @endif>
                                                                Keraton Matan Tanjungpura</option>

                                                            <option value="2" @if ($vtour->nama_tempat == '2') selected @endif>
                                                                Makam Tanjung Pura
                                                            </option>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <textarea type="text" class="form-control" name="deskripsi">{{$vtour->deskripsi}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Foto</label>
                                                    <div class="col-md-5">
                                                        <img src="{{ url("public/$vtour->foto") }}" class="img-responsive" style="width:70% ; object-fit: cover">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="{{$vtour->foto}}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button class="btn btn-default" data-dismiss="modal">Kembali</button>
                                                <button class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data V-Tour</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin/vtour') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Tempat</label>
                        <div class="col-sm-10">
                            <select name="nama_tempat" class="form-control">
                                <option value=""> Pilih Tempat</option>
                                <option value="1"> Keraton Matan</option>
                                <option value="2"> Makam Tanjung Pura</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                            <!-- <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection