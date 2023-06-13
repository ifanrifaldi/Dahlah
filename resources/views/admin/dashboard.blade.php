@extends('admin.base')

@section('content')
    <div class="page-title-box">

        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Welcome to Dashboard</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
    <!-- end page-title -->
    <div class="row">
       
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center p-1">
                        <div class="col-lg-6">
                            <h5 class="font-12">DATA FOTO</h5>
                            <h4 class="text-primary pt-1 mb-0">{{$foto}}</h4>
                        </div>
                        <div class="col-lg-6">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center p-1">
                        <div class="col-lg-6">
                            <h5 class="font-12">DATA VIDEO</h5>
                            <h4 class="text-primary pt-1 mb-0">{{$video}}</h4>
                        </div>
                        <div class="col-lg-6">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center p-1">
                        <div class="col-lg-6">
                            <h5 class="font-12">DATA TEMPAT</h5>
                            <h4 class="text-primary pt-1 mb-0">{{$tempat}}</h4>
                        </div>
                        <div class="col-lg-6">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center p-1">
                        <div class="col-lg-6">
                            <h5 class="font-12">DATA V-TOUR</h5>
                            <h4 class="text-primary pt-1 mb-0">{{$vtour}}</h4>
                        </div>
                        <div class="col-lg-6">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
 
@endsection
