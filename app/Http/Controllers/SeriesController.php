<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $title = "Series list";
        $route = 'books.series.show';
        $entries = Series::withCount('books')->groupBy('id', 'name', 'sort')->orderBy('name')->get();

        return view('theme::frontend.list', compact('entries', 'title', 'route'));
    }

    public function show(Series $series)
    {
        $title = "Series: " . $series->name;
        $books = $series->books()->with('authors',  'ratings')->orderBy('title')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }
}
