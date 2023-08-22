<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class StatusHubungan extends Model
{
    protected $table = 'd_status_hubungan';
    protected $primaryKey = 'status_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

}
