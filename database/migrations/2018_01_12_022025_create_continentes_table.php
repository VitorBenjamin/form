<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContinentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('tag')->nullable();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
        Schema::table('continentes', function (Blueprint $table) {
            DB::statement("ALTER TABLE continentes ADD thumb LONGBLOB");
            DB::statement("ALTER TABLE continentes ADD capa LONGBLOB");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('continentes');
    }
}
