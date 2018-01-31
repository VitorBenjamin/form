<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('imgs', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('titulo');
    //         $table->string('alt');
    //         $table->integer('carousels_id')->unsigned();
    //         $table->timestamps();
    //     });
    //     Schema::table('imgs', function (Blueprint $table) {
    //         DB::statement("ALTER TABLE imgs ADD imagem LONGBLOB NULL");
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imgs');
    }
}
