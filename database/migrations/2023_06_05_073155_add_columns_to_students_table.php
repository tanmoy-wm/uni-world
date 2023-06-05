<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->json('preferred_countries')->nullable();
            $table->json('applying_education_levels')->nullable();
            $table->json('preferred_stream')->nullable();
            $table->json('preferred_month_of_starting')->nullable();
            $table->string('budget')->nullable();
            $table->string('nationality')->nullable();
            $table->string('current_country')->nullable();
            $table->json('standardized_tests_taken')->nullable();
            $table->string('education_status')->nullable();
            $table->string('education_level')->nullable();
            $table->string('degree')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
        });
    }
};
