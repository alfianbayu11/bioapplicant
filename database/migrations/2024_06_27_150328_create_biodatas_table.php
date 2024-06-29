<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('posisi');
            $table->string('nama');
            $table->string('no_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('status');
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('email');
            $table->string('no_telp');
            $table->string('orang_terdekat');
            $table->string('no_hp_orang_terdekat');
            $table->text('skills'); // Tambahan kolom skills
            $table->string('working_placement'); // Tambahan kolom working placement
            $table->decimal('expected_salary', 15, 2); // Tambahan kolom expected salary
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};