<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserConntroller extends Controller
{
   public function index()
   {
    $user = UserModel::all();
    return view('user', ['data' => $user]);
    }
}
