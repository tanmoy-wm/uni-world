<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UniversityCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = [];

    protected $table = 'university_courses';

    protected $casts = [
        'created_by' => 'int',
        'deleted_by' => 'int',
        'updated_by' => 'int',
    ];

    protected $fillable = [
        'title',
        'slug',
        'description',
        'duration',
        'apply_fees',
        'gross_fees',
        'total_sem',
        'minimum_qualification',
        'minimum_gpa',
        'minimum_language_test_score',
        'cost_of_living',
        'program_level',
        'application_open_date',
        'application_deadline',
        'category_id',
        'university_id',
        'is_active',
        'meta',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    //------------------- Relationships -------------------//
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    //------------------- Relationships -------------------//


    //--------------------- Attributes --------------------//
    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }
    //--------------------- Attributes --------------------//


    //---------------------- Methods ----------------------//
    public static function sorted($direction)
    {
        switch ($direction) {
            case 'newest':
                $data = self::latest();
                break;
            case 'asc':
                $data = self::orderBy('id', 'ASC');
                break;
            default:
                $data = self::orderBy('id', 'DESC');
                break;
        }

        return $data;
    }

    public static function search($data, $search_term): object
    {
        $data->withTrashed()->where(function ($q) use ($search_term) {
            $q->where('name', 'LIKE', '%' . $search_term . '%')
                ->orWhere('slug', 'LIKE', '%' . $search_term . '%');
        });

        return $data;
    }
    //---------------------- Methods ----------------------//
}
