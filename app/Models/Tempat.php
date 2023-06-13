<?php

namespace App\Models;

use Illuminate\Support\Str;

use App\Models\Model;

class Tempat extends Model
{
    
    protected $table = 'tempat';
	protected $primaryKey = 'id';

    


    function Vtour(){
        return $this->hasMany(Vtour::class, 'id_tempat');
    }


    
    function handleUploadFoto(){
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/tempat";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();

        }
    }
    
    function handleUploadFotoUpdate(){
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/tempat";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();

        }
    }
    
    function handleDelete(){
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
             if(file_exists($path)){
                unlink($path);
        }
        
        }
        return true;
    }

}