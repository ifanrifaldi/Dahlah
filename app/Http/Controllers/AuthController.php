<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

  
    public function login(){

		return view ('login');

	}

	public function LoginProses(){
		 
        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		return back()->with('warning', 'Login Gagal, Silahkan Cek Email Dan Password Anda');
	}

	public function logout(Request $request){
        auth()->logout();
		auth()->guard('admin')->logout();
		return redirect('login');
	}
}