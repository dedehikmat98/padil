<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeterrangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterrangans', function (Blueprint $table) {
             $table->increments('id');
            $table->string('keadaan');
            $table->string('transmisi');
            $table->string('bahanbkr');
            $table->string('thnklr');
            $table->string('harga');
            $table->string('desk');

            $table->integer('motorrrs_id')->unsigned();
            $table->foreign('motorrrs_id')->references('id')->on('motorrrs')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('keterrangans');
    }
}
