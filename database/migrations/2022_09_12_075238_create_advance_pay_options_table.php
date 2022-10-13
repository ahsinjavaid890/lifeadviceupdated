<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancePayOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_pay_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('breakdown_pay')->nullable();
            $table->string('cash_advance')->nullable();
            $table->string('detention_pay')->nullable();
            $table->string('pays_amount')->nullable();
            $table->string('are_drivers_paid_the_same_for_loaded_and_empty')->nullable();
            $table->string('miles_cpn_chat')->nullable();
            $table->string('end_of_pay_week')->nullable();
            $table->string('hazmat_pay')->nullable();
            $table->string('hazmat_pay_options_field')->nullable();
            $table->string('holida_pay')->nullable();
            $table->string('how_are_drivers_paid')->nullable();
            $table->string('how_are_drivers_paid_other_field')->nullable();
            $table->string('layover_pay')->nullable();
            $table->string('layover_pay_amount')->nullable();
            $table->string('minimum_pay_guarantee')->nullable();
            $table->string('minimum_pay_guarantee_amount')->nullable();
            $table->string('multi_stop_pay')->nullable();
            $table->string('multi_stop_pay_amount')->nullable();
            $table->string('paid_on')->nullable();
            $table->string('paid_on_field')->nullable();
            $table->string('new_york_city_pay')->nullable();
            $table->string('new_york_city_pay_amount')->nullable();
            $table->string('northeast_pay')->nullable();
            $table->string('northeast_pay_amount')->nullable();
            $table->string('prientation_pay')->nullable();
            $table->string('prientation_pay_amount')->nullable();
            $table->string('pay_increase')->nullable();
            $table->string('per_diem')->nullable();
            $table->string('per_diem_amount')->nullable();
            $table->string('referral_bonus')->nullable();
            $table->string('safety_bonus')->nullable();
            $table->string('start_of_pay_week')->nullable();
            $table->string('type_of_driver_pay')->nullable();
            $table->string('unloading_pay')->nullable();
            $table->string('vacation_pay')->nullable();
            $table->string('when_are_drivers_paid')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs');
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
        Schema::dropIfExists('advance_pay_options');
    }
}
