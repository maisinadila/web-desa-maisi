<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Informasi extends Authenticatable
{
      protected $table = 'informasi';
      protected $primaryKey = 'informasi_id';


      function handleUploadFoto()
      {
  
          if (request()->hasFile('file')) {
              $foto = request()->file('file');
              $destination = 'public/web/informasi';
              $randomStr = Str::random(10);
              $filename = $randomStr . "-informasi" .".". $foto->extension();
              $url = $foto->move($destination, $filename);
              $this->informasi_cover = $filename;
              $this->save;
          }

      }

      function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/informasi/' . $this->informasi_cover;
        if (file_exists($path)) {
            unlink($path);
        }
      } 
}




