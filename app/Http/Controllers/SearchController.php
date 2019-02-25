<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Language;
use App\Models\Series;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Search\BookSearch\BookSearch;

class SearchController extends Controller
{
    public function index()
    {
        $term = strtolower(trim(request('query')));

        $title = 'No Results for:';
        $subtitle = 'Please try a different search';
        $books = collect([]);

        if (!$term) {
            return view('theme::frontend.book_list', compact('books', 'title', 'subtitle'));
        }

        $books = Book::where('title', 'like', '%' . $term . '%')
            ->orWhereHas('authors', function ($query) use ($term) {
                return $query->where('name', 'like', '%' . $term . '%');
            })->orWhereHas('publishers', function ($query) use ($term) {
                return $query->where('name', 'like', '%' . $term . '%');
            })->orWhereHas('series', function ($query) use ($term) {
                return $query->where('name', 'like', '%' . $term . '%');
            })->orWhereHas('tags', function ($query) use ($term) {
                return $query->where('name', 'like', '%' . $term . '%');
            })
            ->with('authors', 'ratings' )->get();

        $title = $books->count() . ' Result for: ' . $term;

        return view('theme::frontend.book_list', compact('books', 'title', 'term'));
    }

    public function advanced(Request $filters)
    {
        $include_tags = request('include_tags');
        $exclude_tags = request('exclude_tags');
        $include_series = request('include_series');
        $exclude_series = request('exclude_series');
        $include_language = request('include_language');
        $exclude_language = request('exclude_language');

        $author = request("author");
        $title = request("title");
        $publisher = request("publisher");
        $pub_start = request("publish_start");
        $pub_end = request("publish_end");
        $rating_low = request("ratinghigh");
        $rating_high = request("ratinglow");
        $description = request("comment");

        $searchterm = [];

        if ($author) $searchterm['author'] = strtolower(trim($author));
        if ($title) $searchterm['title'] = strtolower(trim($title));
        if ($publisher) $searchterm['publisher'] = strtolower(trim($publisher));
        if ($pub_start) $searchterm['pub_start'] = 'Published after ' . date('j D, Y', strtotime($pub_start));
        if ($pub_end) $searchterm['pub_end'] = 'Published before ' . date('j D, Y', strtotime($pub_end));

        $tags = Tag::orderBy('name')->get();
        $series = Series::orderBy('name')->get();
        $languages = Language::orderBy('lang_code')->get();

        if ( $include_tags ||  $exclude_tags || $include_series || $exclude_series ||
            $include_language ||  $exclude_language ||  $title || $author ||
            $publisher || $pub_start ||  $pub_end ||  $rating_low || $rating_high ||  $description){

             $books = BookSearch::apply($filters);

            $title = $books->count() . " Results for: " . implode(' + ', $searchterm);
            return view('theme::frontend.book_list', compact('books', 'title'));

        }

        $title = "search";

        return view('theme::frontend.search_form', compact('tags', 'languages', 'series', 'title'));
    }
}
