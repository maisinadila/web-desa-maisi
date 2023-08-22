<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berita;

class BeritaController extends Controller
{
    function index(){
        $tambahan = $data['berita'] = Berita::all();
        foreach($tambahan as $x){
            $x->beritapendek = substr($x->berita_isi, 0, 300);
        }
        return view('admin/manajemen-website/berita/index', $data);
    } 
    function create(){
        
        return view('admin/manajemen-website/berita/create');
    } 

    function edit(Request $request){
        $data['berita'] = Berita::where('berita_id', $request->id)->first();
        return view('admin/manajemen-website/berita/edit', $data);
    } 

    function detail(Request $request){
        $data['berita'] = Berita::where('berita_id', $request->id)->first();
        return view('admin/manajemen-website/berita/detail', $data);
    } 
    
    
    function update(Request $request){

       
        $simpan = Berita::where('berita_id', $request->id)->first();
        $simpan->berita_judul = request('judul');
        $simpan->berita_isi = request('isi');
        if($request->file){
            $simpan->handleDeleteFoto();
            $simpan->handleUploadFoto();
        }
        $simpan->save();

        $redirect = 'admin/web-berita/detail/'.$request->id;
        return redirect($redirect)->with('success', 'Data berhasil di tambahkan');
    }

    function store(Request $request){

       
        $simpan = new Berita;
        $simpan->berita_judul = request('judul');
        $simpan->berita_isi = request('isi');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-berita/index')->with('success', 'Data berhasil di tambahkan');
    }

  
    function delete(Request $request){
      
        $id = $request->id;
        $hapus = Berita::where('berita_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}
