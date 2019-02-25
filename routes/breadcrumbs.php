<?php

Breadcrumbs::for('index', function($trail){
    $trail->push(__('Home'), route('index'));
});

Breadcrumbs::for('home', function($trail){
    $trail->push(__('Home'), route('home'));
});
Breadcrumbs::for('books', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Book'), route('books.discover'));
});
Breadcrumbs::for('books.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Book'), route('books.index'));
});

Breadcrumbs::for('books.discover', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Discover'), route('books.discover'));
});
Breadcrumbs::for('books.hot', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Hot'), route('books.hot'));
});
Breadcrumbs::for('books.rated', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Best Rated'), route('books.rated'));
});
Breadcrumbs::for('books.category', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Categories'), route('books.category'));
});

Breadcrumbs::for('books.category.show', function ($trail, $tag) {
    $trail->parent('books.category');
    $trail->push(__(strip_tags($tag->name)), route('books.category.show', $tag));
});

Breadcrumbs::for('books.series', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Series'), route('books.series'));
});

Breadcrumbs::for('books.series.show', function ($trail, $series) {
    $trail->parent('books.series');
    $trail->push(__(strip_tags($series->name)), route('books.series.show', $series));
});

Breadcrumbs::for('books.author', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Author'), route('books.author'));
});

Breadcrumbs::for('books.author.show', function ($trail, $author) {
    $trail->parent('books.author');
    $trail->push(__(strip_tags($author->name)), route('books.author.show', $author));
});

Breadcrumbs::for('books.publisher', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Publisher'), route('books.publisher'));
});

Breadcrumbs::for('books.publisher.show', function ($trail, $publisher) {
    $trail->parent('books.publisher');
    $trail->push(__(strip_tags($publisher->name)), route('books.publisher.show', $publisher));
});

Breadcrumbs::for('books.language', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Language'), route('books.language'));
});

Breadcrumbs::for('books.language.show', function ($trail, $language) {
    $trail->parent('books.language');
    $trail->push(__(strip_tags($language->name)), route('books.language.show', $language));
});

Breadcrumbs::for('books.sort.newest', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Sort By Newest'), route('books.sort.newest'));
});

Breadcrumbs::for('books.sort.oldest', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Sort By Oldest'), route('books.sort.oldest'));
});
Breadcrumbs::for('books.sort.titles_ascending', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Sort By Title Ascending'), route('books.sort.titles_ascending'));
});
Breadcrumbs::for('books.sort.titles_descending', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Sort By Title Descending'), route('books.sort.titles_descending'));
});

Breadcrumbs::for('books.search', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Search'), route('books.search'));
});

Breadcrumbs::for('books.advanced_search', function ($trail) {
    $trail->parent('books');
    $trail->push(__('Advanced Search'), route('books.advanced_search'));
});

Breadcrumbs::for('videos.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Video'), route('videos.index'));
});

//Breadcrumbs::for('videos', function ($trail, $video) {
//
//    $vid = \App\Models\Videos\Video::find($video->first()->parent_id);
////dd($vid->title);
//    $trail->parent('videos.index');
//
//    foreach ($vid->parent as $ancestor) {
//        dd($vid->parent);
//        $trail->push($ancestor->title, route('videos', $ancestor->id));
//    }
//
//    $trail->push($vid->title, route('videos', $vid->id));
//});

//Breadcrumbs::for('videos', function ($trail, $video) {
////    $vid = \App\Models\Videos\Video::find($video->first()->parent_id);
//    $vid = $video->first();
////    dd($vid);
//    if ($vid->parent) {
//        $trail->parent('videos', $vid->parent);
//    } else {
//        $trail->parent('videos.index');
//    }
//
//    $trail->push($vid->title, route('videos.topics.show', $vid->id));
//});