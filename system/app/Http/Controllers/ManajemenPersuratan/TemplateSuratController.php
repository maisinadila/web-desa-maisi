<?php

namespace App\Http\Controllers\ManajemenPersuratan;
use App\Http\Controllers\Controller;
use App\Models\Laporanrealisasianggaran;
use App\Models\Profildesa;
use App\Models\Template;

use Illuminate\Http\Request;

class TemplateSuratController extends Controller
{
    function index(){
        $data['list_template'] = Template::all();
        return view('admin.manajemen-persuratan.template-surat.index',$data);
    }

    function store(Request $request){
        $count = Template::count();
        $d = $count +1;
        $template = new Template;
        $template->nama_surat = request('nama_surat');
        $template->no_awal_surat = request('no_awal_surat');
        $template->nama_file = $d.'-'.\Str::slug($request->nama_surat);
        $template->handleUploadFile();
        $template->save();
        return back();
    }

    function edit(Template $template){
        $data['template'] = $template;
        return view('admin.manajemen-persuratan.template-surat.edit',$data);
    }

    function update(Template $template){
        $template->isi = request('isi');
        $template->save();
        return redirect('admin/manajemen-persuratan/template-surat')->with('success','Isi surat berhasil diedit');
    }


    function destroy(Template $template){
        $template->handleDeleteFile();
        $template->delete();
        return back()->with('danger','template dihapus');
    }
}
