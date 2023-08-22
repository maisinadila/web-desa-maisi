<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Pekerjaan extends Model
{
    protected $table = 'd_pekerjaan';
    protected $primaryKey = 'pekerjaan_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
