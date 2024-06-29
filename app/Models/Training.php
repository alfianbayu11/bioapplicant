<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id', 'nama_kursus', 'sertifikat', 'tahun'
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}