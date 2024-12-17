<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VetMonitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id', 'tanggal', 'diagnosa', 'obat', 'foto_hewan', 'health_status',
    ];

    public function recordTernak()
    {
        return $this->belongsTo(RecordTernak::class, 'tag_id', 'tag_id');
    }

}
