<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id');
            $table->string('jenjang_pendidikan');
            $table->string('institusi');
            $table->string('jurusan');
            $table->year('tahun_lulus');
            $table->decimal('ipk', 3, 2);
            $table->timestamps();
        
            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};