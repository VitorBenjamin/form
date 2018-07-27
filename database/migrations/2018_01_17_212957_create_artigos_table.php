<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('resumo');
            $table->text('descricao');
            $table->string('title_thumb');
            $table->string('alt_thumb');
            $table->string('title_capa');
            $table->string('alt_capa');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
        Schema::table('artigos', function (Blueprint $table) {
            DB::statement("ALTER TABLE artigos ADD thumb LONGBLOB");
            DB::statement("ALTER TABLE artigos ADD capa LONGBLOB");
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artigos');
    }
}
