<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompatibilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibilidades', function (Blueprint $table) {
            $table->id();
            $table->string('processador', 100);
            $table->string('video', 100);
            $table->integer('ram');
            $table->string('espaco', 10);

            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->foreignId('sistema_id')->constrained()->onDelete('cascade');
            $table->foreignId('arquitetura_id')->constrained()->onDelete('cascade');


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
        Schema::dropIfExists('compatibilidades');
    }
}
