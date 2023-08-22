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
use App\Models\PerangkatDesa;
use App\Models\SkTidakMampu;

use App\Models\SpNikah;
use App\Models\SpNikahDetail;
use App\Models\SkKehilangan;
use App\Models\SkPenghasilan;
use App\Models\SkUsaha;
use App\Models\skBedanama;
use App\Models\skAhliWaris;
use App\Models\skAhliWarisDetail;
use App\Models\SpKK;
use App\Models\SpAkta;
use App\Models\SpSkck;
use App\Models\Pekerjaan;
use DB;
use Str;



class RegistrasiSuratController extends Controller
{


    function index(){
        $data['list_template'] = Template::all();
        return view('admin.manajemen-persuratan.registrasi-surat.index',$data);
    }

    function cariPenduduk(Request $request){
        $output = "";
        $casn['hasil'] = Penduduk::where('nama_lengkap', 'Like', '%' . $request->search . '%')->get();
        return response()->json($casn);
    }

    function pilihPenduduk(Template $template){
        $data['template'] = $template;
        $data['kategori'] = $template;
        $data['desa'] = Pengaturan::first();
        return view('admin.manajemen-persuratan.registrasi-surat.pilih-penduduk',$data);

    }



    // ================= PERLU DISETTING GLOBAL
    function formSurat( Request $request, Template $template, Penduduk $penduduk){

        $data['template'] = $template;
        $data['kategori'] = $template;
        $data['desa'] = Pengaturan::first();
        $data['penduduk'] = Penduduk::where('penduduk_id',$penduduk->penduduk_id)->first();
        $data['kades'] = PerangkatDesa::where('level',2)->first();
        if($template->template_id == 1){
            // SK domisili
            return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.create', $data);   
        }elseif($template->template_id == 2){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.create', $data);   
        }elseif($template->template_id == 3){
            // surat sk Kehilangan
            return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.create', $data);   
        }elseif($template->template_id == 4){
            // surat keterangan Penghasilan
            return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.create', $data);   
        }elseif($template->template_id == 5){
            // surat keterangan usaha
            return view('admin.manajemen-persuratan.registrasi-surat.sk-usaha.create', $data);   
        }elseif($template->template_id == 6){
            // surat keterangan Bedanama
            return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.create', $data);   
        }elseif($template->template_id == 7){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sp-kk.create', $data);   
        }elseif($template->template_id == 8){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sk-tidak-mampu.create', $data);   
        }elseif($template->template_id == 9){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.create', $data);   
        }elseif($template->template_id == 10){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sp-skck.create', $data);   
        }elseif($template->template_id == 11){
            // surat pengantar nikah
            return view('admin.manajemen-persuratan.registrasi-surat.sk-ahli-waris.create', $data);   
        }else{
            return abort(403);
        }
    }


    function formEdit(Template $template){
     $data['halaman'] = 'Manajemen Persuratan';
     $data['template'] = $template;
     return view('admin.manajemen-persuratan.registrasi-surat.edit-template',$data);

 }

 function updateTemplate(Template $template){
    $template->isi = request('isi');
    $template->save();
    return back()->with('success','Isi surat berhasil diedit');
 }

