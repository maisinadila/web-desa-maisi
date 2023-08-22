<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Laporanrealisasianggaran extends Model
{
    protected $table = 'laporan_realisasi_anggaran';
    protected $primaryKey = 'laporan_id';

     function handleUploadFile()
      {
  
          if (request()->hasFile('file')) {
              $foto = request()->file('file');
              $destination = 'public/data-desa/laporan-anggaran';
              $filename = 'data-desa/laporan-anggaran';
              $randomStr = Str::random(10);
              $filename = $filename.'/'.$randomStr . "-laporan-anggaran" .".". $foto->extension();
              $url = $foto->move($destination, $filename);
              $this->file = $filename;
              $this->save;
          }

      }

      function handleDeleteFile(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/data-desa/laporan-anggaran/' . $this->file;
        if (file_exists($path)) {
            unlink($path);
        }
      } 


}
