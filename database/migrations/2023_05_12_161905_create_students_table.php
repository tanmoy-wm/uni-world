<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->index();
            $table->string('middle_name', 255)->index()->nullable();
            $table->string('last_name', 255)->index();
            $table->string('email', 255)->unique()->index();
            $table->string('country_code')->index()->nullable();
            $table->string('mobile_number')->unique()->index()->nullable();
            $table->string('state')->index()->nullable();
            $table->string('country')->index()->nullable();
            $table->string('gender')->index()->nullable();
            $table->date('dob')->nullable();
            $table->longText('meta')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
