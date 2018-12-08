<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $kantorcabang->id !!}</p>
</div>

<!-- Namakantorcabang Field -->
<div class="form-group">
    {!! Form::label('namakantorcabang', 'Namakantorcabang:') !!}
    <p>{!! $kantorcabang->namakantorcabang !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{!! $kantorcabang->alamat !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $kantorcabang->deleted_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $kantorcabang->updated_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $kantorcabang->created_at !!}</p>
</div>

