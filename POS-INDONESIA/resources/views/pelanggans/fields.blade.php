<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass', 'Pass:') !!}
    {!! Form::text('pass', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pelanggans.index') !!}" class="btn btn-default">Cancel</a>
</div>
