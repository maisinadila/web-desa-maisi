<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Galeridetail extends Authenticatable
{
      protected $table = 'galeri_detail';
      protected $primaryKey = 'galeri_detail_id';

      function handleUploadFoto()
      {
  
          if (request()->hasFile('file')) {
              $foto = request()->file('file');
              $galeri_id = request('galeri_id');;
              $destination = 'public/foto/galeri';
              $randomStr = Str::random(10);
              $filename = $randomStr . "-galeridetail-".$galeri_id .".". $foto->extension();
              $url = $foto->move($destination, $filename);
              $this->galeri_detail_foto = $filename;
              $this->save;
          }

      }
}




