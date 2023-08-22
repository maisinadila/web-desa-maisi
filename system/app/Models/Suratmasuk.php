<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Suratmasuk extends Model
{
    protected $table = 'surat_masuk';
    protected $primaryKey = 'surat_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini


    function handleUploadFoto()
    {

        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = 'public/surat-masuk';
            $randomStr = Str::random(10);
            $filename = $randomStr . "-surat-masuk" .".". $file->extension();
            $url = $file->move($destination, $filename);
            $this->surat_file = $filename;
            $this->save;
        }

    }

    function handleDeleteFoto(){
      $pathdefault = base_path();
      $pathbase = dirname($pathdefault);
      $path = $pathbase.'/public/surat-masuk/' . $this->surat_file;
      if (file_exists($path)) {
          unlink($path);
      }
    } 
}
