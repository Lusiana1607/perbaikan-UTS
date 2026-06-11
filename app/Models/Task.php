<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_selesai',
        'selesai',
        'selesai_pada'
    ];
}