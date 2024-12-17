<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordTernak extends Model
{
    use HasFactory;


    protected $table = 'record_ternak';
    protected $fillable = ['name', 'jenis_hewan', 'jenis_kelamin', 'lahir_beli', 'tanggal_lahir', 'tanggal_beli', 'harga_beli'];
    protected $primaryKey = 'tag_id';  // Menentukan primary key yang digunakan
    public $incrementing = true;       // Karena tag_id adalah auto increment

    public function vetMonitors()
    {
    return $this->hasMany(VetMonitor::class, 'tag_id', 'tag_id');
    }


}
