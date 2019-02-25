<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Format Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('format', 'Format:') !!}
    {!! Form::textarea('format', null, ['class' => 'form-control']) !!}
</div>

<!-- Book Field -->
<div class="form-group col-sm-6">
    {!! Form::label('book', 'Book:') !!}
    {!! Form::number('book', null, ['class' => 'form-control']) !!}
</div>

<FileData Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('data', 'File') !!}
    {!! Form::textarea('data', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.conversionOptions.index') !!}" class="btn btn-default">Cancel</a>
</div>
