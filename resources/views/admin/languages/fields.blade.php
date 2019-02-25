<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Code Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('lang_code', 'Lang Code:') !!}
    {!! Form::textarea('lang_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.languages.index') !!}" class="btn btn-default">Cancel</a>
</div>
