<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $book->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $book->title !!}</p>
</div>

<!-- Sort Field -->
<div class="form-group">
    {!! Form::label('sort', 'Sort:') !!}
    <p>{!! $book->sort !!}</p>
</div>

<!-- Timestamp Field -->
<div class="form-group">
    {!! Form::label('timestamp', 'Timestamp:') !!}
    <p>{!! $book->timestamp !!}</p>
</div>

<!-- Pubdate Field -->
<div class="form-group">
    {!! Form::label('pubdate', 'Pubdate:') !!}
    <p>{!! $book->pubdate !!}</p>
</div>

<!-- Series Index Field -->
<div class="form-group">
    {!! Form::label('series_index', 'Series Index:') !!}
    <p>{!! $book->series_index !!}</p>
</div>

<!-- Author Sort Field -->
<div class="form-group">
    {!! Form::label('author_sort', 'Author Sort:') !!}
    <p>{!! $book->author_sort !!}</p>
</div>

<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('isbn', 'Isbn:') !!}
    <p>{!! $book->isbn !!}</p>
</div>

<!-- Lccn Field -->
<div class="form-group">
    {!! Form::label('lccn', 'Lccn:') !!}
    <p>{!! $book->lccn !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:') !!}
    <p>{!! $book->path !!}</p>
</div>

<!-- Flags Field -->
<div class="form-group">
    {!! Form::label('flags', 'Flags:') !!}
    <p>{!! $book->flags !!}</p>
</div>

<!-- Uuid Field -->
<div class="form-group">
    {!! Form::label('uuid', 'Uuid:') !!}
    <p>{!! $book->uuid !!}</p>
</div>

<!-- Has Cover Field -->
<div class="form-group">
    {!! Form::label('has_cover', 'Has Cover:') !!}
    <p>{!! $book->has_cover !!}</p>
</div>

<!-- Last Modified Field -->
<div class="form-group">
    {!! Form::label('last_modified', 'Last Modified:') !!}
    <p>{!! $book->last_modified !!}</p>
</div>

