<!-- Jenisbarang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenisbarang', 'Jenisbarang:') !!}
    {!! Form::text('jenisbarang', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jenisbarangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
