<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen',function(Blueprint $table){
            $table->increments('id');
            $table->char('nik',12);
            $table->string('nama');
            $table->char('jenkel',1);
            $table->text('alamat');
            $table->integer('id_agama');
            $table->integer('id_matkul');
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
        Schema::drop('dosen');
    }
}
