<?php

namespace App\Http\Controllers;
use Auth;
use QrCode;
use Illuminate\Http\Request;
use App\Models\Pengaturan;
use App\Models\PerangkatDesa;
use DB;


class ProfilController extends Controller
{
 function index(){
    $data['user'] = Auth::user();
    return view('admin.profil-akun.index',$data);
}

function update(){
    $user = Auth::user();

    $pass = request('password');
    $konfirmasi = request('konfirmasi_password');

    if($pass == $konfirmasi){
        DB::table('user')->where('user_id',$user->user_id)->update([
            'email' => request('email'),
            'password' => bcrypt($pass),
        ]);

        return redirect('logout')->with('success','Password berhasil diganti');
    }else{
        return back()->with('danger','Password tidak cocok');
    }

}

}
