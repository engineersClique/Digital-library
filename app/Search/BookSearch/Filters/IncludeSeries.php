<?php

namespace App\Search\BookSearch\Filters;

use Illuminate\Database\Eloquent\Builder;

class IncludeSeries implements Filter{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('series', function($query) use($value){
            return $query->whereIn('series.id',explode(',', $value));
        });
    }
}