<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat');
            $table->text('hobi')->nullable();
            $table->string('favorit_pet')->nullable();
            $table->string('favorit_warna')->nullable();
            $table->string('reputasi')->nullable();
            $table->string('motto')->nullable();
            $table->string('img')->nullable();
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
        Schema::dropIfExists('game_masters');
    }
}
