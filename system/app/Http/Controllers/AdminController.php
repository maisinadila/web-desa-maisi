<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Layanan;
use App\Models\Berita;
use App\Models\Informasi;
use App\Models\Publikasi;
use App\Models\Penduduk;
use App\Models\Pengaturan;
use App\Models\PerangkatDesa;
use App\Models\Ttd;
use DB;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    function beranda(){

        $data['url'] = url()->current();

        $datenow = now();
        $data['penduduk'] = Penduduk::where('flag_erase',1)->count();
        $data['layanan'] = Layanan::count();
        $data['berita'] = Berita::count();
        $data['beritanow'] = Berita::where('created_at', $datenow)->count();
        $data['informasi'] = Informasi::count();
        $data['informasinow'] = Informasi::where('created_at', $datenow)->count();
        $data['publikasi'] = Informasi::count();
        $data['publikasinow'] = Informasi::where('created_at', $datenow)->count();
        $data['surat'] = Ttd::where('status', 0)->count();
        $data['pengaturan'] = Pengaturan::first();
        $data['kepala'] = PerangkatDesa::where('level',2)->first();
        $data['list_surat_baru'] = DB::table('ttd')->where('status',0)->get();
        return view('admin.beranda', $data);
    }
}
