<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }


    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        $admin->password = request('password');

        $admin->save();

        return redirect('admin/admin')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email = request('email');
        if (request('password')) $admin->password = request('password');
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Admin $admin)
    {
        $data['user'] = auth()->user();
        $admin->delete();

        return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');
    }

    public function showdashboard()
    {
        return view('admin/dashboard');

    }
}
