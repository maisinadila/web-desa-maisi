<?php

namespace App\Http\Controllers\Profildesa;
use App\Http\Controllers\Controller;
use App\Models\Laporanrealisasianggaran;
use App\Models\Profildesa;
use App\Models\ProgramDesa;
use App\Models\PerangkatDesa;

use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    function wilayahDesa(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();
        return view('admin.profil-desa.wilayah-desa.index',$data);
    }

    function wilayahDesaEdit(Profildesa $profil){
        $data['profil'] = $profil;
        return view('admin.profil-desa.wilayah-desa.edit',$data);
    }

    function wilayahDesaUpdate(Profildesa $profil){
        $profil->profil_wilayah_desa = request('profil_wilayah_desa');
        $profil->save();
        return redirect('admin/profil-desa/profil-wilayah-desa')->with('suucess','Profil Wilayah Desa berhasil diperbaharui')->with('success','Profil berhasil diperbaharui');
    }

    function kepalaDesa(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();
        return view('admin.profil-desa.kepala-desa.index',$data);
    }

    function kepalaDesaEdit(Profildesa $profil){
        $data['breadcrumb_title'] = "Kepala Desa";
        $data['breadcrumb'] = $data['breadcrumb_title']. " / Kepala Desa / Edit";
        $data['profil'] = $profil;
        $data['list_perangkat'] = PerangkatDesa::where('level','!=',2)->get();
        $data['kepala'] = PerangkatDesa::where('level',2)->first();
        return view('admin.profil-desa.kepala-desa.edit',$data);
    }

    function kepalaDesaUpdate(Profildesa $profil){
        $profil->sambutan_kepala = request('isi');
        $profil->save();
        return redirect('admin/profil-desa/kepala-desa-dan-sambutan')->with('success','Keplada desan dan sambutan berhasil diupdate')->with('success','Profil berhasil diperbaharui');
    }

    function perangkatDesa(){
        $data['list_perangkat'] = PerangkatDesa::all();
        $data['breadcrumb_title'] = "Perangkat Desa";
        $data['breadcrumb'] = "Perangkat Desa";
        return view('admin.profil-desa.perangkat-desa.index',$data);
    }

    function perangkatDesaCreate(){
        $data['breadcrumb_title'] = "Perangkat Desa";
        $data['breadcrumb'] = $data['breadcrumb_title']." / Buat Perangkat Desa";
        return view('admin.profil-desa.perangkat-desa.create',$data);
    }

    function perangkatDesaStore(){
        $perangkat = new PerangkatDesa;
        $perangkat->nama = request('nama');
        $perangkat->jabatan = request('jabatan');
        $perangkat->email = request('email');
        $perangkat->notlp = request('notlp');
        $perangkat->password = bcrypt(request('notlp'));
        $perangkat->handleUploadFoto();
        $perangkat->save();
        return redirect('admin/profil-desa/perangkat-desa')->with('success','Perangkat desa berhasil dibuat')->with('success','Profil berhasil diperbaharui');
    }

    function perangkatDesaUpdate(PerangkatDesa $perangkat){
     $perangkat->nama = request('nama');
     $perangkat->jabatan = request('jabatan');
     $perangkat->email = request('email');
     $perangkat->notlp = request('notlp');
     $perangkat->password = bcrypt(request('notlp'));
     $perangkat->handleUploadFoto();
     $perangkat->save();
     return redirect('admin/profil-desa/perangkat-desa')->with('success','Perangkat desa berhasil update')->with('success','Profil berhasil diperbaharui');
 }

 function perangkatDestroy(PerangkatDesa $perangkat){
    $perangkat->delete();
    $perangkat->handleDeleteFoto();
    return back()->with('danger','Peragkat desa telah dihapus');

}

function visiMisi(){
    $data['profil'] = Profildesa::where('profil_id', 1)->first();
    return view('admin.profil-desa.visi-misi-desa.index',$data);
}


function visiMisiEdit(Profildesa $profil){
    $data['profil'] = $profil;
    return view('admin.profil-desa.visi-misi-desa.edit',$data);
}

function visiMisiUpdate(Profildesa $profil){
    $profil->visi = request('visi');
    $profil->misi = request('misi');
    $profil->save();
    return redirect('admin/profil-desa/visi-misi-desa')->with('suucess','Profil Visi Misi Desa berhasil diperbaharui')->with('success','Profil berhasil diperbaharui');
}

function strukturDesa(){
    $data['profil'] = Profildesa::where('profil_id', 1)->first();
    $data['count'] = Profildesa::where('profil_id', 1)->count('struktur_organisasi');
    return view('admin.profil-desa.struktur-desa.index',$data);
}
function strukturDesaUpdate(Profildesa $profil){
    $profil->handleUploadFoto();
    $profil->save();
    return back()->with('success','Profil Desa berhasil diupdate');
}

function programDesa(){
    $data['list_program'] = ProgramDesa::all();
    $data['breadcrumb_title'] = "Program Desa";
    $data['profil'] = Profildesa::where('profil_id', 1)->first();
    return view('admin.profil-desa.program-desa.index',$data);
}

function programDesaCreate(){
 $data['breadcrumb_title'] = "Program Desa";
 $data['breadcrumb'] = $data['breadcrumb_title']. "/ Program Desa ";
 $data['profil'] = Profildesa::where('profil_id', 1)->first();
 return view('admin.profil-desa.program-desa.create',$data);
}

function programDesaStore(){
    $program = new ProgramDesa;
    $program->nama_program = request('nama_program');
    $program->isi = request('isi');
    $program->tahun = request('tahun');
    $program->handleUploadFile();
    $program->save();
    return redirect('admin/profil-desa/program-desa')->with('success','Program desa berhasil dibuat')->with('success','Profil berhasil diperbaharui');
}

function programDesaShow(ProgramDesa $program){
    $data['program'] = $program;
    return view('admin.profil-desa.program-desa.show',$data);
}

function programDesaDestroy(ProgramDesa $program){
    $program->handleDeleteFile();
    $program->delete();
    return back()->with('DANGER','Program desa telah dihapus');
}

function programDesaUpdate(Profildesa $profil){
    $profil->visi = request('visi');
    $profil->save();
    return redirect('admin/profil-desa/visi-misi-desa')->with('suucess','Profil Visi Misi Desa berhasil diperbaharui')->with('success','Profil berhasil diperbaharui');
}

function peraturanDesa(){
    $data['breadcrumb_title'] = "Peraturan Desa";
    $data['breadcrumb'] = $data['breadcrumb_title']. "/ Peraturan Desa";
    $data['profil'] = Profildesa::where('profil_id', 1)->first();
    return view('admin.profil-desa.peraturan-desa.index',$data);
}

function peraturanDesaEdit(Profildesa $profil){
    $data['breadcrumb_title'] = "Peraturan Desa";
    $data['breadcrumb'] = $data['breadcrumb_title']. " / Peraturan Desa / Edit";
    $data['profil'] = $profil;
    return view('admin.profil-desa.peraturan-desa.edit',$data);
}

function peraturanDesaUpdate(Profildesa $profil){
    $profil->peraturan_desa = request('peraturan_desa');
    $profil->save();
    return redirect('admin/profil-desa/peraturan-desa')->with('suucess','Profil Visi Misi Desa berhasil diperbaharui')->with('success','Profil berhasil diperbaharui');
}




}
