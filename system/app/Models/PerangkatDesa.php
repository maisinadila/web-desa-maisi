<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class PerangkatDesa extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFoto()
    {

        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = 'public/perangkat-desa';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-perangkat-desa" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->foto = $filename;
            $this->save();
        }

    }

    function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/perangkat-desa/' . $this->foto;
        if (file_exists($path)) {
            unlink($path);
        }
    } 
}
