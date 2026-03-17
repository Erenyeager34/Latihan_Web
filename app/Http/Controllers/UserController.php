<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function index()
   {
    
    $user = UserModel::all();

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
            'password' => Hash::make('$request->password'),
            'Level_id' => $request->level_id
        ]);

        return redirect('/user')->with('success', 'User berhasil ditambahkan');
    }
}
