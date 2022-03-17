<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'table_anggota';

    protected $fillable = [
        'Nama_Anggota', 'Jenis_Kelamin', 'Alamat', 'No_Telp'
    ];
}
