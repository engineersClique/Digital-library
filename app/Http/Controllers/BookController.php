<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rating;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        \App::setLocale(\Session::get('locale', 'en'));
    }

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
    public function show(Book $book)
    {
        $page = 'book';
        $book->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment');

        return view('theme::frontend.book_detail', compact('book', 'page'));
    }

    public function discover()
    {
        $title = 'Discover (Random Books)';
        $books = Book::inRandomOrder()->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->get();

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function newest()
    {
        $title = 'Newest Books';
        $books = Book::orderBy('pubdate', 'desc')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function oldest()
    {
        $title = 'Oldest Books';
        $books = Book::orderBy('pubdate', 'asc')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function titles_ascending()
    {
        $title = 'Books (A-Z)';
        $books = Book::orderBy('title', 'asc')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function titles_descending()
    {
        $title = 'Books (Z-A)';
        $books = Book::orderBy('title', 'desc')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function hot()
    {
        $title = 'Hot Books (most downloaded)';
        $books = Book::withCount('downloads')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->orderBy('downloads_count', 'desc')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    public function rated()
    {
        $title = "Best rated books";
        $books = Book::withCount('ratings')->with('authors', 'languages', 'publishers', 'ratings', 'series', 'tags', 'comment')->orderBy('ratings_count', 'desc')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    /**
     * display page for pdf reader
     * @param Book $book
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function read(Book $book)
    {
        $book->reads()->create();
        return view('theme::frontend.book_read', compact('book'));
    }

    /**
     * Stream book for pdf reader
     * @param Book $book
     * @return mixed
     */
    public function serve(Book $book)
    {
        header('Content-Type: application/pdf');
        return response()->file(
            public_path('storage/books/'.$book->path.'/' . $book->files->first()->name . '.' . strtolower($book->files()->first()->format))
        );
    }

    /**
     * Download Book
     * @param Book $book
     * @return mixed
     */
    public function download(Book $book)
    {
        $book->downloads()->create();
        header('Content-Disposition: attachment; filename=ebook_' . str_random(10) . '.pdf');

        return response()->file(
            public_path('storage/books/'.$book->path.'/' . $book->files->first()->name . '.' . strtolower($book->files()->first()->format))
        );
    }
}
