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
    public function up()
    {
        Schema::create('imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('alt');
             $table->boolean('ativo')->default(true);
            $table->integer('viagens_id')->unsigned();
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
        Schema::table('imgs', function (Blueprint $table) {
            DB::statement("ALTER TABLE imgs ADD imagem LONGBLOB NULL");
            DB::statement("ALTER TABLE imgs ADD thumb LONGBLOB NULL");
            $table->foreign('viagens_id')->references('id')->on('viagens')->onUpdate('cascade')->onDelete('cascade');
        });
    }

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
