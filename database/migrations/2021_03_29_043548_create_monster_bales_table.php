<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterBalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_bales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('type');
            $table->string('img')->nullable();
            $table->text('lokasi')->nullable();
            $table->integer('level')->nullable();
            $table->string('elemen')->nullable();
            $table->integer('hp')->nullable();
            $table->integer('atk')->nullable();
            $table->integer('def')->nullable();
            $table->text('item_drop')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('monster_bales');
    }
}
