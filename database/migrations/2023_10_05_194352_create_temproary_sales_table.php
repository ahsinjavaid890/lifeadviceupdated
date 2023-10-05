<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemproarySalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temproary_sales', function (Blueprint $table) {
            $table->id();
            $table->string('website');
            $table->string('reffrence_number');     
            $table->string('sponsersname');
            $table->string('sponsersemail');    
            $table->string('email');
            $table->string('phonenumber');      
            $table->string('address');
            $table->string('appartment');       
            $table->string('city');
            $table->string('province');     
            $table->string('postalcode');       
            $table->string('country');      
            $table->string('product_id');       
            $table->string('start_date');       
            $table->string('end_date');     
            $table->string('primary_destination');      
            $table->string('duration');     
            $table->string('premium');      
            $table->string('coverage_ammount');     
            $table->string('deductibles');      
            $table->string('deductible_rate');      
            $table->string('company_name');     
            $table->string('comp_id');      
            $table->string('plan_id');      
            $table->string('step');       
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
        Schema::dropIfExists('temproary_sales');
    }
}
