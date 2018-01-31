<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->boolean('ativo')->default(false);
            $table->integer('viagens_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('carousels', function (Blueprint $table) {
            $table->foreign('viagens_id')->references('id')->on('viagens')->onUpdate('cascade')->onDelete('cascade');
            DB::statement("ALTER TABLE carousels ADD imagem LONGBLOB NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousels');
    }
}
