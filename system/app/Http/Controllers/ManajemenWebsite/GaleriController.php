<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Galeri;

class GaleriController extends Controller
{
  
    function index(){

        $data['galeri'] = Galeri::all();
        return view('admin/manajemen-website/galeri/index', $data);
    }


    function edit(Request $request){
        $id = $request->id;
        $data['galeri'] = Galeri::where('galeri_id', $id)->first();
        return view('admin.publikasi.galeri.edit', $data);
    }


    function store(Request $request){

       
        $simpan = new Galeri;
        $simpan->galeri_caption = request('caption');
        $simpan->handleUploadFoto();
        $simpan->save();

        return redirect('admin/web-galeri/index')->with('success', 'Data berhasil di tambahkan');
    }

  

    function delete(Request $request){
      
        $id = $request->id;
        $hapus = Galeri::where('galeri_id', $id)->first();
        $hapus->handleDeleteFoto();
        $hapus->delete();

        return back()->with('success', 'Data berhasil di hapus');
    }
}