 function indexSurat(Template $template){
    $data['halaman'] = 'Manajemen Persuratan';
    $data['template'] = $template;

    if($template->template_id == 1){
        $data['jenis'] = Template::where('template_id', 1)->first();
        $data['list_surat'] = SkDomisili::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.index',$data);
    }elseif($template->template_id == 2){
        $data['jenis'] = Template::where('template_id', 2)->first();
        $data['list_surat'] = SpNikah::where('flag_erase', 1)->get();
        return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.index',$data);
    }elseif($template->template_id == 3){
        $data['jenis'] = Template::where('template_id', 3)->first();
        $data['list_surat'] = SkKehilangan::where('flag_erase', 1)->get();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.index',$data);
    }elseif($template->template_id == 4){
        $data['jenis'] = Template::where('template_id', 4)->first();
        $data['list_surat'] = SkPenghasilan::where('flag_erase', 1)->get();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.index',$data);
    }elseif($template->template_id == 5){
        $data['jenis'] = Template::where('template_id', 5)->first();
        $data['list_surat'] = SkUsaha::where('flag_erase', 1)->get();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-usaha.index',$data);
    }elseif($template->template_id == 6){
        $data['jenis'] = Template::where('template_id', 6)->first();
        $data['list_surat'] = SkBedanama::where('flag_erase', 1)->get();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.index',$data);
    }elseif($template->template_id == 7){
        $data['jenis'] = Template::where('template_id', 7)->first();
        $data['list_surat'] = SkKehilangan::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.index',$data);
    }elseif($template->template_id == 8){
        $data['jenis'] = Template::where('template_id', 8)->first();
        $data['list_surat'] = SkTidakMampu::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-tidak-mampu.index',$data);
    }elseif($template->template_id == 9){
        $data['jenis'] = Template::where('template_id', 9)->first();
        $data['list_surat'] = SpAkta::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.index',$data);
    }elseif($template->template_id == 10){
        $data['jenis'] = Template::where('template_id', 10)->first();
        $data['list_surat'] = SpSkck::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sp-skck.index',$data);
    }
    elseif($template->template_id == 11){
        $data['jenis'] = Template::where('template_id', 10)->first();
        $data['list_surat'] = SkAhliWaris::all();
        return view('admin.manajemen-persuratan.registrasi-surat.sk-ahli-waris.index',$data);
    }

}

    // ================= END PERLU DISETING


    // ========== MULAI NALDY
    // star copy______________________________________________________________________________

