<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->integer('id_laporan')->unsigned()->index();
            $table->integer('id_karyawan')->unsigned()->index();
            $table->foreign('id_karyawan')
                  ->references('id_karyawan')
                  ->on('karyawans')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('tanggal_buat');
            $table->text('isi laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
