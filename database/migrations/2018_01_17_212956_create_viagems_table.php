<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->integer('categorias_id')->unsigned();
            $table->integer('continentes_id')->unsigned();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
        Schema::table('viagens', function (Blueprint $table) {
            DB::statement("ALTER TABLE viagens ADD thumb LONGBLOB");
            DB::statement("ALTER TABLE viagens ADD foto LONGBLOB");
        });
        Schema::table('viagens', function (Blueprint $table) {
            $table->foreign('categorias_id')->references('id')->on('categorias');
            $table->foreign('continentes_id')->references('id')->on('continentes');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagems');
    }
}
