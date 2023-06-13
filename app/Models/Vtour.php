<?php

namespace App\Models;

 use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Tempat;

class Vtour extends Model
{
    
    protected $table = 'vtour';
	protected $primaryKey = 'id';

    function Tempat(){
        return $this->belongsTo(Tempat::class, 'id_tempat');
    }


    


    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/vtour";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
       
    }

    function handleUploadFotoUpdate()
    {
       
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/vtour";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        return true;
    }
    

}