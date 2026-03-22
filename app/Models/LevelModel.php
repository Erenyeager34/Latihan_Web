<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'level'; // ⬅️ ini penting!
    protected $primaryKey = 'level_id';
    public $timestamps = false; // kalau tabel tidak pakai created_at
}
