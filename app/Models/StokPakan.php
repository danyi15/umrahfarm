<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokPakan extends Model
{
    use HasFactory;
    protected $table = 'stok_pakan';

    protected $fillable = [
        'jenis_pakan', 'stok_tersisa', 'kebutuhan_harian', 'perkiraan_habis'
    ];
}
