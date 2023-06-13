@extends('frontend.layout.index')
@section('title', 'Galery - Video')
@section('content')
<div class="page-head overlay-wrap">
    <div class="overlay"></div>
    <div class="container text-uppercase">
        <h1>Features Shortcode</h1>
        <ul class="bcrumbs">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li>Features Shortcode</li>
        </ul>
    </div>
</div>
<div class="home-info">
    <div class="container">
        <div class="row">
            @foreach($list_video as $video)
            <div class="col-md-4 col-sm-12 col-xs-12">
            <iframe src ="https://www.youtube.com/embed/{{ $video->link }}" style="height: 250px;"> </iframe>
                <div class="home-info-content">
                    <h4><i class="fa fa-camera"></i><a href="#">{{ $video->judul }}
                            Us</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection