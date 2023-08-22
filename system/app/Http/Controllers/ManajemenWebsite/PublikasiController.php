<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Publikasi;

class PublikasiController extends Controller
{
    function index(){
        $tambahan = $data['publikasi'] = Publikasi::all();
        foreach($tambahan as $x){
            $file = $x->publikasi_file;
            $x->icon = substr($file, strrpos($file, '.') + 1);
        }
        return view('admin/manajemen-website/publikasi/index', $data);
    } 
    function create(){
        
        return view('admin/manajemen-website/publikasi/create');
    } 

    function edit(Request $request){
        $data['publikasi'] = Publikasi::where('publikasi_id', $request->id)->first();
        return view('admin/manajemen-website/publikasi/edit', $data);
    } 

    function detail(Request $request){
        $data['publikasi'] = Publikasi::where('publikasi_id', $request->id)->first();
        return view('admin/manajemen-website/publikasi/detail', $data);
    } 
    
    
    function update(Request $request){

       
        $simpan = Publikasi::where('publikasi_id', $request->id)->first();
        $simpan->publikasi_judul = request('judul');
        $simpan->publikasi_icon = '-';
        if($request->file){
            $simpan->handleDeleteFoto();
            $simpan->handleUploadFoto();
        }
        $simpan->save();

        $redirect = 'admin/web-publikasi/detail/'.$request->id;
        return redirect($redirect)->with('success', 'Data berhasil di tambahkan');
    }

    function store(Request $request){

       
        $simpan = new publikasi;
        $simpan->publikasi_judul = request('judul');
        $simpan->publikasi_icon = '-';
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-publikasi/index')->with('success', 'Data berhasil di tambahkan');
    }

  
    function delete(Request $request){
      
        $id = $request->id;
        $hapus = Publikasi::where('publikasi_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}

