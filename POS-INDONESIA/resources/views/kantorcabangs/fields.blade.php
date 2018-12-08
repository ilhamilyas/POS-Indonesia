<!-- Namakantorcabang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namakantorcabang', 'Namakantorcabang:') !!}
    {!! Form::text('namakantorcabang', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('kantorcabangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
