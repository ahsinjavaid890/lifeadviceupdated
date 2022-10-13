<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeInUsers1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('dot_number')->nullable()->change();
            $table->string('trucks_in_fleet')->nullable()->change();
            $table->string('how_many_drivers_in_next')->nullable()->change();
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
            $table->string('dot_number')->nullable(false)->change();
            $table->string('trucks_in_fleet')->nullable(false)->change();
            $table->string('how_many_drivers_in_next')->nullable(false)->change();
        });
    }
}
