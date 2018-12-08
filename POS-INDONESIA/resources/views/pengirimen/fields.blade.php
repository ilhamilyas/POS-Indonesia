<!-- Berat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('berat', 'Berat:') !!}
    {!! Form::text('berat', null, ['class' => 'form-control']) !!}
</div>

<!-- Harga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('harga', 'Harga:') !!}
    {!! Form::text('harga', null, ['class' => 'form-control']) !!}
</div>

<!-- Pelanggan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelanggan_id', 'Pelanggan Id:') !!}
    {!! Form::number('pelanggan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Barang Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barang_id', 'Barang Id:') !!}
    {!! Form::number('barang_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenisbarang Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenisbarang_id', 'Jenisbarang Id:') !!}
    {!! Form::number('jenisbarang_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Paket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paket_id', 'Paket Id:') !!}
    {!! Form::number('paket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kantorcabang Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kantorcabang_id', 'Kantorcabang Id:') !!}
    {!! Form::number('kantorcabang_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pengirimen.index') !!}" class="btn btn-default">Cancel</a>
</div>
