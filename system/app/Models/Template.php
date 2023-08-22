<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Template extends Model
{
  protected $table = 'template';
    protected $primaryKey = 'template_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

    function handleUploadFile()
    {

      if (request()->hasFile('file')) {
        $count = Template::count();
        $d = $count +1;
        $file = request()->file('file');
        $destination = 'public/template-surat';
        $filename = Str::slug(request('nama_surat'));
        $randomStr = Str::random(10);
        $filename = $filename .".". $file->extension();
        $url = $file->move($destination, $filename);
        $this->file = $filename;
        $this->save;
      }

    }

    function handleDeleteFile(){
      $pathdefault = base_path();
      $pathbase = dirname($pathdefault);
      $path = $pathbase.'/public/template-surat/' . $this->file;
      if (file_exists($path)) {
        unlink($path);
      }
    } 

  }
