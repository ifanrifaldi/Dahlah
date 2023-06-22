<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }


    public function store(Request $request)
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if (request('password')) $user->password = request('password');
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(User $user)
    {
        $data['user'] = auth()->user();
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }

    public function showdashboard()
    {
        return view('admin/dashboard');

    }
}
