<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddButtonOnBottomOnSetupIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setup_intros', function (Blueprint $table) {
            $table->string('button_on_bottom')->after('img_maintenance')->nullable();
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
            $table->dropColumn('button_on_bottom');
        });
    }
}
