<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layanan;

class LayananController extends Controller
{
    function index(){
       $tambahan = $data['layanan'] = Layanan::all();
        foreach($tambahan as $x){
            $x->syarat_singkat = substr($x->layanan_syarat, 0, 150);
        }
        return view('admin/manajemen-website/layanan/index', $data);
    } 
    function create(){
        
        return view('admin/manajemen-website/layanan/create');
    } 

    function edit(Request $request){
        $data['layanan'] = Layanan::where('layanan_id', $request->id)->first();
        return view('admin/manajemen-website/layanan/edit', $data);
    } 

    function detail(Request $request){
        $data['layanan'] = Layanan::where('layanan_id', $request->id)->first();
        return view('admin/manajemen-website/layanan/detail', $data);
    } 
    
    
    function update(Request $request){

       
        $simpan = Layanan::where('layanan_id', $request->id)->first();
        $simpan->layanan_nama = request('nama');
        $simpan->layanan_syarat = request('syarat');
        if($request->file){
            $simpan->handleDeleteFoto();
            $simpan->handleUploadFoto();
        }
        $simpan->save();

        $redirect = 'admin/web-layanan/detail/'.$request->id;
        return redirect($redirect)->with('success', 'Data berhasil di tambahkan');
    }

    function store(Request $request){

       
        $simpan = new layanan;
        $simpan->layanan_nama = request('nama');
        $simpan->layanan_syarat = request('syarat');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-layanan/index')->with('success', 'Data berhasil di tambahkan');
    }

  
    function delete(Request $request){
      
        $id = $request->id;
        $hapus = Layanan::where('layanan_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}