    // 1. SK DOMISILI
function storeSkDomisili(){
   $kk = SpKK::count();

   $a = SkDomisili::count();
   $b = SpAkta::count();
   $c = SkTidakMampu::count();
   $d = SkKehilangan::count();
   $e = SkPenghasilan::count();
   $f = SkUsaha::count();
   $g = skBedanama::count();
   $h = SkAhliWaris::count();
   $i = SpSkck::count();
   $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;

   $bulanx = date('n');
   if ($bulanx == 1) {
    $bulanx = 'I';
} elseif ($bulanx == 2) {
    $bulanx = 'II';
} elseif ($bulanx == 3) {
    $bulanx = 'III';
} elseif ($bulanx == 4) {
    $bulanx = 'IV';
} elseif ($bulanx == 5) {
    $bulanx = 'V';
} elseif ($bulanx == 6) {
    $bulanx = 'VI';
} elseif ($bulanx == 7) {
    $bulanx = 'VII';
} elseif ($bulanx == 8) {
    $bulanx = 'VIII';
} elseif ($bulanx == 9) {
    $bulanx = 'IX';
} elseif ($bulanx == 10) {
    $bulanx = 'X';
} elseif ($bulanx == 11) {
    $bulanx = 'XI';
} elseif ($bulanx == 12) {
    $bulanx = 'XII';
};

$sk = new SkDomisili;
$sk->nik_penduduk = request('nik_penduduk');
$sk->status = 0;
$sk->kode_token = Str::random(35);
$sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
$sk->save();

$url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-domisili/'.$sk->surat_id.'/show';
DB::table('ttd')->insert([
    'url' => 'http://localhost/web-desa/'.$url,
    'id_surat' => $sk->surat_id,
    'jenis_surat' => 'surat keterangan domisili'
]);
return redirect('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-domisili')->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function showSkDomisili(Template $template, SkDomisili $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $template_isi = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();


    return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.show',$data);
}

function cetakSkDomisili(Template $template, SkDomisili $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.cetak',$data);
}

function ttdSkDomisili(Template $template, SkDomisili $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}
    // end copy______________________________________________________________________________




    // 8. SK TIDAK MAMPU
function storeSkTidakMampu(){

 $a = SkDomisili::count();
 $b = SpAkta::count();
 $c = SkTidakMampu::count();
 $d = SkKehilangan::count();
 $e = SkPenghasilan::count();
 $f = SkUsaha::count();
 $g = skBedanama::count();
 $h = SkAhliWaris::count();
 $i = SpSkck::count();
 $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;
 $bulanx = date('n');

 if ($bulanx == 1) {
    $bulanx = 'I';
} elseif ($bulanx == 2) {
    $bulanx = 'II';
} elseif ($bulanx == 3) {
    $bulanx = 'III';
} elseif ($bulanx == 4) {
    $bulanx = 'IV';
} elseif ($bulanx == 5) {
    $bulanx = 'V';
} elseif ($bulanx == 6) {
    $bulanx = 'VI';
} elseif ($bulanx == 7) {
    $bulanx = 'VII';
} elseif ($bulanx == 8) {
    $bulanx = 'VIII';
} elseif ($bulanx == 9) {
    $bulanx = 'IX';
} elseif ($bulanx == 10) {
    $bulanx = 'X';
} elseif ($bulanx == 11) {
    $bulanx = 'XI';
} elseif ($bulanx == 12) {
    $bulanx = 'XII';
};

$sk = new SkTidakMampu;
$sk->nik_penduduk = request('nik_penduduk');
$sk->status = 0;
$sk->kode_token = Str::random(35);
$sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
$sk->save();


    // key:ttd
$url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-tidak-mampu/'.$sk->surat_id.'/show';
DB::table('ttd')->insert([
    'url' => 'http://localhost/web-desa/'.$url,
    'id_surat' => $sk->surat_id,
    'jenis_surat' => 'surat keterangan tidak mampu'
]);

return redirect('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-tidak-mampu')->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function showSkTidakMampu(Template $template, SkTidakMampu $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-tidak-mampu.show',$data);
}

function cetakSkTidakMampu(Template $template, SkTidakMampu $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-tidak-mampu.cetak',$data);
}

function ttdSkTidakMampu(Template $template, SkTidakMampu $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}


    // ================ END NALDY =============






    // =================================================
    // ================ START LENI =====================
    // =================================================

    // -------------- Start Surat Pengantar Nikah
function storeSpNikah(){


    $a = SpNikah::count();
    $no = $a + 1;
    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };
// $sk->no_surat = '472.21/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk = new SpNikah;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->kode_token = Str::random(35);
    $sk->no_surat = '472.21/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();


 // key:ttd
    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-nikah/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat Pengantar nikah'
    ]);

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-nikah/createtambahan/'.$sk->surat_id;
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function createTambahanNikah(Template $template, SpNikah $id){
    $data['detail'] = $id;
    $data['template'] = $template;
    $data['list_pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.createTambahan',$data);
}

function storeTambahanNikah(SpNikah $id){
    $detail = new SpNikahDetail;

    // ISTRI
    $detail->nikah_id = $id->surat_id;
    $detail->nama_istri = request('nama_istri');
    $detail->nik_istri = request('nik_istri');
    $detail->tgl_lahir_istri = request('tgl_lahir_istri');
    $detail->tempat_lahir_istri = request('tempat_lahir_istri');
    $detail->jk_istri = request('jk_istri');
    $detail->kewarganegaraan_istri = request('kewarganegaraan_istri');
    $detail->agama_istri = request('agama_istri');
    $detail->pekerjaan_istri = request('pekerjaan_istri');
    $detail->alamat_istri = request('alamat_istri');
    $detail->bin_istri = request('bin_istri');

    $detail->nama_ayah_istri = request('nama_ayah_istri');
    $detail->tgl_lahir_ayah_istri = request('tgl_lahir_ayah_istri');
    $detail->tempat_lahir_ayah_istri = request('tempat_lahir_ayah_istri');
    $detail->jk_ayah_istri = request('jk_ayah_istri');
    $detail->kewarganegaraan_ayah_istri = request('kewarganegaraan_ayah_istri');
    $detail->agama_ayah_istri = request('agama_ayah_istri');
    $detail->pekerjaan_ayah_istri = request('pekerjaan_ayah_istri');
    $detail->alamat_ayah_istri = request('alamat_ayah_istri');

    $detail->nama_ibu_istri = request('nama_ibu_istri');
    $detail->tgl_lahir_ibu_istri = request('tgl_lahir_ibu_istri');
    $detail->tempat_lahir_ibu_istri = request('tempat_lahir_ibu_istri');
    $detail->jk_ibu_istri = request('jk_ibu_istri');
    $detail->kewarganegaraan_ibu_istri = request('kewarganegaraan_ibu_istri');
    $detail->agama_ibu_istri = request('agama_ibu_istri');
    $detail->pekerjaan_ibu_istri = request('pekerjaan_ibu_istri');
    $detail->alamat_ibu_istri = request('alamat_ibu_istri');


    // SUAMI
    $detail->nama_suami = request('nama_suami');
    $detail->nik_suami = request('nik_suami');
    $detail->tgl_lahir_suami = request('tgl_lahir_suami');
    $detail->tempat_lahir_suami = request('tempat_lahir_suami');
    $detail->jk_suami = request('jk_suami');
    $detail->kewarganegaraan_suami = request('kewarganegaraan_suami');
    $detail->agama_suami = request('agama_suami');
    $detail->pekerjaan_suami = request('pekerjaan_suami');
    $detail->alamat_suami = request('alamat_suami');
    $detail->bin_suami = request('bin_suami');

    $detail->nama_ayah_suami = request('nama_ayah_suami');
    $detail->tgl_lahir_ayah_suami = request('tgl_lahir_ayah_suami');
    $detail->tempat_lahir_ayah_suami = request('tempat_lahir_ayah_suami');
    $detail->jk_ayah_suami = request('jk_ayah_suami');
    $detail->kewarganegaraan_ayah_suami = request('kewarganegaraan_ayah_suami');
    $detail->agama_ayah_suami = request('agama_ayah_suami');
    $detail->pekerjaan_ayah_suami = request('pekerjaan_ayah_suami');
    $detail->alamat_ayah_suami = request('alamat_ayah_suami');

    $detail->nama_ibu_suami = request('nama_ibu_suami');
    $detail->tgl_lahir_ibu_suami = request('tgl_lahir_ibu_suami');
    $detail->tempat_lahir_ibu_suami = request('tempat_lahir_ibu_suami');
    $detail->jk_ibu_suami = request('jk_ibu_suami');
    $detail->kewarganegaraan_ibu_suami = request('kewarganegaraan_ibu_suami');
    $detail->agama_ibu_suami = request('agama_ibu_suami');
    $detail->pekerjaan_ibu_suami = request('pekerjaan_ibu_suami');
    $detail->alamat_ibu_suami = request('alamat_ibu_suami');

    $detail->n1_istri = request('n1_istri');
    $detail->n1_suami = request('n1_suami');
    $detail->n2_istri = request('n2_istri');
    $detail->n2_suami = request('n2_suami');
    $detail->n3 = request('n3');
    $detail->n4_istri = request('n4_istri');
    $detail->n4_suami = request('n4_suami');

    $detail->save();

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-nikah';
    return redirect($redirect)->with('success','berhasil');
}

function showSpNikah(Template $template, SpNikah $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.show',$data);
}

function cetakSpNikah(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.cetak',$data);
}

function cetakSpNikahN1Istri(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n1-istri',$data);
}

function cetakSpNikahN2Istri(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n2-istri',$data);
}

function cetakSpNikahN3(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n3',$data);
}

function cetakSpNikahN4Istri(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n4-istri',$data);
}

function cetakSpNikahN1Suami(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n1-suami',$data);
}

function cetakSpNikahN2Suami(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n2-suami',$data);
}

function cetakSpNikahN3Suami(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n3-suami',$data);
}

function cetakSpNikahN4Suami(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['detailmodel'] = SpNikahDetail::where('nikah_id',$id->surat_id)->first();
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.n4-suami',$data);
}

function hapusSpNikah(SpNikah $id){
    $id->flag_erase = 0;
    $id->save();
    return back()->with('success','surat berhasil di hapus');
}

function ttdSpNikah(Template $template, SpNikah $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

    // -------------- Start Surat Keterangan Kehilangan

function storeSkKehilangan(){

    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;

    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };


    $sk = new SkKehilangan;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->kode_token = Str::random(35);
    $sk->save();

    // key:ttd
    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-kehilangan/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat keterangan kehilangan'
    ]);

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-kehilangan/createtambahan/'.$sk->surat_id;
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function ttdSkKehilangan(Template $template, SkKehilangan $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

function createTambahan(skKehilangan $id){
    $data['surat'] = $id;
    $data['template'] = Template::where('template_id', $id->id_template)->first();

    return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.createTambahan', $data);
}
function storeTambahan(skKehilangan $id){

    $id->kehilangan_barang = request('barang');
    $id->alasan_kehilangan = request('alasan');
    $id->save();

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-kehilangan/'.$id->surat_id.'/show';
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function showSkKehilangan(Template $template, SkKehilangan $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();

    $data['kades'] = PerangkatDesa::where('level',2)->first();


    return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.show',$data);
}

function cetakSkKehilangan(Template $template, SkKehilangan $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.cetak',$data);
}

function hapusSkKehilangan(SkKehilangan $id){
    $id->flag_erase = 0;
    $id->save();
    return back();
}

    // -------------- Start Surat Keterangan Penghasilan
function storeSkPenghasilan(){
    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;


    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };
// $sk->no_surat = '472.21/'.$no.'/SM/'.$bulanx.'/'.date('Y');

    $sk = new SkPenghasilan;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->kode_token = Str::random(35);
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();

    // key:ttd
    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-penghasilan/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat keterangan penghasilan'
    ]);

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-penghasilan/createtambahan/'.$sk->surat_id;
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}


