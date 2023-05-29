<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_cards', function (Blueprint $table) {
            $table->id();
            $table->string('sale_id');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('card_month');
            $table->string('card_year');
            $table->string('card_cvc');
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
        Schema::dropIfExists('sales_cards');
    }
}
