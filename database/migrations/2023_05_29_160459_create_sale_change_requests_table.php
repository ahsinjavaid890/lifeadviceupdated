<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleChangeRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_change_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reffrence_number');
            $table->string('policy_number')->nullable();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('new_effective_date');
            $table->string('new_return_date');
            $table->string('document')->nullable();
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
        Schema::dropIfExists('sale_change_requests');
    }
}
