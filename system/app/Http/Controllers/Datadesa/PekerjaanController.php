<?php

namespace App\Http\Controllers\Datadesa;
use App\Http\Controllers\Controller;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    function index(){
        $data['list_pekerjaan'] = Pekerjaan::where('flag_erase',1)->get();
        return view('admin.data-desa.pekerjaan.index',$data);
    }

    function store(){
        $pekerjaan = new Pekerjaan;
        $pekerjaan->nama_pekerjaan = request('pekerjaan');
        $pekerjaan->save();
        return back()->with('success','Data pekerjaan berhasil dibuat');
    }

    function update(Pekerjaan $pekerjaan){
        $pekerjaan->nama_pekerjaan = request('pekerjaan');
        $pekerjaan->save();
        return back()->with('success','Data pekerjaan berhasil diubah');
    }

    function destroy(Pekerjaan $pekerjaan){
        Pekerjaan::where('pekerjaan_id', $pekerjaan->pekerjaan_id)->update([
            'flag_erase' => 0
        ]);

        return back()->with('success','Data pekerjaan berhasil dihapus');
    }
}
