<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class SkPenghasilan extends Model
{
    protected $table = 's_sk_penghasilan';
    protected $primaryKey = 'surat_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

    function penduduk(){
        return $this->hasOne(Penduduk::class, 'nik','nik_penduduk');
    }

}
