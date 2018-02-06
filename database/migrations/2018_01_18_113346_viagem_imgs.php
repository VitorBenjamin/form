<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ViagemImgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('viagens_imgs', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->integer('viagems_id')->unsigned();
    //         $table->integer('imgs_id')->unsigned();
    //         $table->timestamps();
    //     });
    //     Schema::table('viagem_imgs', function (Blueprint $table) {
    //         $table->foreign('viagems_id')->references('id')->on('viagems')->onUpdate('cascade')->onDelete('cascade');
    //         $table->foreign('imgs_id')->references('id')->on('imgs')->onUpdate('cascade')->onDelete('cascade');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
