<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Kk extends Model
{
    protected $table = 'd_kk';
    protected $primaryKey = 'no_kk'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

    function kepala(){
        return $this->belongsTo(Penduduk::class, 'nik_kepala_kk','nik');
    }

}
