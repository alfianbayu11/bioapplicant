<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id', 'nama_perusahaan', 'posisi_terakhir', 'pendapatan_terakhir', 'tahun'
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}