<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class Banner extends Authenticatable
{
      protected $table = 'banner';
      protected $primaryKey = 'banner_id';


      function handleUploadFoto()
      {
        if (request()->hasFile('file')) {
            $foto = request()->file('file');
            $destination = 'public/web/banner';
            $date = date('d-m-Y');
            $randomStr = Str::random(10);
            $filename = $randomStr ."-".$date."-banner" .".". $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->banner_foto = $filename;
            $this->save;
        }
      }

      function handleDeleteFoto(){
        $pathdefault = base_path();
        $pathbase = dirname($pathdefault);
        $path = $pathbase.'/public/web/banner/' . $this->banner_foto;
        if (file_exists($path)) {
            unlink($path);
        }
      } 
}




