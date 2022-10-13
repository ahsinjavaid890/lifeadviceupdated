<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('staff_permissions');
            $table->unsignedBigInteger('module_id');
            $table->foreign('staff_permissions')->references('id')->on('staff_permissions');
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
        Schema::dropIfExists('set_roles');
    }
}
