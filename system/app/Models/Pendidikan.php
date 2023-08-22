<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Pendidikan extends Model
{
    protected $table = 'd_pendidikan';
    protected $primaryKey = 'pendidikan_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
