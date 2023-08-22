<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pengaturan;
use App\Models\Banner;

class PengaturanController extends Controller
{
    function index(){
        $data['pengaturan'] = Pengaturan::first();
        $data['banner'] = Banner::take(5)->get();
        return view('admin/manajemen-website/pengaturan/index', $data);
    } 
   
    function storelogo(Request $request){

        $simpan = Pengaturan::first();
        $simpan->nama_desa = request('nama');
        $simpan->alamat = request('alamat');
        if(request('file')){
            $simpan->handleDeleteLogo();
            $simpan->handleUploadLogo();
        }
        $simpan->save();

        return redirect('admin/web-pengaturan/index')->with('success', 'Data berhasil di tambahkan');
    }

    function storemap(Request $request){

        $simpan = Pengaturan::first();
        $simpan->embed_maps = request('map');
        $simpan->save();
        return redirect('admin/web-pengaturan/index')->with('success', 'Data berhasil di tambahkan');

    }

   

  

  
    
}
