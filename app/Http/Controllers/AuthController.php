<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;

use Redirect; //untuk redirect


use App\Mahasiswa;
use Illuminate\Http\Request;
use App\User;
use DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login2')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
      // echo "$request->email.$request->password "; die;
        if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->role =='Administrator'){
                Auth::guard('Administrator')->LoginUsingId($akun->id);
                return redirect('/admin')->with('sukses','Anda Berhasil Login');
            } else if($akun->role =='Kepala Laboratorium'){
                Auth::guard('kalab')->LoginUsingId($akun->id);
                return redirect('/berandakalab')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='Dosen') {
              Auth::guard('dosen')->LoginUsingId($akun->id);
              return redirect('/berandadosen')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='Asisten Laboratorium') {
              Auth::guard('aslab')->LoginUsingId($akun->id);
              return redirect('/berandaaslab')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='Asisten Praktikum') {
              Auth::guard('asprak')->LoginUsingId($akun->id);
              return redirect('/berandasprak')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='Praktikan') {
              Auth::guard('praktikan')->LoginUsingId($akun->id);
              return redirect('/berandapraktikan')->with('sukses','Anda Berhasil Login');
            }
        }
        return redirect('/login')->with('error','Akun Belum Terdaftar');
    }

    public function logout()
    {
        if(Auth::guard('Administrator')->check()){
            Auth::guard('Administrator')->logout();
        } else if(Auth::guard('kalab')->check()){
            Auth::guard('kalab')->logout();
        } else if(Auth::guard('dosen')->check()){
            Auth::guard('dosen')->logout();
        } else if(Auth::guard('aslab')->check()){
            Auth::guard('aslab')->logout();
        } else if(Auth::guard('asprak')->check()){
            Auth::guard('asprak')->logout();
        } else if(Auth::guard('praktikan')->check()){
            Auth::guard('praktikan')->logout();
        }
        return redirect('login')->with('sukses','Anda Telah Logout');
    }


}