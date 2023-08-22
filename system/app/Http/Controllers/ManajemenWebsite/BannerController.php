<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;

class BannerController extends Controller
{
    function index(){
        $data['banner'] = Banner::all();
        return view('admin/manajemen-website/banner/index', $data);
    } 
    
    
    function store(Request $request){

       
        $simpan = new Banner;
        $simpan->banner_judul = request('judul');
        $simpan->banner_deskripsi = request('deskripsi');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-banner/index')->with('success', 'Data berhasil di tambahkan');
    }

  
    function delete(Request $request){
      
        $id = $request->id;
        $hapus = Banner::where('banner_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}
