<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Sort Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('sort', 'Sort:') !!}
    {!! Form::textarea('sort', null, ['class' => 'form-control']) !!}
</div>

<!-- Pubdate Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pubdate', 'Pubdate:') !!}
    {!! Form::textarea('pubdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Series Index Field -->
<div class="form-group col-sm-6">
    {!! Form::label('series_index', 'Series Index:') !!}
    {!! Form::number('series_index', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Sort Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('author_sort', 'Author Sort:') !!}
    {!! Form::textarea('author_sort', null, ['class' => 'form-control']) !!}
</div>

<!-- Isbn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isbn', 'Isbn:') !!}
    {!! Form::textarea('isbn', null, ['class' => 'form-control']) !!}
</div>

<!-- Lccn Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lccn', 'Lccn:') !!}
    {!! Form::textarea('lccn', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::textarea('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Flags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flags', 'Flags:') !!}
    {!! Form::number('flags', null, ['class' => 'form-control']) !!}
</div>

<!-- Uuid Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uuid', 'Uuid:') !!}
    {!! Form::textarea('uuid', null, ['class' => 'form-control']) !!}
</div>

<!-- Has Cover Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('has_cover', 'Has Cover:') !!}
    {!! Form::textarea('has_cover', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.books.index') !!}" class="btn btn-default">Cancel</a>
</div>
