<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Pengaturan extends Model
{
    protected $table = 'pengaturan';
    protected $primaryKey = 'pengaturan_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadLogo()
    {

        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = 'public/web/pengaturan';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-logo" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->logo = $filename;
            $this->save();
        }

    }

    function handleDeleteLogo(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/pengaturan/' . $this->logo;
        if (file_exists($path)) {
            unlink($path);
        }
    } 

}
