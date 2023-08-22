<?php

namespace App\Http\Controllers\Datadesa;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    function index(){
        $data['list_pendidikan'] = Pendidikan::where('flag_erase',1)->get();
        return view('admin.data-desa.pendidikan.index',$data);
    }

    function store(){
        $pendidikan = new Pendidikan;
        $pendidikan->pendidikan = request('pendidikan');
        $pendidikan->save();
        return back()->with('success','Data pendidikan berhasil dibuat');
    }

    function update(Pendidikan $pendidikan){
        $pendidikan = new Pendidikan;
        $pendidikan->pendidikan = request('pendidikan');
        $pendidikan->save();
        return back()->with('success','Data pendidikan berhasil diubah');
    }

    function destroy(Pendidikan $pendidikan){
        Pendidikan::where('pendidikan_id', $pendidikan)->update([
            'flag_erase' => 0
        ]);

        return back()->with('success','Data pendidikan berhasil dihapus');
    }
}
