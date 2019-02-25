<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        \App::setLocale(\Session::get('locale', 'en'));
    }
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $random = Book::inRandomOrder()->with('authors', 'ratings', 'series', 'tags')->take(config('settings.random_books_pagination_count'))->with('authors')->get();

        $recent_books = Book::orderBy('id', 'desc')->take('tags')->with('authors',  'ratings')->paginate(config('settings.books_pagination_count'));

        if ($request->ajax()) {
            $view = view('theme::frontend.home_infinitescroll',compact('recent_books'))->render();
            return response($view);
        }
        return view("theme::frontend.home", compact('random', 'recent_books'));
    }
}
