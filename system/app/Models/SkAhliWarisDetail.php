<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class SkAhliWarisDetail extends Model
{
    protected $table = 's_sk_ahli_waris_detail';
    protected $primaryKey = 'detail_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

    function surat(){
        return $this->belongsTo(SkAhliWaris::class, 'surat_id');
    }

}
