<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsInUserTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('dot_number');
            $table->string('trucks_in_fleet');
            $table->string('how_many_drivers_in_next');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('dot_number');
            $table->dropColumn('trucks_in_fleet');
            $table->dropColumn('how_many_drivers_in_next');
        });
    }
}
