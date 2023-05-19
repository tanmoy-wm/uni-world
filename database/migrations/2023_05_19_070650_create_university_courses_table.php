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
        Schema::create('university_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->index();
            $table->string('slug', 255)->index()->unique();
            $table->text('description');
            $table->string('duration');
            $table->string('apply_fees');
            $table->string('gross_fees');
            $table->string('total_sem')->nullable();
            $table->string('minimum_qualification');
            $table->string('minimum_gpa');
            $table->string('minimum_language_test_score')->nullable();
            $table->string('cost_of_living');
            $table->string('program_level');
            $table->dateTime('application_open_date');
            $table->dateTime('application_deadline');
            $table->boolean('is_active')->index();
            $table->longText('meta')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
            $table->index('category_id');

            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id')->references('id')->on('universities')->nullOnDelete();
            $table->index('university_id');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->nullOnDelete();
            $table->index('created_by');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->nullOnDelete();
            $table->index('updated_by');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users')->nullOnDelete();
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
        Schema::dropIfExists('university_courses');
    }
};
