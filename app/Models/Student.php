<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = ['full_mobile_number', 'name'];

    protected $casts = [
        'created_by' => 'int',
        'deleted_by' => 'int',
        'updated_by' => 'int',
    ];

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'country_code',
        'mobile_number',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'gender',
        'marital_status ',
        'passport_number',
        'passport_expiry_date',
        'fast_language',
        'country_of_education',
        'highest_level_of_education',
        'grading_scheme',
        'grade_average',
        'is_gmat',
        'gmat_total_score',
        'gmat_rank',
        'gmat_verbal',
        'gmat_verbal_rank',
        'gmat_quantitative',
        'gmat_quantitative_rank',
        'gmat_awa',
        'gmat_awa_rank',
        'date_of_gmat_exam',
        'is_gre',
        'gre_total_score',
        'gre_rank',
        'gre_verbal',
        'gre_verbal_rank',
        'gre_quantitative',
        'gre_quantitative_rank',
        'gre_awa',
        'gre_awa_rank',
        'date_of_gre_exam',
        'refused_a_visa_from_canada_use_uk_nz_au_ireland',
        'study_permit_or_visa',
        'study_permit_or_visa_description',
        'dob',
        'english_test_type',
        'toefl_reading_score',
        'toefl_listening_score',
        'toefl_writing_score',
        'toefl_speaking_score',
        'toefl_total_score',
        'toefl_exam_date',
        'ielts_reading_score',
        'ielts_listening_score',
        'ielts_writing_score',
        'ielts_speaking_score',
        'ielts_total_score',
        'ielts_exam_date',
        'pte_reading_score',
        'pte_listening_score',
        'pte_writing_score',
        'pte_speaking_score',
        'pte_total_score',
        'pte_exam_date',
        'duolingo_total_score',
        'duolingo_exam_date',
        'is_active',
        'meta',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    //------------------- Relationships -------------------//
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'profile');
    }
    //------------------- Relationships -------------------//


    //--------------------- Attributes --------------------//
    protected function firstName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

    protected function middleName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

    protected function lastName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

    public function getNameAttribute(): string
    {
        if ($this->middle_name) {
            return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
        }

        return $this->first_name . ' ' . $this->last_name;
    }

    public function getFullMobileNumberAttribute(): string
    {
        return $this->country_code . ' ' . $this->mobile_number;
    }
    //--------------------- Attributes --------------------//
}
