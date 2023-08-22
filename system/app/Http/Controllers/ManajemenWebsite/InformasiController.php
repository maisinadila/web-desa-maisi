<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Informasi;

class InformasiController extends Controller
{
    function index(){
        $tambahan = $data['informasi'] = informasi::all();
        foreach($tambahan as $x){
            $x->informasipendek = substr($x->informasi_isi, 0, 300);
        }
        return view('admin/manajemen-website/informasi/index', $data);
    } 
    function create(){
        
        return view('admin/manajemen-website/informasi/create');
    } 

    function edit(Request $request){
        $data['informasi'] = informasi::where('informasi_id', $request->id)->first();
        return view('admin/manajemen-website/informasi/edit', $data);
    } 

    function detail(Request $request){
        $data['informasi'] = informasi::where('informasi_id', $request->id)->first();
        return view('admin/manajemen-website/informasi/detail', $data);
    } 
    
    
    function update(Request $request){

       
        $simpan = informasi::where('informasi_id', $request->id)->first();
        $simpan->informasi_judul = request('judul');
        $simpan->informasi_isi = request('isi');
        if($request->file){
            $simpan->handleDeleteFoto();
            $simpan->handleUploadFoto();
        }
        $simpan->save();

        $redirect = 'admin/web-informasi/detail/'.$request->id;
        return redirect($redirect)->with('success', 'Data berhasil di tambahkan');
    }

    function store(Request $request){

       
        $simpan = new informasi;
        $simpan->informasi_judul = request('judul');
        $simpan->informasi_isi = request('isi');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-informasi/index')->with('success', 'Data berhasil di tambahkan');
    }

  
    function delete(Request $request){
      
        $id = $request->id;
        $hapus = informasi::where('informasi_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}
