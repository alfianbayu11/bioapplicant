<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Training;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BiodataController extends Controller
{
    // public function index()
    // {
    //     $biodata = Biodata::where('user_id', Auth::id())->with(['educations', 'trainings', 'workExperiences'])->get();
    //     return view('biodata.index', compact('biodata'));
    // }
  


    public function create()
    {
        return view('biodata.create');
    }
    
    public function index()
    {
        $biodataList = Biodata::all();
        return view('admin.dashboard', compact('biodataList'));
    }
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();

        return redirect()->route('admin.biodata.index')->with('success', 'Biodata deleted successfully!');
    }
    public function show($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('admin.biodata.show', compact('biodata'));
    }

    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('admin.biodata.edit', compact('biodata'));
    }

    public function update(Request $request, $id)
    {
        // Temukan biodata yang ingin diupdate
        $biodata = Biodata::findOrFail($id);
    
        // Validasi input dari form
        $request->validate([
            'posisi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'noKtp' => 'required|string|max:255',
            'tempatLahir' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:255',
            'golongan_darah' => 'nullable|string|max:10',
            'status' => 'nullable|string|max:255',
            'alamatKtp' => 'required|string',
            'alamatTinggal' => 'nullable|string',
            'email' => 'required|string|email|max:255',
            'noTelp' => 'nullable|string|max:20',
            'orangTerdekat' => 'nullable|string|max:255',
            'noHpOrangTerdekat' => 'nullable|string|max:20',
            'skills' => 'nullable|string',
            'placement' => 'nullable|string|max:255',
            'expected_salary' => 'nullable|numeric',
    
            'educations' => 'required|array',
            'educations.*.jenjang_pendidikan' => 'required|string|max:255',
            'educations.*.institusi' => 'required|string|max:255',
            'educations.*.jurusan' => 'required|string|max:255',
            'educations.*.tahun_lulus' => 'nullable|integer',
            'trainings' => 'required|array',
            'trainings.*.nama_kursus' => 'required|string|max:255',
            'trainings.*.sertifikat' => 'required|in:Ada,Tidak',
            'trainings.*.tahun' => 'required|integer',
            'work_experiences' => 'required|array',
            'work_experiences.*.nama_perusahaan' => 'required|string|max:255',
            'work_experiences.*.posisi_terakhir' => 'required|string|max:255',
            'work_experiences.*.pendapatan_terakhir' => 'required|numeric',
            'work_experiences.*.tahun' => 'required|integer',
        ]);
    
        // Update biodata
        $biodata->posisi = $request->posisi;
        $biodata->nama = $request->nama;
        $biodata->no_ktp = $request->noKtp;
        $biodata->tempat_lahir = $request->tempatLahir;
        $biodata->tanggal_lahir = $request->tanggalLahir;
        $biodata->jenis_kelamin = $request->jenisKelamin;
        $biodata->agama = $request->agama;
        $biodata->golongan_darah = $request->golongan_darah;
        $biodata->status = $request->status;
        $biodata->alamat_ktp = $request->alamatKtp;
        $biodata->alamat_tinggal = $request->alamatTinggal;
        $biodata->email = $request->email;
        $biodata->no_telp = $request->noTelp;
        $biodata->orang_terdekat = $request->orangTerdekat;
        $biodata->no_hp_orang_terdekat = $request->noHpOrangTerdekat;
        $biodata->skills = $request->skills;
        $biodata->working_placement = $request->placement;
        $biodata->expected_salary = $request->expected_salary;
    
        // Simpan perubahan biodata
        $biodata->save();
    
        // Update data pendidikan
        if ($request->educations) {
            foreach ($request->educations as $educationData) {
                $educationId = $educationData['id'] ?? null;
                if ($educationId) {
                    $education = Education::where('biodata_id', $biodata->id)
                                         ->where('id', $educationId)
                                         ->firstOrFail(); // Make sure education exists for the given biodata
                    $education->jenjang_pendidikan = $educationData['jenjang_pendidikan'];
                    $education->institusi = $educationData['institusi'];
                    $education->jurusan = $educationData['jurusan'];
                    $education->tahun_lulus = $educationData['tahun_lulus'];
                    $education->ipk = $educationData['ipk']; // Assuming ipk is part of the education data
                    $education->save();
                }
            }
        }
    
        if ($request->trainings) {
            foreach ($request->trainings as $trainingData) {
                $trainingId = $trainingData['id'] ?? null;
                if ($trainingId) {
                    $training = Training::where('biodata_id', $biodata->id)
                                        ->where('id', $trainingId)
                                        ->firstOrFail(); // Make sure training exists for the given biodata
                    $training->nama_training = $trainingData['nama_training'];
                    $training->penyelenggara = $trainingData['penyelenggara'];
                    $training->tahun = $trainingData['tahun'];
                    // Update other fields for training as needed
                    $training->save();
                }
            }
        }
        if ($request->work_experiences) {    
        // Update data pengalaman kerja
            foreach ($request->work_experiences as $experienceData) {
                $experienceId = $experienceData['id'] ?? null;
                if ($experienceId) {
                $experience = WorkExperience::where('biodata_id', $biodata->id)
                                            ->where('id', $experienceId)
                                            ->firstOrFail(); // Sesuaikan dengan nama kolom id pada tabel work_experiences
                $experience->nama_perusahaan = $experienceData['nama_perusahaan'];
                $experience->posisi_terakhir = $experienceData['posisi_terakhir'];
                $experience->pendapatan_terakhir = $experienceData['pendapatan_terakhir'];
                $experience->tahun = $experienceData['tahun'];
                $experience->save();
                }
            }
        }
    
        // Redirect atau return response sesuai kebutuhan
        return redirect()->route('admin.dashboard')->with('success', 'Biodata berhasil diperbarui!');
    }





    public function store(Request $request)
    {
        // Validasi input
     // Validasi input
        $request->validate([
            'posisi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'noKtp' => 'required|string|max:255',
            'tempatLahir' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:255',
            'golongan_darah' => 'nullable|string|max:10',
            'status' => 'nullable|string|max:255',
            'alamatKtp' => 'required|string',
            'alamatTinggal' => 'nullable|string',
            'email' => 'required|string|email|max:255',
            'noTelp' => 'nullable|string|max:20',
            'orangTerdekat' => 'nullable|string|max:255',
            'noHpOrangTerdekat' => 'nullable|string|max:20',
            'skills' => 'nullable|string',
            'placement' => 'nullable|string|max:255',
            'expected_salary' => 'nullable|numeric',
        
            'educations' => 'required|array',
            'educations.*.jenjang_pendidikan' => 'required|string|max:255',
            'educations.*.institusi' => 'required|string|max:255',
            'educations.*.jurusan' => 'required|string|max:255',
            'educations.*.tahun_lulus' => 'nullable|integer',
            'trainings' => 'required|array',
            'trainings.*.nama_kursus' => 'required|string|max:255',
            'trainings.*.sertifikat' => 'required|in:Ada,Tidak',
            'trainings.*.tahun' => 'required|integer',
            'work_experiences' => 'required|array',
            'work_experiences.*.nama_perusahaan' => 'required|string|max:255',
            'work_experiences.*.posisi_terakhir' => 'required|string|max:255',
            'work_experiences.*.pendapatan_terakhir' => 'required|numeric',
            'work_experiences.*.tahun' => 'required|integer',
        ]);

        // Simpan biodata
        $biodata = new Biodata();
        $biodata->posisi = $request->posisi;
        $biodata->nama = $request->nama;
        $biodata->no_ktp = $request->noKtp;
        $biodata->tempat_lahir = $request->tempatLahir;
        $biodata->tanggal_lahir = $request->tanggalLahir;
        $biodata->jenis_kelamin = $request->jenisKelamin;
        $biodata->agama = $request->agama;
        $biodata->golongan_darah = $request->golongan_darah;
        $biodata->status = $request->status;
        $biodata->alamat_ktp = $request->alamatKtp;
        $biodata->alamat_tinggal = $request->alamatTinggal;
        $biodata->email = $request->email;
        $biodata->no_telp = $request->noTelp;
        $biodata->orang_terdekat = $request->orangTerdekat;
        $biodata->no_hp_orang_terdekat = $request->noHpOrangTerdekat;
        $biodata->skills = $request->skills;
        $biodata->working_placement = $request->placement;
        $biodata->expected_salary = $request->expected_salary;
        $biodata->user_id = Auth::id(); // Assign user_id from authenticated user
    
        $biodata->save();

        // Simpan data pendidikan
        foreach ($request->educations as $educationData) {
            $education = new Education();
            $education->jenjang_pendidikan = $educationData['jenjang_pendidikan'];
            $education->institusi = $educationData['institusi'];
            $education->jurusan = $educationData['jurusan'];
            $education->tahun_lulus = $educationData['tahun_lulus'];
            $education->ipk = $educationData['ipk']; // Assuming ipk is part of the education data
            $education->biodata_id = $biodata->id;
            $education->save();
        }

        // Simpan data pelatihan
        foreach ($request->trainings as $trainingData) {
            $training = new Training();
            $training->nama_kursus = $trainingData['nama_kursus'];
            $training->sertifikat = $trainingData['sertifikat'];
            $training->tahun = $trainingData['tahun'];
            $training->biodata_id = $biodata->id;
            $training->save();
        }

        // Simpan data riwayat pekerjaan
        foreach ($request->work_experiences as $experienceData) {
            $experience = new WorkExperience();
            $experience->nama_perusahaan = $experienceData['nama_perusahaan'];
            $experience->posisi_terakhir = $experienceData['posisi_terakhir'];
            $experience->pendapatan_terakhir = $experienceData['pendapatan_terakhir'];
            $experience->tahun = $experienceData['tahun'];
            $experience->biodata_id = $biodata->id;
            $experience->save();
        }

        // Redirect atau return response sesuai kebutuhan Anda
        return redirect()->route('dashboard')->with('success', 'Biodata berhasil disimpan!');
    }
}