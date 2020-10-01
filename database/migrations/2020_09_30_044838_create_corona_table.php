<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoronaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->integer('total_cases');
            $table->integer('new_cases');
            $table->integer('total_deaths');
            $table->integer('new_deaths');
            $table->integer('total_recovered');
            $table->integer('active_cases');
            $table->integer('critical');
            $table->integer('top_cases_m');
            $table->integer('deaths_m');
            $table->integer('total_tests');
            $table->integer('tests_m');
            $table->integer('population');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corona');
    }
}
