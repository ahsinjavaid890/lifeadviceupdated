<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelerSaleInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traveler_sale_informations', function (Blueprint $table) {
            $table->id();
            $table->string('sale_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('gender');
            $table->string('pre_existing_condition')->nullable();
            $table->string('date_of_birth');
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
        Schema::dropIfExists('traveler_sale_informations');
    }
}
