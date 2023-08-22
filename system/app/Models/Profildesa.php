<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Profildesa extends Model
{
    protected $table = 'profil_desa';
    protected $primaryKey = 'profil_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFoto()
    {

        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = 'public/struktur-organisasi';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-struktur-organisasi" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->struktur_organisasi = $filename;
            $this->save();
        }

    }

    function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/struktur-organisasi/' . $this->struktur_organisasi;
        if (file_exists($path)) {
            unlink($path);
        }
    } 
}
