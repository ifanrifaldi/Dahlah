<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;


class VideoController extends Controller{
    function index(){
        $data['user'] = auth()->user();
        $data['list_video'] = Video::all();
        return view('admin.video.index', $data);
    }

    function create(){
        $data['user'] = auth()->user();
        return view('admin.video.create', $data);
        
    }

    function store(){
        $video = new Video;
        $video->judul = request('judul');
        $video->deskripsi = request('deskripsi');                
        $video->link = request('link'); 
        $video->save();

        

        return redirect('admin/video')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Video $video){
        $data['user'] = auth()->user();
        $data['video'] = $video;
        return view('admin.video.show', $data);
        
    }

    function edit(Video $video){
        $data['user'] = auth()->user();
        $data['video'] = $video;
        return view('admin.video.edit', $data);
    }

    function update(Video $video){
        $video->judul = request('judul'); 
        $video->deskripsi = request('deskripsi');      
        $video->link = request('link');   
        $video->save();

        

        

        return redirect('admin/video')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Video $video){
        $data['user'] = auth()->user();
        $video->delete($video);

        return redirect('admin/video')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}