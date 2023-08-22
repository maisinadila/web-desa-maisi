<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Layanan extends Model
{
      protected $table = 'layanan';
      protected $primaryKey = 'layanan_id';

      function handleUploadFoto()
      {
  
          if (request()->hasFile('file')) {
              $foto = request()->file('file');
              $destination = 'public/web/layanan';
              $randomStr = Str::random(10);
              $date = date('d-m-Y');
              $filename = $randomStr ."-".$date. "-layanan" .".". $foto->extension();
              $url = $foto->move($destination, $filename);
              $this->layanan_icon = $filename;
              $this->save();
          }
  
      }
  
      function handleDeleteFoto(){
          $pathdefault = base_path();
          $pathbase = dirname($pathdefault);
          $path = $pathbase.'/public/web/layanan/' . $this->layanan_icon;
          if (file_exists($path)) {
              unlink($path);
          }
      } 
}




