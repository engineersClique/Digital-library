<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $title = "Language list";
        $route = 'books.language.show';
        $entries = Language::withCount('books')->groupBy('id', 'lang_code')->orderBy('lang_code')->get();

        return view('theme::frontend.language_list', compact('entries', 'title', 'route'));
    }

    public function show(Language $language)
    {
        $title = "Language: " . $language->name;
        $books = $language->books()->with('authors',  'ratings')->orderBy('title')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }
}
