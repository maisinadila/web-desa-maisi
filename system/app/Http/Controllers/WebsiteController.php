<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Layanan;
use App\Models\Pengaturan;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Profildesa;
use App\Models\PerangkatDesa;
use App\Models\Layanandesa;
use App\Models\ProgramDesa;
use App\Models\Informasi;
use App\Models\Laporanrealisasianggaran;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use DB; 

use Illuminate\Pagination\simplePaginator;


class WebsiteController extends Controller
{
    function beranda(){
        $data['banner'] = Banner::all();
        $data['layanan'] = Layanan::all();
        $data['list_berita'] = Berita::simplePaginate(6);
        $data['list_galeri'] = Galeri::all();
        $data['kades'] = PerangkatDesa::where('level',2)->first();
        $data['banner'] = Banner::all();
        $data['list_informasi'] = Informasi::simplePaginate(6);
        $data['pengaturan'] = Pengaturan::first();
        $data['profil'] = Profildesa::first();

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

        $data['title'] = "Web Desa";
        return view('website.beranda', $data);
    }


    function galeri(){
        $data['title'] = "Galeri Desa";
        $data['list_galeri'] = Galeri::all();
        return view('website.galeri',$data);
    }

    function berita(){
        $data['title'] = "Berita Desa";
        $data['list_berita'] = Berita::all();
        return view('website.berita',$data);
    }

    function bacaBerita(Berita $berita){
        $count = Berita::where('berita_id',$berita->berita_id)->sum('berita_viewers');
        DB::table('berita')->where('berita_id',$berita->berita_id)->update([

            "berita_viewers" => $count + 1

        ]);
        $data['detail'] = $berita;
        $data['title'] = "Detail Berita";
        return view('website.berita-baca',$data);
    }


    function informasi(){
        $data['title'] = "Informasi Desa";
        $data['list_informasi'] = Informasi::all();
        return view('website.informasi',$data);
    }

    
    function bacaInformasi(Informasi $informasi){
        $data['detail'] = $informasi;
        $data['title'] = "Detail Informasi";
        return view('website.informasi-baca',$data);
    }

    function profilWilayahDesa(){
        $data['title'] = "Profil Wilayah Desa";
        $data['profil'] = Profildesa::first();
        $data['pengaturan'] = Pengaturan::first();
        return view('website.profil-wilayah-desa',$data);
    }

    function visiMisiDesa(){
        $data['title'] = "Visi dan Misi Desa";
        $data['profil'] = Profildesa::first();
        return view('website.visi-misi-desa',$data);
    }

    function sambutanKepala(){
        $data['title'] = "Kepala Desa dan Sambutan";
        $data['profil'] = Profildesa::first();
        $data['kades'] = PerangkatDesa::where('level',2)->first();
        return view('website.kepala-desa-dan-sambutan',$data);
    }

    function PerangkatDesa(){
        $data['title'] = "Perangkat Desa";
        $data['list_perangkat'] = PerangkatDesa::all();
        return view('website.perangkat-desa',$data);
    }

    function organisasiDesa(){
        $data['title'] = "Struktur Organisasi";
        $data['profil'] = Profildesa::first();
        return view('website.struktur-organisasi',$data);
    }

    function layananDesa(){
        $data['title'] = "Layanan Desa";
        $data['list_layanan'] = Layanan::all();
        return view('website.layanan-desa',$data);
    }

    function programDesa(){
        $data['title'] = "Program Desa";
        $data['list_program'] = ProgramDesa::all();
        return view('website.program-desa',$data);
    }

    function peraturanDesa(){
        $data['title'] = "Peraturan Desa";
        $data['profil'] = Profildesa::first();
        return view('website.peraturan-desa',$data);
    }

    function dataPenduduk(){
        $data['title'] = "Data Penduduk Desa";
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
        return view('website.data-penduduk',$data);
    }

    function dataPendidikan(){
        $data['title'] = "Data Pendidikan di Desa";

        $data['s3'] = Penduduk::where('pendidikan', 'like', '%s3%')->count();
        $data['s2'] = Penduduk::where('pendidikan', 'like', '%s2%')->count();
        $data['s1'] = Penduduk::where('pendidikan', 'like', '%s1%')->count();
        $data['d3'] = Penduduk::where('pendidikan', 'like' ,'%DIII%')->count();
        $data['sma'] = Penduduk::where('pendidikan', 'like', '%slta%')->count();
        $data['smp'] = Penduduk::where('pendidikan', 'like', '%sltp%')->count();
        $data['sd'] = Penduduk::where('pendidikan', 'like', '%sd%')->count();
        $data['tidak_sekolah'] = Penduduk::where('pendidikan', 'like', '%tidak%')->count();
        return view('website.data-pendidikan',$data);
    }

    function dataPekerjaan(){
        $data['title'] = "Data Pekerjaan";
        $tambahan = $data['pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();

        foreach($tambahan as $x){

            $x->jumlah_orang = Penduduk::where('jenis_pekerjaan', $x->nama_pekerjaan)->count();
        }
        return view('website.data-pekerjaan',$data);
    }

    function dataAgama(){
        $data['title'] = "Data Penganunt Agama Di Desa";
        $data['profil'] = Profildesa::where('profil_id', 1)->first();
        $data['islam'] = Penduduk::where('agama','islam')->count();
        $data['kristen'] = Penduduk::where('agama','kristen')->count();
        $data['hindu'] = Penduduk::where('agama','hindu')->count();
        $data['budha'] = Penduduk::where('agama','budha')->count();
        $data['konghuchu'] = Penduduk::where('agama','konghuchu')->count();
        return view('website.data-agama',$data);
    }

    function dataDusun(){
        $data['title'] = "Profil Wilayah Desa";
        return view('website.data-dusun',$data);
    }

    function realisasiAnggaran(){
        $data['title'] = "Laporan Realisasi Anggaran Desa";
        $data['list_realisasi'] = Laporanrealisasianggaran::all();
        return view('website.realisasi-anggaran',$data);
    }
}
