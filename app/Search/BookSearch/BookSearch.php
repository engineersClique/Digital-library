<?php
namespace App\Search\BookSearch;

use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BookSearch {
    public static function apply(Request $filters){
        $query = (new Book)->newQuery();
        $query = static::applyDecoratorsFromRequest($filters, $query);

        return $query->with('authors', 'ratings')->get();
    }

    private static function applyDecoratorsFromRequest(Request $request, Builder $query)
    {
        foreach ($request->all() as $filterName => $value) {
            if(!$value) continue;

            $decorator = static::createFilterDecorator($filterName);

            if (static::isValidDecorator($decorator)) {
                $query = $decorator::apply($query, $value);
            }

        }
        return $query;
    }

    private static function createFilterDecorator($name)
    {
        return __NAMESPACE__ . '\\Filters\\' .
        str_replace(' ', '',
            ucwords(str_replace('_', ' ', $name)));
    }

    private static function isValidDecorator($decorator)
    {
        return class_exists($decorator);
    }

    private static function getResults(Builder $query)
    {
        return $query->get();
    }
}