<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddnewColumnInCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->longtext('best_practices')->nullable();
            $table->longtext('ownership_policy')->nullable();
            $table->longtext('referral_programe')->nullable();
            $table->longtext('orientation_schedule')->nullable();
            $table->longtext('terminal_locations')->nullable();
            $table->longtext('sales_funner')->nullable();
            $table->longtext('safety_guide')->nullable();
            $table->longtext('driver_benifits')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('best_practices');
            $table->dropColumn('ownership_policy');
            $table->dropColumn('referral_programe');
            $table->dropColumn('orientation_schedule');
            $table->dropColumn('terminal_locations');
            $table->dropColumn('sales_funner');
            $table->dropColumn('safety_guide');
            $table->dropColumn('driver_benifits');
        });
    }
}
