<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Foto;


class FotoController extends Controller{
    function index(){
        $data['user'] = auth()->user();
        $data['list_foto'] = Foto::all();
        return view('admin.foto.index', $data);
    }


    function store(){
        $foto = new Foto;
        $foto->judul = request('judul');               
        $foto->handleUploadFoto();
        $foto->save();

        

        return redirect('admin/foto')->with('success', 'Data Berhasil Ditambahkan');
    
    }
    function edit(Foto $foto){
        $data['user'] = auth()->user();
        $data['foto'] = $foto;
        $data['judul'] = $foto;
        return view('admin.foto.edit', $data);
    }

    function update($foto){
        $foto = Foto::find($foto);
        $foto->judul = request('judul');         
        $foto->handleUploadFoto();
        $foto->save();

        return redirect('admin/foto')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Foto $foto){
        $data['user'] = auth()->user();
        $foto->handleDelete();
        $foto->delete($foto);

        return redirect('admin/foto')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}