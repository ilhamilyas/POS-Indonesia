<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pengiriman->id !!}</p>
</div>

<!-- Berat Field -->
<div class="form-group">
    {!! Form::label('berat', 'Berat:') !!}
    <p>{!! $pengiriman->berat !!}</p>
</div>

<!-- Harga Field -->
<div class="form-group">
    {!! Form::label('harga', 'Harga:') !!}
    <p>{!! $pengiriman->harga !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $pengiriman->deleted_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pengiriman->updated_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pengiriman->created_at !!}</p>
</div>

<!-- Pelanggan Id Field -->
<div class="form-group">
    {!! Form::label('pelanggan_id', 'Nama Pelanggan:') !!}
    <p>{!! $pengiriman->pelanggan->nama !!}</p>
</div>

<!-- Barang Id Field -->
<div class="form-group">
    {!! Form::label('barang_id', 'Barang:') !!}
    <p>{!! $pengiriman->barang->nama !!}</p>
</div>

<!-- Jenisbarang Id Field -->
<div class="form-group">
    {!! Form::label('jenisbarang_id', 'Jenisbarang Id:') !!}
    <p>{!! $pengiriman->jenisbarang->jenisbarang !!}</p>
</div>

<!-- Paket Id Field -->
<div class="form-group">
    {!! Form::label('paket_id', 'Jenis Barang:') !!}
    <p>{!! $pengiriman->paket->jenispaket !!}</p>
</div>

<!-- Kantorcabang Id Field -->
<div class="form-group">
    {!! Form::label('kantorcabang_id', 'Kode Pos:') !!}
    <p>{!! $pengiriman->kantorcabang->namakantorcabang !!}</p>
</div>

