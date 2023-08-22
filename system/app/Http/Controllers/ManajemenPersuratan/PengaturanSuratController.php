<?php

namespace App\Http\Controllers\ManajemenPersuratan;
use App\Http\Controllers\Controller;
use App\Models\Laporanrealisasianggaran;
use App\Models\Profildesa;

use Illuminate\Http\Request;

class PengaturanSuratController extends Controller
{
    function index(){
        return view('admin.manajemen-persuratan.pengaturan-surat.index');
    }
}
