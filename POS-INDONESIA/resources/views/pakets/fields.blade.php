<!-- Jenispaket Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenispaket', 'Jenispaket:') !!}
    {!! Form::text('jenispaket', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pakets.index') !!}" class="btn btn-default">Cancel</a>
</div>