function ttdSkPenghasilan(Template $template, SkPenghasilan $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

function createTambahanPenghasilan(skPenghasilan $id){
    $data['surat'] = $id;
    $data['template'] = Template::where('template_id', $id->id_template)->first();

    return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.createTambahan', $data);
}
function storeTambahanPenghasilan(skPenghasilan $id){

    $id->penghasilan_min = request('min');
    $id->penghasilan_max = request('max');
    $id->save();

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-penghasilan/'.$id->surat_id.'/show';
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function showSkPenghasilan(Template $template, SkPenghasilan $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.show',$data);
}

function cetakSkPenghasilan(Template $template, SkPenghasilan $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();        $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.cetak',$data);
}

function hapusSkPenghasilan(skPenghasilan $id){
    $id->flag_erase = 0;
    $id->save();
    return back();
}

    // -------------- Surat Keterangan Usaha
function storeSkUsaha(){

    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;

    
    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };


    $sk = new SkUsaha;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();

    // key:ttd
    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-usaha/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat keterangan penghasilan'
    ]);
    return redirect('admin/manajemen-persuratan/registrasi-surat/surat-keterangan-usaha')->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}


function ttdSkUsaha(Template $template, SkUsaha $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}


function showSkUsaha(Template $template, SkUsaha $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();        
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-usaha.show',$data);
}

