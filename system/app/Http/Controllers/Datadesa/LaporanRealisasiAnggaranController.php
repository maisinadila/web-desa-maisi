<?php

namespace App\Http\Controllers\Datadesa;
use App\Http\Controllers\Controller;
use App\Models\Laporanrealisasianggaran;

use Illuminate\Http\Request;

class LaporanRealisasiAnggaranController extends Controller
{
    function index(){
        $data['list_laporan'] = Laporanrealisasianggaran::all();
        return view('admin.data-desa.laporan-anggaran.index',$data);
    }

    function store(){
        $laporan = new Laporanrealisasianggaran;
        $laporan->judul = request('judul');
        $laporan->tahun = request('tahun');
        $laporan->handleUploadFile();
        $laporan->save();
        return back()->with('success','Laporan berhasil upload');
    }

    function destroy(Laporanrealisasianggaran $laporan){
        $laporan->handleDeleteFile();
        $laporan->delete();
        return back()->with('danger','Laporanberhasil dihapus');
    }
}
