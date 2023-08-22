<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Agama extends Model
{
    protected $table = 'd_agama';
    protected $primaryKey = 'agama_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
