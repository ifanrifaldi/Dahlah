@extends('admin.base')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h5><strong>// Data Tempat</strong></h5>

            <div class="card">
                <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <div>                         
                            <a href="{{url('admin/tempat/create')}}" class="btn btn-secondary float-left"><i class="fa fa-plus"></i>Tambah Data</i></a>
                        </div> 
                        <br>
                        <br>
                                <thead>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Tempat</th>
                                    
                                </thead>
                                <tbody>
                                    @foreach($list_tempat as $tempat)
                                    <tr>
                                        <td class="text-center" width="50">{{$loop->iteration}}</td>
                                        <td class="text-center" width="200">
                                            <div class="btn-group">
                                                <a href="{{url('admin/tempat', $tempat->id)}}" class="btn btn-secondary"><i class="dripicons-information"></i></a>
                                                <a href="{{url('admin/tempat', $tempat->id)}}/edit" class="btn btn-warning"><i class="dripicons-document-edit"></i></a>
                                                @include('admin.utils.delete', ['url' => "url"('admin/tempat', $tempat->id)])
                                            </div>
                                        </td>
                                        <td class="text-center">{{$tempat->nama}}</td>
                                       
                                      
                                        
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