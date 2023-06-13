<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
  
    public function login(){

		return view ('login');

	}

	public function LoginProses(){
		 
        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin/dashboard')->with('success', 'Login Berhasil');
        }

		return redirect('login');
	}

	public function logout(Request $request){
        auth()->logout();
		auth()->guard('admin')->logout();
		return redirect('login');
	}
}