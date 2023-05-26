<?php

namespace App\Models;

use App\Traits\HasActive;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasActive, HasFactory, SoftDeletes;

    protected $appends = [];

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'parent_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    //------------------- Relationships -------------------//
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->with('children');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function deletedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class, 'category_id');
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
