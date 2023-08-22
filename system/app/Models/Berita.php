<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Berita extends Authenticatable
{
      protected $table = 'berita';
      protected $primaryKey = 'berita_id';


      function handleUploadFoto()
      {
  
          if (request()->hasFile('file')) {
              $foto = request()->file('file');
              $destination = 'public/web/berita';
              $randomStr = Str::random(10);
              $filename = $randomStr . "-berita" .".". $foto->extension();
              $url = $foto->move($destination, $filename);
              $this->berita_cover = $filename;
              $this->save;
          }

      }

      function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/berita/' . $this->berita_cover;
        if (file_exists($path)) {
            unlink($path);
        }
      } 
}




