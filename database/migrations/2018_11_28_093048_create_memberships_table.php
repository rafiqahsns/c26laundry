<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->integer('id_membership')->unsigned()->index();
            $table->integer('id_customer')->unsigned()->index();
            $table->primary(['id_membership','id_customer']);
            $table->foreign('id_customer')
                  ->references('id_customer')
                  ->on('customers')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_hp');
            $table->decimal('jumlah_deposit');
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
        Schema::dropIfExists('memberships');
    }
}
