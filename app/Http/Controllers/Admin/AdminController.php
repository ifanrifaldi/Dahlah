<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = auth()->user();
        return view('admin.admin.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email= request('email');
        $admin->password = request('password');
     
        $admin->save();

       

        return redirect('admin/admin')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $data['user'] = auth()->user();
        $data['admin'] = $admin;
        return view('admin.admin.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $data['user'] = auth()->user();
        $data['admin'] = $admin;
        return view('admin.admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Admin $admin)
    {
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->email= request('email');
        if(request('password')) $admin->password = request('password');
        $admin->save();

        return redirect('admin/admin')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $data['user'] = auth()->user();
        $admin->delete();

        return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');
    }

    // public function showdashboard()
    // {

    //     $data['user'] = auth()->user();
    //     $data['foto'] = Foto::all()->count();
    //     $data['video'] = Video::all()->count();
    //     $data['vtour'] = Vtour::all()->count();
    //     $data['tempat'] = Tempat::all()->count();
        
    //     return view('admin/dashboard', $data);
    
    // }
}
