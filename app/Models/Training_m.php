<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_m extends Model
{
    use HasFactory;
    protected $table = 'tb_training';
    protected $fillable = [
        'nama_training',
        'tanggal_mulai',
        'tanggal_selesai',
    ];
    protected $guarded = ['id'];

    
}