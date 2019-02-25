<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Author list';
        $route = 'books.author.show';
        $entries =  Author::withCount('books')->groupBy('id', 'name', 'sort', 'link')->orderBy('books_count', 'desc')->get();

        return view('theme::frontend.list', compact('entries', 'title', 'route'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        $title = "Category: " . $author->name;
        $books = $author->books()->with('authors',  'ratings')->orderBy('title')->paginate(config('settings.books_pagination_count'));

        return view('theme::frontend.book_list', compact('books', 'title'));
    }

    /**
     * Search author and return json result
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_json(){
        $term = strToLower(trim(request('q')));

        $authors = Author::where('name', 'like', '%' . $term . '%')->get();
        return response()->json($authors);
    }
}
