<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Video;

class HomeController extends Controller
{   
    public function beranda(){
        $data['list_foto'] = Foto::orderBy('id','desc')->take(3)->get();
        $data['list_video'] = Video::orderBy('id','desc')->take(1)->get();
        return view('frontend.beranda',$data);
    }
    public function vtour(){
        return view('frontend.vtour');
    }
    public function foto(){
        $data['list_foto'] = Foto::all();
        return view('frontend.galery.foto',$data);
    }
    public function video(){
        $data['list_video'] = Video::all();
        return view('frontend.galery.video ', $data);
    }
}