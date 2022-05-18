<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackgroundOnSetupIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setup_intros', function (Blueprint $table) {
            $table->string('background')->after('id')->nullable();
            $table->dropColumn('button_up');
            $table->dropColumn('button_maintenance');
            $table->dropColumn('button_on_bottom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setup_intros', function (Blueprint $table) {
            $table->string('button_up');
            $table->string('button_maintenance');
            $table->string('button_on_bottom');
            $table->dropColumn('background');
        });
    }
}
