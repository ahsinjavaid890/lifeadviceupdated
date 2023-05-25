<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemproaryquotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temproaryquotes', function (Blueprint $table) {
            $table->id();
            $table->string('quote_id');
            $table->string('product_id');
            $table->string('departure_date');
            $table->string('return_date');
            $table->string('sum_insured2');
            $table->string('primarydestination');
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
        Schema::dropIfExists('temproaryquotes');
    }
}
