<?php

namespace App\Search\BookSearch\Filters;

use Illuminate\Database\Eloquent\Builder;

class IncludeTags implements Filter{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->whereHas('tags', function($query) use($value){
            return $query->whereIn('tags.id',$value);
        });
    }
}