function cetakSkUsaha(Template $template, SkUsaha $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $tambahan = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $tambahan->no_kk)->first();  
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-usaha.cetak',$data);
}

function hapusSkUsaha(SkUsaha $id){
    $id->flag_erase = 0;
    $id->save();
    return back();
}
    // -------------- Start Surat Keterangan Beda Nama
function storeSkBedaNama(){

    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;

    
    $bulanx = date('n');

    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };
    $sk = new skBedanama;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->kode_token = Str::random(35);
    $sk->save();

    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-beda-nama/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat keterangan beda nama'
    ]);

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-beda-nama/createtambahan/'.$sk->surat_id;
    return redirect($redirect)->with('success','Isi Formulir berikut');

}

function ttdSkBedanama(Template $template, skBedanama $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

function createTambahanBedanama(skBedanama $id){
    $data['surat'] = $id;
    $data['template'] = Template::where('template_id', $id->id_template)->first();

    return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.createTambahan', $data);
}
function storeTambahanBedanama(skBedanama $id){

    $id->surat_rujukan = request('surat');
    $id->nama_yg_salah = request('salahnama');
    $id->save();

    $redirect = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-beda-nama/'.$id->surat_id.'/show';
    return redirect($redirect)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function showSkBedaNama(Template $template, skBedanama $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $penduduk = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $penduduk->no_kk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.show',$data);
}

function cetakSkBedaNama(Template $template, skBedanama $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $penduduk = $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $penduduk->no_kk)->first();        
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.cetak',$data);
}

function hapusSkBedaNama(skBedanama $id){
    $id->flag_erase = 0;
    $id->save();
    return back();
}
    // ================ END LENI ===============















// function create(Template $template){
//     $data['template'] = $template;
//     if($template->template_id == 1){
//                 // SK domisili
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.create', $data);   
//     }elseif($template->template_id == 2){
//                 // surat pengantar nikah
//         return view('admin.manajemen-persuratan.registrasi-surat.sp-nikah.create', $data);   
//     }elseif($template->template_id == 3){
//                 // surat sk Kehilangan
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.create', $data);   
//     }elseif($template->template_id == 4){
//                 // surat keterangan Penghasilan
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-penghasilan.create', $data);   
//     }elseif($template->template_id == 5){
//                 // surat keterangan usaha
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-usaha.create', $data);   
//     }elseif($template->template_id == 6){
//                 // surat keterangan Bedanama
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-bedanama.create', $data);   
//     }elseif($template->template_id == 7){
//                 // surat pengantar nikah
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.create', $data);   
//     }elseif($template->template_id == 8){
//                 // surat pengantar nikah
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-tiak-mampu.create', $data);   
//     }elseif($template->template_id == 9){
//                 // surat pengantar nikah
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.create', $data);   
//     }elseif($template->template_id == 10){
//                 // surat pengantar nikah
//         return view('admin.manajemen-persuratan.registrasi-surat.sk-kehilangan.create', $data);   
//     }else{
//         return abort(403);
//     }


// }


function skDomisiliShow(SkDomisili $sk){
    $data['detail'] = $sk;
    return view('admin.manajemen-persuratan.registrasi-surat.sk-domisili.show',$data);
}



// KEY:AHLIWARIS
function storeSkAhliWaris(){
 $a = SkDomisili::count();
 $b = SpAkta::count();
 $c = SkTidakMampu::count();
 $d = SkKehilangan::count();
 $e = SkPenghasilan::count();
 $f = SkUsaha::count();
 $g = skBedanama::count();
 $h = SkAhliWaris::count();
 $i = SpSkck::count();
 $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;
 $bulanx = date('n');

 if ($bulanx == 1) {
    $bulanx = 'I';
} elseif ($bulanx == 2) {
    $bulanx = 'II';
} elseif ($bulanx == 3) {
    $bulanx = 'III';
} elseif ($bulanx == 4) {
    $bulanx = 'IV';
} elseif ($bulanx == 5) {
    $bulanx = 'V';
} elseif ($bulanx == 6) {
    $bulanx = 'VI';
} elseif ($bulanx == 7) {
    $bulanx = 'VII';
} elseif ($bulanx == 8) {
    $bulanx = 'VIII';
} elseif ($bulanx == 9) {
    $bulanx = 'IX';
} elseif ($bulanx == 10) {
    $bulanx = 'X';
} elseif ($bulanx == 11) {
    $bulanx = 'XI';
} elseif ($bulanx == 12) {
    $bulanx = 'XII';
};
$sk = new SkAhliWaris;
$sk->nik_penduduk = request('nik_penduduk');
$sk->status = 0;
$sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
$sk->kode_token = Str::random(35);
$sk->save();

$url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-ahli-waris/'.$sk->surat_id.'/show';
DB::table('ttd')->insert([
    'url' => 'http://localhost/web-desa/'.$url,
    'id_surat' => $sk->surat_id,
    'jenis_surat' => 'surat keterangan ahli waris'
]);

$urltambah = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-ahli-waris/createtambahan/'.$sk->surat_id;
return redirect($urltambah)->with('success','Isi Formulir berikut');

}

function createTambahanAhliWaris(SkAhliWaris $id){
    $data['surat'] = $id;
    $data['template'] = Template::where('template_id', $id->id_template)->first();

    return view('admin.manajemen-persuratan.registrasi-surat.sk-ahli-waris.craeteTambahan', $data);
}

function storeTambahanAhliWaris(Request $request, skAhliWaris $id){

    $id->tgl = request('tgl');
    $id->tempat = request('tempat');
    $id->sebab = request('sebab');
    $id->tempat_pemakam = request('tempat_pemakam');
    $id->saksi_1 = request('saksi_1');
    $id->saksi_2 = request('saksi_2');
    $id->update();
    for ($i = 0; $i < count($request->nama); $i++) {
     $detail = new SkAhliWarisDetail;
     $detail->surat_id = $id->surat_id;
     $detail->nama = $request->nama[$i];
     $detail->jenis_kelamin = $request->jenis_kelamin[$i];
     $detail->umur = $request->umur[$i];
     $detail->hubungan = $request->hubungan[$i];
     $detail->save();
 }

 $url = 'admin/manajemen-persuratan/registrasi-surat/surat-keterangan-ahli-waris/'.$id->surat_id.'/show';
 return redirect($url)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}

function ttdSkAhliWaris(Template $template, SkAhliWaris $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

function showSkAhliWaris(Template $template, SkAhliWaris $id){
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $data['penduduk']->no_kk)->first();    
    $data['list_detail'] = SkAhliWarisDetail::where('surat_id', $id->surat_id)->get();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-ahli-waris.show', $data);
}

function cetakSkAhliWaris(Template $template, SkAhliWaris $id){
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $data['penduduk']->no_kk)->first();    
    $data['list_detail'] = SkAhliWarisDetail::where('surat_id', $id->surat_id)->get();
    return view('admin.manajemen-persuratan.registrasi-surat.sk-ahli-waris.cetak', $data);
}


