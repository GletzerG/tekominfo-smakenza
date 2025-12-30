<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('siswa', function (Blueprint $table) {
        $table->integer('poin')->default(0)->after('jurusan'); 
        // ganti 'nama' sesuai kolom terakhir yang kamu mau
    });
}

public function down()
{
    Schema::table('siswa', function (Blueprint $table) {
        $table->dropColumn('poin');
    });
}

};
