<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Key Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::textarea('key', null, ['class' => 'form-control']) !!}
</div>

<!-- Val Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('val', 'Val:') !!}
    {!! Form::textarea('val', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.preferences.index') !!}" class="btn btn-default">Cancel</a>
</div>
