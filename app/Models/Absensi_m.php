<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi_m extends Model
{
    use HasFactory;
    protected $table = 'tb_absensi';
    protected $fillable = [
        'tanggal',
        'status',
    ];
    protected $guarded = ['id'];

    
}