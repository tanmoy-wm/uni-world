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
            $table->string('address')->nullable();
            $table->string('city')->index()->nullable();
            $table->string('marital_status')->index()->nullable();
            $table->string('passport_number')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('fast_language')->nullable();
            $table->string('country_of_education')->nullable();
            $table->string('highest_level_of_education')->nullable();
            $table->string('grading_scheme')->nullable();
            $table->boolean('graduated_from_this_institute')->nullable();
            $table->string('grade_average')->nullable();
            $table->boolean('is_gmat')->nullable();
            $table->string('gmat_total_score')->nullable();
            $table->string('gmat_rank')->nullable();
            $table->string('gmat_verbal')->nullable();
            $table->string('gmat_verbal_rank')->nullable();
            $table->string('gmat_quantitative')->nullable();
            $table->string('gmat_quantitative_rank')->nullable();
            $table->string('gmat_awa')->nullable();
            $table->string('gmat_awa_rank')->nullable();
            $table->date('date_of_gmat_exam')->nullable();
            $table->boolean('is_gre')->nullable();
            $table->string('gre_total_score')->nullable();
            $table->string('gre_rank')->nullable();
            $table->string('gre_verbal')->nullable();
            $table->string('gre_verbal_rank')->nullable();
            $table->string('gre_quantitative')->nullable();
            $table->string('gre_quantitative_rank')->nullable();
            $table->string('gre_awa')->nullable();
            $table->string('gre_awa_rank')->nullable();
            $table->date('date_of_gre_exam')->nullable();
            $table->string('english_test_type')->nullable();
            $table->string('toefl_reading_score')->nullable();
            $table->string('toefl_listening_score')->nullable();
            $table->string('toefl_writing_score')->nullable();
            $table->date('toefl_exam_date')->nullable();
            $table->string('toefl_speaking_score')->nullable();
            $table->string('ielts_reading_score')->nullable();
            $table->string('ielts_listening_score')->nullable();
            $table->string('ielts_writing_score')->nullable();
            $table->string('ielts_speaking_score')->nullable();
            $table->date('ielts_exam_date')->nullable();
            $table->string('pte_total_score')->nullable();
            $table->string('pte_reading_score')->nullable();
            $table->string('pte_listening_score')->nullable();
            $table->string('pte_writing_score')->nullable();
            $table->string('pte_speaking_score')->nullable();
            $table->date('pte_exam_date')->nullable();
            $table->string('duolingo_total_score')->nullable();
            $table->date('duolingo_exam_date')->nullable();
            $table->boolean('refused_a_visa_from_canada_use_uk_nz_au_ireland')->nullable();
            $table->string('study_permit_or_visa')->nullable();
            $table->text('study_permit_or_visa_description')->nullable();
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
            //
        });
    }
};
