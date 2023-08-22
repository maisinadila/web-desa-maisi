<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    function index(){
       
        return view('admin/manajemen-website/pengunjung/index',);
    } 
}
