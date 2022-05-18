<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skill_id');
            $table->integer('lv')->nullable();
            $table->integer('skill_point')->nullable();
            $table->integer('atk')->nullable();
            $table->integer('pemakaian_ap')->nullable();
            $table->integer('jarak')->nullable();
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
        Schema::dropIfExists('skill_levels');
    }
}
