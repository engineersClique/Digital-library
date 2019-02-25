<?php

namespace App\Search\BookSearch\Filters;

use Illuminate\Database\Eloquent\Builder;

class Publisher implements Filter{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('publishers', function($query) use($value){
            return $query->where('name', 'like', '%' . strtolower(trim($value)) . '%');
        });
    }
}