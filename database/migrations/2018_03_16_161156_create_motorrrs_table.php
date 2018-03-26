<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorrrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorrrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            
            $table->integer('mereks_id')->unsigned();
            $table->foreign('mereks_id')->references('id')->on('mereks')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('tipes_id')->unsigned();
            $table->foreign('tipes_id')->references('id')->on('tipes')->onUpdate('cascade')->onDelete('cascade');
          
            $table->string('foto')->nullable();


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
        Schema::dropIfExists('motorrrs');
    }
}
