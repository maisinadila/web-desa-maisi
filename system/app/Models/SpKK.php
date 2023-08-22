<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class SpKK extends Model
{
    protected $table = 's_sp_kk';
    protected $primaryKey = 'surat_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

    function penduduk(){
        return $this->hasOne(Penduduk::class, 'nik','nik_penduduk');
    }

}
