<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNullInCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('logo')->nullable()->change();
            $table->string('banner')->nullable()->change();
            $table->string('contact_number')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('website_link')->nullable()->change();
            $table->longtext('aboutus')->nullable()->change();
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
            $table->integer('logo')->nullable(false)->change();
            $table->integer('banner')->nullable(false)->change();
            $table->integer('contact_number')->nullable(false)->change();
            $table->integer('address')->nullable(false)->change();
            $table->integer('website_link')->nullable(false)->change();
            $table->integer('aboutus')->nullable(false)->change();
        });
    }
}
