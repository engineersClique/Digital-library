<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $file->id !!}</p>
</div>

<!-- Book Field -->
<div class="form-group">
    {!! Form::label('book', 'Book:') !!}
    <p>{!! $file->book !!}</p>
</div>

<!-- Format Field -->
<div class="form-group">
    {!! Form::label('format', 'Format:') !!}
    <p>{!! $file->format !!}</p>
</div>

<!-- Uncompressed Size Field -->
<div class="form-group">
    {!! Form::label('uncompressed_size', 'Uncompressed Size:') !!}
    <p>{!! $file->uncompressed_size !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $file->name !!}</p>
</div>

