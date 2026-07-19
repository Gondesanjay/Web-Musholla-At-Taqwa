<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'kategori',
        'judul',
        'deskripsi',
        'tanggal_pelaksanaan',
        'is_active',
    ];
}
