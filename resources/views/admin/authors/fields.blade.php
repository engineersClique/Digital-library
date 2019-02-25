<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::textarea('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Sort Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('sort', 'Sort:') !!}
    {!! Form::textarea('sort', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::textarea('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.authors.index') !!}" class="btn btn-default">Cancel</a>
</div>
