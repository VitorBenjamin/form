<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('tag')->nullable();
            $table->timestamps();
        });

        Schema::table('categorias', function (Blueprint $table) {
            DB::statement("ALTER TABLE categorias ADD thumb LONGBLOB");
            DB::statement("ALTER TABLE categorias ADD capa LONGBLOB");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
