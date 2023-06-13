<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vtour;
use App\Models\Tempat;


class VtourController extends Controller{
    function index(){
        $data['user'] = auth()->user();
        $data['list_vtour'] = Vtour::all();
        return view('admin.vtour.index', $data);
    }

    function create(){
        $data['user'] = auth()->user();
        $data['list_tempat'] = Tempat::all();
        return view('admin.vtour.create', $data);
        
    }

    function store(Request $request){


    
        $vtour = new Vtour;  
        $vtour->id_tempat = request('id_tempat');         
        $vtour->deskripsi = request('deskripsi');
        $vtour->handleUploadFoto();
        $vtour->save();

        

        return redirect('admin/vtour')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    function show(Vtour $vtour){
        $data['user'] = auth()->user();
        $data['vtour'] = $vtour;
        return view('admin.vtour.show', $data);
        
    }

    function edit(Vtour $vtour){
        $data['user'] = auth()->user();
        $data['vtour'] = $vtour;
        return view('admin.vtour.edit', $data);
    }

    function update(Vtour $vtour){
       
        $vtour->deskripsi = request('deskripsi');
        $vtour->handleUploadFotoUpdate();
        $vtour->save();

        

        

        return redirect('admin/vtour')->with('success', 'Data Berhasil Diedit');
    
        
    }

    function destroy(Vtour $vtour){
        $data['user'] = auth()->user();
        $vtour->handleDelete();
        $vtour->delete($vtour);

        return redirect('admin/vtour')->with('danger', 'Data Berhasil Dihapus');
     
    }

    
}