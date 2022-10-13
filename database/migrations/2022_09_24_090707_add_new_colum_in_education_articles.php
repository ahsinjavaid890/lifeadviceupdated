<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumInEducationArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('education_articles', function (Blueprint $table) {
            $table->string('type');
            $table->string('carrier_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education_articles', function (Blueprint $table) {
            $table->dropColumn('type')->nullable();
            $table->dropColumn('carrier_id')->nullable();
        });
    }
}
