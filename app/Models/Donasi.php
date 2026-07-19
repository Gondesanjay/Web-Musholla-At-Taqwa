<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $fillable = ['kode_donasi', 'nama_donatur', 'nominal', 'status', 'snap_token'];
}
