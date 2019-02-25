<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');
Route::post('/locale', 'LocaleController@index')->name('site.language');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('books.')->prefix('books')->group(function() {
    Route::get('/', 'BookController@index')->name('index');
    Route::get('/discover', 'BookController@discover')->name('discover');
    Route::get('/hot', 'BookController@hot')->name('hot');
    Route::get('/rated', 'BookController@rated')->name('rated');

    Route::get('sort/oldest', 'BookController@oldest')->name('sort.oldest');
    Route::get('sort/newest', 'BookController@newest')->name('sort.newest');
    Route::get('sort/a-z', 'BookController@titles_ascending')->name('sort.titles_ascending');
    Route::get('sort/z-a', 'BookController@titles_descending')->name('sort.titles_descending');

    Route::get('book/{book}', 'BookController@show')->name('show');
    Route::get('/author', 'AuthorController@index')->name('author');
    Route::get('/author/{author}', 'AuthorController@show')->name('author.show');
    Route::get('category', 'CategoryController@index')->name('category');
    Route::get('category/{tag}', 'CategoryController@show')->name('category.show');
    Route::get('series', 'SeriesController@index')->name('series');
    Route::get('series/{series}', 'SeriesController@show')->name('series.show');
    Route::get('publisher', 'PublisherController@index')->name('publisher');
    Route::get('publisher/{publisher}', 'PublisherController@show')->name('publisher.show');
    Route::get('language', 'LanguageController@index')->name('language');
    Route::get('language/{language}', 'LanguageController@show')->name('language.show');

    Route::get('search', 'SearchController@index')->name('search');
    Route::get('advanced_search', 'SearchController@advanced')->name('advanced_search');

    Route::get('get_authors_json', 'AuthorController@get_json')->name('author.get_json');
    Route::get('get_publishers_json', 'PublisherController@get_json')->name('publisher.get_json');

    Route::get('read/{book}/pdf', 'BookController@read')->name('read');
    Route::get('download/{book}/pdf', 'BookController@download')->name('download');
    Route::get('serve/{book}/pdf', 'BookController@serve')->name('serve');
});

Route::middleware('auth')->namespace('Admin')->prefix("admin")->name("admin.")->group(function(){
    Route::resource('tags', 'TagController');
    Route::resource('series', 'SeriesController');
    Route::resource('ratings', 'RatingController');
    Route::resource('publishers', 'PublisherController');
    Route::resource('preferences', 'PreferenceController');
    Route::resource('languages', 'LanguageController');
    Route::resource('users', 'UserController');
    Route::resource('identifiers', 'IdentifierController');
    Route::resource('file', 'FileController');
    Route::resource('feeds', 'FeedController');
    Route::resource('conversionOptions', 'ConversionOptionController');
    Route::resource('books', 'BookController');
    Route::resource('authors', 'AuthorController');
    Route::resource('comments', 'CommentController');
});

Route::get('videos', 'Videos\VideoController@index')->name('videos.index');

Route::name('videos.')->prefix('videos')->group(function() {
    Route::resource('/', 'Videos\VideoController')->only(['index']);
    Route::get('topics/t/{topic_id}', 'Videos\VideoController@show_topic')->name('topics.show');
    Route::get('topics/c/{topic_id}', 'Videos\VideoController@show_content')->name('content.show');
});


//Route::get('vid','Videos\VideoController@index')->name('vid.index');