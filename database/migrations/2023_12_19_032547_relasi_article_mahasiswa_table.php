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
        Schema::table('mahasiswa', function (Blueprint $table) { 

            // Menambahkan kolom kelas_id
            $table->unsignedBigInteger('article_id')->nullable(); 

            // Menambahkan foreign key di kolom kelas_id
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->string('article_id');
            $table->dropForeign(['article_id']);
        });
    }
};
