<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index()
   {
    
    $user = UserModel::with('level')->get();

   return view('user', ['data' => $user]);

    }
    
    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'Level_id' => 'required|numeric'
        ]);
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user')->with('success', 'User berhasil ditambahkan');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);

        if (!$user) {
            return redirect('/user')->with('error', 'User tidak ditemukan');
        }
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan(Request $request, $id)
{
    $user = UserModel::find($id);

    $user->update([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make($request->password),
        'level_id' => $request->level_id
    ]);

    return redirect('/user')->with('success', 'Data berhasil diubah');
}
}
