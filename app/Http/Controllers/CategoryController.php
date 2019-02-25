<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Category list";
        $route = 'books.category.show';
        $entries = Tag::withCount('books')->groupBy('id', 'name')->orderBy('name')->get();

        return view('theme::frontend.list', compact('entries', 'title', 'route'));
    }

    public function show(Tag $tag)
    {
        $title = __("Category") . ': '. $tag->name;
        $books = $tag->books()->with('authors',  'ratings')->orderBy('title')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }
}
