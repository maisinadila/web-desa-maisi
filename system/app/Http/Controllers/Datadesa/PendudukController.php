<?php

namespace App\Http\Controllers\Datadesa;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Kk;
use App\Models\Agama;
use App\Models\Pekerjaan;
use App\Models\StatusHubungan;

class PendudukController extends Controller
{
    function index(){
     $kk = $data['list_kk'] = Kk::where('flag_erase',1)->get();

     return view('admin.data-desa.penduduk.index',$data);
 }

 function create(){
    $data['status_hubungan'] = StatusHubungan::where('flag_erase',1)->get();
    $data['list_pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();
    $data['list_agama'] = Agama::all();
    return view('admin.data-desa.penduduk.create',$data);
}

function store(Request $request){

    for ($i = 0; $i < count($request->nik); $i++) {
      $penduduk = new Penduduk;
      $penduduk->nama_lengkap = $request->nama_lengkap[$i];
      $penduduk->nik = $request->nik[$i];
      $penduduk->no_kk = $request->no_kk;
      $penduduk->jenis_kelamin = $request->jenis_kelamin[$i];
      $penduduk->tempat_lahir = $request->tempat_lahir[$i];
      $penduduk->tanggal_lahir = $request->tanggal_lahir[$i];
      $penduduk->agama = $request->agama[$i];
      $penduduk->pendidikan = $request->pendidikan[$i];
      $penduduk->jenis_pekerjaan = $request->pekerjaan[$i];
      $penduduk->status_pernikahan = $request->status_pernikahan[$i];
      $penduduk->status_hubungan_dalam_keluarga = $request->status_hubungan_dalam_keluarga[$i];
      $penduduk->kewarganegaraan = $request->kewarganegaraan[$i];
      $penduduk->no_paspor = $request->no_paspor[$i];
      $penduduk->no_kitap = $request->no_kitap[$i];
      $penduduk->ayah = $request->ayah[$i];
      $penduduk->ibu = $request->ibu[$i];
      $penduduk->golongan_darah = $request->golongan_darah[$i];
      $penduduk->save();
  }

  $kk = new Kk;
  $kk->no_kk = request('no_kk');
  $kk->nik_kepala_kk = $request->nik[0];
  $kk->alamat = request('alamat');
  $kk->rt = request('rt');
  $kk->rw = request('rw');
  $kk->kode_pos = request('kode_pos');
  $kk->desa = request('desa');
  $kk->kecamatan = request('kecamatan');
  $kk->kabupaten = request('kabupaten');
  $kk->provinsi = request('provinsi');

  $kk->save();

  return redirect('admin/data-desa/penduduk')->with('success','KK Berhasil ditambah');
}

function show(Kk $kk){
    $data['list_anggota'] = Penduduk::where('no_kk',$kk->no_kk)
    ->where('flag_erase',1)
    ->get();
    $data['detail'] = $kk;
    return view('admin.data-desa.penduduk.show',$data);
}

function tambah(Kk $kk){
    $data['detail'] = $kk;
     $data['status_hubungan'] = StatusHubungan::where('flag_erase',1)->get();
    $data['list_pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();
    $data['list_agama'] = Agama::all();
    return view('admin.data-desa.penduduk.tambah',$data);
}

function postTambah(Request $request, Kk $kk){
    for ($i = 0; $i < count($request->nik); $i++) {
      $penduduk = new Penduduk;
      $penduduk->nama_lengkap = $request->nama_lengkap[$i];
      $penduduk->nik = $request->nik[$i];
      $penduduk->no_kk = $kk->no_kk;
      $penduduk->jenis_kelamin = $request->jenis_kelamin[$i];
      $penduduk->tempat_lahir = $request->tempat_lahir[$i];
      $penduduk->tanggal_lahir = $request->tanggal_lahir[$i];
      $penduduk->agama = $request->agama[$i];
      $penduduk->pendidikan = $request->pendidikan[$i];
      $penduduk->jenis_pekerjaan = $request->pekerjaan[$i];
      $penduduk->status_pernikahan = $request->status_pernikahan[$i];
      $penduduk->status_hubungan_dalam_keluarga = $request->status_hubungan_dalam_keluarga[$i];
      $penduduk->kewarganegaraan = $request->kewarganegaraan[$i];
      $penduduk->no_paspor = $request->no_paspor[$i];
      $penduduk->no_kitap = $request->no_kitap[$i];
      $penduduk->ayah = $request->ayah[$i];
      $penduduk->ibu = $request->ibu[$i];
      $penduduk->golongan_darah = $request->golongan_darah[$i];
      $penduduk->save();
  }
        $url = 'admin/data-desa/penduduk'.$kk->no_kk.'detail';
      return redirect($url)->with('success','Anggota Keluarga Berhasil ditambah');
}

function edit(Penduduk $penduduk){
    $data['detail'] = $penduduk;
    $data['status_hubungan'] = StatusHubungan::where('flag_erase',1)->get();
    $data['list_pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();
    $data['list_agama'] = Agama::all();
    return view('admin.data-desa.penduduk.edit',$data);
}

function update(Request $request, Penduduk $penduduk){
    $penduduk->nama_lengkap = $request->nama_lengkap;
    $penduduk->nik = $request->nik;
    $penduduk->jenis_kelamin = $request->jenis_kelamin;
    $penduduk->tempat_lahir = $request->tempat_lahir;
    $penduduk->tanggal_lahir = $request->tanggal_lahir;
    $penduduk->agama = $request->agama;
    $penduduk->pendidikan = $request->pendidikan;
    $penduduk->jenis_pekerjaan = $request->pekerjaan;
    $penduduk->status_pernikahan = $request->status_pernikahan;
    $penduduk->status_hubungan_dalam_keluarga = $request->status_hubungan_dalam_keluarga;
    $penduduk->kewarganegaraan = $request->kewarganegaraan;
    $penduduk->no_paspor = $request->no_paspor;
    $penduduk->no_kitap = $request->no_kitap;
    $penduduk->ayah = $request->ayah;
    $penduduk->ibu = $request->ibu;
    $penduduk->golongan_darah = $request->golongan_darah;
    $penduduk->save();
    return back()->with('success','data penduduk berhasil diupdate');
}


function hapusKk(Kk $kk){
    $kk->flag_erase = 0;
    $kk->save();
    Penduduk::where('no_kk', $kk->no_kk)->update([
        'flag_erase' => 0
    ]);
    return back()->with('danger','Data kk beserta anggota telah dihapus');
}

function destroy(Penduduk $penduduk){

    $penduduk->flag_erase = 0;
    $penduduk->save();
    return back()->with('danger','Data penduduk berhasil dihapus');
}
}
