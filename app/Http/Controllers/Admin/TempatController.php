<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tempat;


class TempatController extends Controller{
    function index(){
        $data['user'] = auth()->user();
        $data['list_tempat'] = Tempat::all();
        return view('admin.tempat.index', $data);
    }

    function create(){
        $data['user'] = auth()->user();
        return view('admin.tempat.create', $data);
        
    }

    function store(){
        $tempat = new Tempat;
        $tempat->nama = request('nama');        
        $tempat->handleUploadFoto();
        $tempat->save();

        

        return redirect('admin/tempat')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Tempat $tempat){
        $data['user'] = auth()->user();
        $data['tempat'] = $tempat;
        return view('admin.tempat.show', $data);
        
    }

    function edit(Tempat $tempat){
        $data['user'] = auth()->user();
        $data['tempat'] = $tempat;
        return view('admin.tempat.edit', $data);
    }

    function update(Tempat $tempat){
        $tempat->nama = request('nama');       
        $tempat->handleUploadFotoUpdate();
        $tempat->save();

        

        

        return redirect('admin/tempat')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Tempat $tempat){
        $data['user'] = auth()->user();
        $tempat->handleDelete();
        $tempat->delete($tempat);

        return redirect('admin/tempat')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}