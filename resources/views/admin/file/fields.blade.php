<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Book Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book', 'Book:') !!}
    {!! Form::number('book', null, ['class' => 'form-control']) !!}
</div>

<!-- Format Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('format', 'Format:') !!}
    {!! Form::textarea('format', null, ['class' => 'form-control']) !!}
</div>

<!-- Uncompressed Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uncompressed_size', 'Uncompressed Size:') !!}
    {!! Form::number('uncompressed_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::textarea('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.file.index') !!}" class="btn btn-default">Cancel</a>
</div>
