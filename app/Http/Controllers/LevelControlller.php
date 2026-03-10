<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelControlller extends Controller
{
   public function index()
   {
    DB::table('m_level')->where('level_kode','CUS')->delete();
    return 'hapus data berhasil';
   }
}
