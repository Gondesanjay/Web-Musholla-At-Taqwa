<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['judul', 'thumbnail', 'konten', 'tanggal_publikasi'];
}
