<?php

namespace App\Http\Controllers\ManajemenPersuratan;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;

use App\Models\Laporanrealisasianggaran;
use App\Models\Profildesa;
use App\Models\Template;
use App\Models\Penduduk;
use App\Models\Kk;
use App\Models\Pengaturan;
use App\Models\SkDomisili;
use App\Models\SpNikah;
use App\Models\skKehilangan;
use App\Models\Suratmasuk;



class SuratmasukController extends Controller
{
    function index(){
        $data['surat'] = Suratmasuk::where('flag_erase', 1)->get();
        return view('admin/manajemen-persuratan/surat-masuk/index', $data);
    }

    function store(Request $request){
        $simpan = new Suratmasuk();
        $simpan->surat_nomor = request('nomor');
        $simpan->surat_jenis = request('jenis');
        $simpan->surat_perihal = request('perihal');
        $simpan->surat_pengirim = request('pengirim');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/manajemen-persuratan/s-masuk')->with('success', 'Data berhasil di tambahkan');
    }

    function detail(Suratmasuk $id){
        $data['surat'] = $id;
        return view('admin/manajemen-persuratan/surat-masuk/detail', $data);
    }

    function delete(Suratmasuk $id){
        $id->flag_erase = 0;
        $id->save();
        return back()->with('success', 'berhasil hapus data');
    }
}