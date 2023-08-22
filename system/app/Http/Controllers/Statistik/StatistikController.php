<?php

namespace App\Http\Controllers\Statistik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Penduduk;
use App\Models\Pengaturan;
use App\Models\Profildesa;
use App\Models\Pekerjaan;


class StatistikController extends Controller
{
    function umur(){
        $data['desa'] = Pengaturan::first();
        $tambahan = $data['penduduk'] = Penduduk::all();

        $batas_usia_anak = 12;
        $batas_usia_remaja = 19;
        $batas_usia_dewasa = 39;
        $batas_usia_dewasa_atas = 59;
        $batas_usia_manula = 'tak hingga';

        $jumlah_anak_anak = 0;
       $jumlah_remaja = 0;
        $jumlah_dewasa = 0;
        $jumlah_dewasa_atas = 0;
         $jumlah_manula = 0;

        foreach($tambahan as $x){
            $tanggal_lahir = $x->tanggal_lahir;
            $usia = date_diff(date_create($tanggal_lahir), date_create('today'))->y;

            if ($usia <= $batas_usia_anak) {
                $data['anak'] = $jumlah_anak_anak++;
            } elseif($usia > $batas_usia_anak && $usia <= $batas_usia_remaja) {
                $data['remaja'] = $jumlah_remaja++;
            } elseif($usia > $batas_usia_remaja && $usia <= $batas_usia_dewasa) {
                $data['dewasa'] = $jumlah_dewasa++;
            } elseif($usia > $batas_usia_dewasa && $usia <= $batas_usia_dewasa_atas) {
                $data['dewasa_atas'] = $jumlah_dewasa_atas++;
            } elseif($usia > $batas_usia_dewasa_atas) {
                $data['manula'] = $jumlah_manula++;
            }
        }

        $data['anak'] = $jumlah_anak_anak ;
        $data['remaja'] = $jumlah_remaja ;
        $data['dewasa'] = $jumlah_dewasa ;
        $data['dewasa_atas'] = $jumlah_dewasa_atas ;
        $data['manula'] = $jumlah_manula ;
        
        return view('admin.statistik.umur',$data);
    }

    function agama(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();
        $data['islam'] = Penduduk::where('agama','islam')->count();
        $data['kristen'] = Penduduk::where('agama','kristen')->count();
        $data['hindu'] = Penduduk::where('agama','hindu')->count();
        $data['budha'] = Penduduk::where('agama','budha')->count();
        $data['konghuchu'] = Penduduk::where('agama','konghuchu')->count();
        // dd($data['kristen']);
        return view('admin.statistik.agama',$data);
    }
    

    function pendidikan(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();

        $data['s3'] = Penduduk::where('pendidikan', 'like', '%s3%')->count();
        $data['s2'] = Penduduk::where('pendidikan', 'like', '%s2%')->count();
        $data['s1'] = Penduduk::where('pendidikan', 'like', '%s1%')->count();
        $data['d3'] = Penduduk::where('pendidikan', 'like' ,'%DIII%')->count();
        $data['sma'] = Penduduk::where('pendidikan', 'like', '%slta%')->count();
        $data['smp'] = Penduduk::where('pendidikan', 'like', '%sltp%')->count();
        $data['sd'] = Penduduk::where('pendidikan', 'like', '%sd%')->count();
        $data['tidak_sekolah'] = Penduduk::where('pendidikan', 'like', '%tidak%')->count();

        return view('admin.statistik.pendidikan',$data);
    }
    
    function pekerjaan(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();

        $tambahan = $data['pekerjaan'] = Pekerjaan::all();

        foreach($tambahan as $x){
           
            $x->jumlah_orang = Penduduk::where('jenis_pekerjaan', $x->nama_pekerjaan)->count();
        }

        return view('admin.statistik.pekerjaan',$data);
    }
    
    function statusPerkawinan(){
        $data['profil'] = Profildesa::where('profil_id', 1)->first();

        $data['belum_menikah'] = Penduduk::where('status_pernikahan','belum menikah')->count();
        $data['janda'] = Penduduk::where('status_pernikahan','janda')->count();
        $data['duda'] = Penduduk::where('status_pernikahan','duda')->count();
        $data['menikah'] = Penduduk::where('status_pernikahan','menikah')->count();

        return view('admin.statistik.status-perkawinan',$data);
    }
    



}
