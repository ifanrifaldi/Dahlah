@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <a href="{{ url('admin/vtour') }}" class="btn btn-dark"><i class="fas fa-arrow-left"></i>Kembali</a>

                <div class="card">
                    <div class="card-header">
                        Detail Data Tour
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="{{ url("public/$vtour->foto") }}" alt="{{ $vtour->foto }}" width="50%"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <table 
                                        class="table table-striped table-bordered dt-responsive nowrap mt-1">
                                        <thead>
                                            <tr>

                                                <th scope="col">Nama</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>{{ $vtour->tempat->nama }}</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <table 
                                    class="table table-striped table-bordered dt-responsive nowrap mt-1">
                                    <thead>
                                        <tr>

                                           
                                            <th scope="col">Deskripsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                           
                                            <td>{!! nl2br($vtour->deskripsi) !!}</td>

                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
