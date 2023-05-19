<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = [];

    protected $casts = [
        'created_by' => 'int',
        'deleted_by' => 'int',
        'updated_by' => 'int',
    ];

    protected $fillable = [
        'name',
        'slug',
        'is_active',
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

    public function medias()
    {
        return $this->morphMany(Media::class, 'mediable');
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
