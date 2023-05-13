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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('business_certificate', 255)->index();
            $table->string('first_name', 255)->index();
            $table->string('middle_name', 255)->index();
            $table->string('last_name', 255)->index();
            $table->string('business_logo', 255)->index();
            $table->string('email', 255)->unique()->index();


            $table->string('phone_number', 255)->index();
            $table->string('address', 255)->index();
            $table->string('city', 255)->index();
            $table->string('state', 255)->index();
            $table->string('pincode', 255)->index();
            $table->string('student_source_country', 255)->index();

            
           
            $table->string('slug', 255)->index()->unique();
            $table->boolean('is_active')->index();
            $table->longText('meta')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->index('created_by');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->index('updated_by');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
            $table->index('deleted_by');

            $table->softDeletes();
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
        Schema::dropIfExists('agents');
    }
};
