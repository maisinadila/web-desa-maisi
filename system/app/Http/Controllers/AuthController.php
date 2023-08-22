<?php

namespace App\Http\Controllers;
use Auth;
use QrCode;
use Illuminate\Http\Request;

use App\Models\Pengaturan;
class AuthController extends Controller
{
    function login(){
    //     $nomor = '081240515616';
    // $pesan = "Udah cek belum siapa gua? :)";

    // $userkey = '4888efcfc685';
    // $passkey = '467fd9ba6c1d7673de1cfc9b';
    // $telepon = $nomor;
    // $message = $pesan;
    // $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
    // $curlHandle = curl_init();
    // curl_setopt($curlHandle, CURLOPT_URL, $url);
    // curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    // curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    // curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
    // curl_setopt($curlHandle, CURLOPT_POST, 1);
    // curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
    //     'userkey' => $userkey,
    //     'passkey' => $passkey,
    //     'to' => $telepon,
    //     'message' => $message
    // ));
    // $results = json_decode(curl_exec($curlHandle), true);
    // curl_close($curlHandle);
        $data['pengaturan'] = Pengaturan::first();
        return view('login',$data);
    }

    public function loginProcess(){

       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
        return redirect('admin/beranda')->with('success','Login Berhasil Admin');

    }else{
        return back()->with('danger','Email atau Password Salah');
    }

}

function logout(){
    Auth::logout();
    return redirect('login')->with('danger','Berhasil keluar');
}

}
