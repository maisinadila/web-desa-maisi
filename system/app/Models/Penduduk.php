<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;


class Penduduk extends Model
{
    protected $table = 'd_penduduk';
    protected $primaryKey = 'penduduk_id'; //jika di database primary key nya bukan bernama id maka dikasi kayak gini

   

    // public function pegi()
    // {
    //     return $this->belongsTo(Sintaripegawai::class, 'data_user');
    // }

    // function author(){
    //     return $this->belongsTo(Sintaripegawai::class, 'surattugas_author');
    // }

    // function opd(){
    //     return $this->belongsTo(Sintariopd::class, 'surattugas_opd');
    // }
    // function validator2(){
    //     return $this->belongsTo(Sintaripegawai::class, 'validator_2');
    // }

    // public function getSurattugasMulaiAttribute(){
    //     return Carbon::parse($this->attributes['surattugas_mulai'])->translatedFormat('d F Y');
    // }
    // public function getSurattugasSelesaiAttribute(){
    //     return Carbon::parse($this->attributes['surattugas_selesai'])->translatedFormat('d F Y');
    // }
    // public function getSurattugasTanggalAttribute(){
    //     return Carbon::parse($this->attributes['surattugas_tanggal'])->translatedFormat('d-m-Y');
    // }


    // function handleUploadSpt(){
    //     $opd = request('id_opd');
    //     if(request()->hasFile('file_spt')){
    //         $this->handleDeleteSpt();
    //         $file = request()->file('file_spt');
    //         $destination = "mister/spt";
    //         $randomStr = Str::random(5);
    //         $filename = $opd."-".time()."-".$randomStr.".".$file->extension();
    //         $url = $file->storeAs($destination, $filename);
    //         $this->file_spt = "app/".$url;
    //         $this->save;
    //     }
    // }
    // function handleDeleteSpt(){
    //     $file= $this->file_spt;
    //     if($file){
    //         $path = public_path($file);
    //         if(file_exists($path)){
    //             unlink($path);

    //         }
    //         return true;
    //     }
    // }


}
