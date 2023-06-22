<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Video;
use App\Models\Vtour;

class HomeController extends Controller
{   
    public function beranda(){
        $data['list_foto'] = Foto::orderBy('id','desc')->take(3)->get();
        $data['list_video'] = Video::orderBy('id','desc')->take(1)->get();
        return view('frontend.beranda',$data);
    }
    public function vtour(){
        $data['list_vtour'] = Vtour::all();
        return view('frontend.vtour.vtour', $data);
    }
    public function view($vtour){
        $data['vtour'] = Vtour::find($vtour);
        return view('frontend.vtour.view',$data);
    }
    public function foto(){
        $data['list_foto'] = Foto::Paginate(3);
        return view('frontend.galery.foto',$data);
    }
    public function video(){
        $data['list_video'] = Video::Paginate(9);
        return view('frontend.galery.video ', $data);
    }
}