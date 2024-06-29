<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'posisi', 'nama', 'no_ktp', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama',
        'golongan_darah', 'status', 'alamat_ktp', 'alamat_tinggal', 'email', 'no_telp', 'orang_terdekat',
        'no_hp_orang_terdekat', 'skills', 'working_placement', 'expected_salary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }
}