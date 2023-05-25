<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasActive
{
    public function scopeActive(Builder $builder): Builder
    {
        return $builder->where('is_active', '=', true);
    }
}
