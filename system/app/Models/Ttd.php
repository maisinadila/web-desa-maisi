<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Ttd extends Model
{
    protected $table = 'ttd';
    protected $primaryKey = 'ttd_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
