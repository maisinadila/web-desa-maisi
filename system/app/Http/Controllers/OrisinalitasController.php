<?php

namespace App\Http\Controllers;
use Auth;
use QrCode;
use App\Models\Penduduk;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

use App\Models\SkDomisili;
use App\Models\SpAkta;
use App\Models\SkTidakMampu;
use App\Models\SkKehilangan;
use App\Models\SkPenghasilan;
use App\Models\SkUsaha;
use App\Models\skBedanama;
use App\Models\SkAhliWaris;
use App\Models\SpSkck;
use App\Models\SpKK;

class OrisinalitasController extends Controller
{
   function skDomisili(SkDomisili $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-domisili',$data);
 }

 function skTidakMampu(SkTidakMampu $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function spNikah(SpNikah $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }


 function spAkta(SpAkta $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function skKehilangan(SkKehilangan $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function skPenghasilan(SkPenghasilan $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function skUsaha(SkUsaha $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function skBedanama(skBedanama $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function skAhliWaris(SkAhliWaris $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function spSkck(SpSkck $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }

 function spKK(SpKK $id){
    $data['detail'] = $id;
    $data['penduduk'] = Penduduk::where('nik',$id->nik_penduduk)->first();
    $data['kades'] = PerangkatDesa::where('level',2)->first();
    return view('admin.template.orisinalitas.sk-tidak-mampu',$data);
 }


}
