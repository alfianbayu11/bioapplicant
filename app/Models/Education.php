<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $fillable = [
        'biodata_id', 'jenjang_pendidikan', 'institusi', 'jurusan', 'tahun_lulus', 'ipk'
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}