function storeSpKK(){

    $a = SpKK::count();
    $no = $a+1;
    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };

    $sk = new SpKK;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->kode_token = Str::random(35);
    $sk->no_surat = '474.4/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();

    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-kk/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat Pengantar KK'
    ]);
    return redirect($url)->with('success','SK telah dibuat, menunggu persetujuan Kepala Desa');
}


function ttdSpKK(Template $template, SpKK $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

function showSpKK(Template $template, SpKK $id){
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kk'] = Kk::where('no_kk', $data['penduduk']->no_kk)->first();    
    return view('admin.manajemen-persuratan.registrasi-surat.sp-kk.show', $data);
}


// AKTA
function storeSpAktaKelahiran(){

    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;
    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };

    $sk = new SpAkta;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->kode_token = Str::random(35);
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();

    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-akta-kelahiran/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat Pengantar akta kelahiran'
    ]);
    return redirect($url);
}

function showSpAktaKelahiran(Template $template, SpAkta $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.show',$data);
}

function cetakSpAktaKelahiran(Template $template, SpAkta $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.cetak',$data);
}

function ttdSpAktaKelahiran(Template $template, SpAkta $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}


// SKCK


function storeSpSkck(){

    $a = SkDomisili::count();
    $b = SpAkta::count();
    $c = SkTidakMampu::count();
    $d = SkKehilangan::count();
    $e = SkPenghasilan::count();
    $f = SkUsaha::count();
    $g = skBedanama::count();
    $h = SkAhliWaris::count();
    $i = SpSkck::count();
    $no = $a+$b+$c+$d+$e+ $f+ $g +$h +$i +1;
    $bulanx = date('n');
    if ($bulanx == 1) {
        $bulanx = 'I';
    } elseif ($bulanx == 2) {
        $bulanx = 'II';
    } elseif ($bulanx == 3) {
        $bulanx = 'III';
    } elseif ($bulanx == 4) {
        $bulanx = 'IV';
    } elseif ($bulanx == 5) {
        $bulanx = 'V';
    } elseif ($bulanx == 6) {
        $bulanx = 'VI';
    } elseif ($bulanx == 7) {
        $bulanx = 'VII';
    } elseif ($bulanx == 8) {
        $bulanx = 'VIII';
    } elseif ($bulanx == 9) {
        $bulanx = 'IX';
    } elseif ($bulanx == 10) {
        $bulanx = 'X';
    } elseif ($bulanx == 11) {
        $bulanx = 'XI';
    } elseif ($bulanx == 12) {
        $bulanx = 'XII';
    };

    $sk = new SpSkck;
    $sk->nik_penduduk = request('nik_penduduk');
    $sk->status = 0;
    $sk->kode_token = Str::random(35);
    $sk->no_surat = '140/'.$no.'/SM/'.$bulanx.'/'.date('Y');
    $sk->save();

    $url = 'admin/manajemen-persuratan/registrasi-surat/surat-pengantar-skck/'.$sk->surat_id.'/show';
    DB::table('ttd')->insert([
        'url' => 'http://localhost/web-desa/'.$url,
        'id_surat' => $sk->surat_id,
        'jenis_surat' => 'surat Pengantar SKCK'
    ]);
    return redirect($url)->with('success','Surat Pengantar SKCK telah dibuat');
}

function showSpSkck(Template $template, SpSkck $id, Request $request){
    $data['template'] = $template;
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.show',$data);
}

function cetakSpSkck(Template $template, SpSkck $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.manajemen-persuratan.registrasi-surat.sp-akta.cetak',$data);
}

function ttdSpSkck(Template $template, SpSkck $id){
    $data['template'] = Template::where('template_id',$id->id_template)->first();
    $data['kategori'] = $template;
    $data['detail'] = $id;
    $data['desa'] = Pengaturan::first();
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();

    $id->status = 1;
    $id->save();
    return back()->with('success','Surat berhasil di Tanda Tangan Digital');
}

}
