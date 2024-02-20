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
        Schema::table('mahasiswa', function (Blueprint $table) {
            // Menghapus kolom yang benar
            $table->dropColumn('kelas'); 

            // Menambahkan kolom kelas_id
            $table->unsignedBigInteger('kelas_id')->nullable(); 

            // Menambahkan foreign key di kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->string('kelas');
            $table->dropForeign(['kelas_id']);
        }); 
    }
};
