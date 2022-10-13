<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumsInHiringTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hiring_templates', function (Blueprint $table) {
            $table->longtext('additionl_notes_about_moving_voliations')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hiring_templates', function (Blueprint $table) {
            $table->longtext('additionl_notes_about_moving_voliations')->nullable(false)->change();
        });
    }
}
