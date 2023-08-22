<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class ProgramDesa extends Model
{
    protected $table = 'program_desa';
    protected $primaryKey = 'program_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFile()
    {

        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = 'public/program-desa';
            $randomStr = Str::random(10);
            $date = date('d-m-Y');
            $filename = $randomStr ."-".$date. "-program-desa" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->file = $filename;
            $this->save();
        }

    }

    function handleDeleteFile(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/program-desa/' . $this->file;
        if (file_exists($path)) {
            unlink($path);
        }
    } 

}
