<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $title = "Publisher list";
        $route = 'books.publisher.show';
        $entries = Publisher::withCount('books')->groupBy('id', 'name', 'sort')->orderBy('name')->get();

        return view('theme::frontend.list', compact('entries', 'title', 'route'));
    }

    public function show(Publisher $publisher)
    {
        $title = "Publisher: " . $publisher->name;
        $books = $publisher->books()->with('authors',  'ratings')->orderBy('title')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    /**
     * Search publisher and return json result
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_json(){
        $term = strToLower(trim(request('q')));

        $authors = Publisher::where('name', 'like', '%' . $term . '%')->get();
        return response()->json($authors);
    }
}
