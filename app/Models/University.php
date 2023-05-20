<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = [
        'full_address'
    ];

    protected $casts = [
        'created_by' => 'int',
        'deleted_by' => 'int',
        'updated_by' => 'int',
    ];

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'country_code',
        'mobile_number',
        'alt_country_code',
        'alt_mobile_number',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'status',
        'dli_number',
        'institution_type',
        'founded_year',
        'why_your_institution',
        'website',
        'linkedin',
        'facebook',
        'instagram',
        'twitter',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    //------------------- Relationships -------------------//
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function features(): HasMany
    {
        return $this->hasMany(UniversityFeature::class, 'university_id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function universityCourses(): HasMany
    {
        return $this->hasMany(UniversityCourse::class, 'university_id');
    }

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'profile');
    }
    //------------------- Relationships -------------------//


    //--------------------- Attributes --------------------//
    public function getFullAddressAttribute(): string
    {
        return $this->city . ', ' . $this->state . ', ' . $this->country;
    }
    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value)
        );
    }

    protected function username(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtolower($value),
            set: fn ($value) => strtolower($value)
        );
    }

    protected function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
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
