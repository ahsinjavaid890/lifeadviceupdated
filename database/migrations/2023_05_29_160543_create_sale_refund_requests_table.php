<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleRefundRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_refund_requests', function (Blueprint $table) {
            $table->id();
            $table->string('reffrence_number');
            $table->string('policy_number')->nullable();
            $table->string('start_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('refund_form')->nullable();
            $table->string('proof_of_return')->nullable();
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
        Schema::dropIfExists('sale_refund_requests');
    }
}
