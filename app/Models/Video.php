<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Video extends Model
{
    
    protected $table = 'video';
	protected $primaryKey = 'id';


    
    function handleUploadFoto(){
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/video";
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
            $destination = "images/video";
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