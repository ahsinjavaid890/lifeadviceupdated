<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiringTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiring_templates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name')->nullable();
            $table->string('minimum_age')->nullable();
            $table->string('minimum_age_field')->nullable();
            $table->string('minimum_expereince')->nullable();
            $table->longtext('additional_notes_about_expereince')->nullable();
            $table->string('no_more_than')->nullable();
            $table->string('moving_violations')->nullable();
            $table->string('additionl_notes_about_moving_voliations')->nullable();
            $table->string('no_more_than_major_voilations')->nullable();
            $table->string('major_moving_voilations')->nullable();
            $table->longtext('additionl_notes_about_moving_major_voliations')->nullable();
            $table->string('license_suspensions')->nullable();
            $table->longtext('license_suspensions_field')->nullable();
            $table->string('dot_no_more_than')->nullable();
            $table->string('dot_moving_voilations')->nullable();
            $table->string('preventable_accidents_withn_the_last')->nullable();
            $table->longtext('reason_of_suspensions')->nullable();
            $table->string('no_more_than_incidents')->nullable();
            $table->string('moving_voilations_incidents')->nullable();
            $table->string('ticket_incedent')->nullable();
            $table->longtext('specify_in_a_free_form_fill')->nullable();
            $table->string('maximum_jobs_no_more_than')->nullable();
            $table->string('maximum_jobs_moving_voilations')->nullable();
            $table->string('unemployment')->nullable();
            $table->longtext('maximum_jobs_additional_infomation')->nullable();
            $table->longtext('felony_convictions')->nullable();
            $table->longtext('misdemeanors')->nullable();
            $table->longtext('drug_duis')->nullable();
            $table->string('type_of_drug_test')->nullable();
            $table->string('accepting_sap_drivers')->nullable();
            $table->longtext('additional_information')->nullable();
            $table->longtext('physical')->nullable();
            $table->string('accomodate_an_automatic_restriction')->nullable();
            $table->string('camera_installed')->nullable();
            $table->string('camera_type')->nullable();
            $table->string('camera_are')->nullable();
            $table->string('camera_facing')->nullable();
            $table->string('camera_recording')->nullable();
            $table->longtext('requiredendorsements')->nullable();
            $table->integer('is_template');
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('hiring_templates');
    }
}
