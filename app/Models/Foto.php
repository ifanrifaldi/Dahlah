<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;

class Foto extends Model
{
    
    protected $table = 'foto';
	protected $primaryKey = 'id';


    
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/foto";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            
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