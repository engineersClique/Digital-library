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

<!-- Type Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::textarea('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Val Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('val', 'Val:') !!}
    {!! Form::textarea('val', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.identifiers.index') !!}" class="btn btn-default">Cancel</a>
</div>
