@extends('admin.base')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h5><strong>// Data Video</strong></h5>

            <div class="card">
                <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <div>                         
                            <a href="{{url('admin/video/create')}}" class="btn btn-secondary float-left"><i class="fa fa-plus"></i>Tambah Data</i></a>
                        </div> 
                        <br>
                        <br>
                                <thead>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Video</th>
                                    <th class="text-center">Video Tempat</th>
                                    <th class="text-center">Deskripsi</th>

                                    
                                </thead>
                                <tbody>
                                    @foreach($list_video as $video)
                                    <tr>
                                        <td class="text-center" width="50">{{$loop->iteration}}</td>
                                        <td class="text-center" width="200">
                                            <div class="btn-group">
                                                <a href="{{url('admin/video', $video->id)}}" class="btn btn-secondary"><i class="dripicons-information"></i></a>
                                                <a href="{{url('admin/video', $video->id)}}/edit" class="btn btn-warning"><i class="dripicons-document-edit"></i></a>
                                                @include('admin.utils.delete', ['url' => "url"('admin/video', $video->id)])
                                            </div>
                                        </td>
                                        <td class="text-center">{{$video->nama}}</td>
                                        <td class="text-center">{{$video->video}}</td>
                                        <td class="text-center">{{$video->deskripsi}}</td>

                                       
                                      
                                        
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