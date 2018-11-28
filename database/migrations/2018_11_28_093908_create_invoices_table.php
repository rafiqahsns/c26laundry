<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->integer('id_invoice')->unsigned()->index();
            $table->integer('id_karyawan')->unsigned()->index();
            $table->integer('id_customer')->unsigned()->index();
            $table->integer('id_layanan')->unsigned()->index();

            //set PK
            $table->primary(['id_invoice','id_karyawan','id_customer','id_layanan']);
            
            //set FK
            $table->foreign('id_karyawan')
                  ->references('id_karyawan')
                  ->on('karyawans')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('id_customer')
                  ->references('id_customer')
                  ->on('customers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('id_layanan')
                  ->references('id_layanan')
                  ->on('layanans')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama_customer');
            $table->string('nama_karyawan');
            $table->string('jenis_layanan');
            $table->string('berat');
            $table->string('jumlah');
            $table->decimal('harga');
            $table->enum('status',['1','2','3','4','5']);
            $table->string('no_order');
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
        Schema::dropIfExists('invoices');
    }
}
