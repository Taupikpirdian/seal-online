<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->string('img_header')->nullable();
            $table->string('title_img_left')->nullable();
            $table->string('link_img_left')->nullable();
            $table->string('img_left')->nullable();
            $table->string('title_img_right')->nullable();
            $table->string('link_img_right')->nullable();
            $table->string('img_right')->nullable();
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
        Schema::dropIfExists('backgrounds');
    }
}
