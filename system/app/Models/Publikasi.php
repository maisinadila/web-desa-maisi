<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Publikasi extends Model
{
    protected $table = 'publikasi';
    protected $primaryKey = 'publikasi_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFoto()
    {

        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = 'public/web/publikasi';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-publikasi" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->publikasi_file = $filename;
            $this->save();
        }

    }

    function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/publikasi/' . $this->publikasi_file;
        if (file_exists($path)) {
            unlink($path);
        }
    } 
}
