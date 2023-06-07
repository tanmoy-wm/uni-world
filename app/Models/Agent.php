<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
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
        'pincode',
        'country',
        'student_source_country',
        'business_certificate',
        'business_logo',
        'preferred_contact_method',
        'preferred_contact_method_number',
        'how_did_you_find_about_uniwolc',
        'in_which_year_you_start_recruiting',
        'provided_service',
        'meta',
        'created_by',
        'deleted_by',
        'updated_by',
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

    public function staff(): HasMany
    {
        return $this->hasMany(Staff::class, 'agent_id');
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'agent_id');
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
