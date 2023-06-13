@extends('admin.base')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <strong><h5>//Data V-TOUR</h5></strong>
            <div class="card">
                <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <div>
                            
                            <a href="{{url('admin/vtour/create')}}" class="btn btn-secondary float-left"><i class="fa fa-plus" ></i>Tambah Data</i></a>
                        </div> 
                        <br>
                        <br>
                                <thead>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Tempat</th>
                                    <th class="text-center">Deskripsi</th>
                                </thead>
                                <tbody>
                                    @foreach($list_vtour as $vtour)
                                   
                                    <tr>
                                        <td class="text-center" width="50">{{$loop->iteration}}</td>
                                        <td class="text-center" width="200">
                                            <div class="btn-group">
                                                <a href="{{url('admin/vtour', $vtour->id)}}" class="btn btn-secondary"><i class="dripicons-information"></i></a>
                                                <a href="{{url('admin/vtour', $vtour->id)}}/edit" class="btn btn-warning"><i class="dripicons-document-edit"></i></a>
                                                @include('admin.utils.delete', ['url' => "url"('admin/vtour', $vtour->id)])
                                            </div>
                                        </td>
                                        <td class="text-center">{{$vtour->tempat->nama}}</td>
                                        <td class="text-center">{{$vtour->deskripsi}}</td>
                                        
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                </table>
                </div>
            </div>
        </div>  
    </div>
</div>


@endsection