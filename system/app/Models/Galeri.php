<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'galeri_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFoto()
    {

        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = 'public/web/galeri';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-galeri" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->galeri_foto = $filename;
            $this->save();
        }

    }

    function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/galeri/' . $this->galeri_foto;
        if (file_exists($path)) {
            unlink($path);
        }
    } 
}
