<table class="table table-responsive" id="pengirimen-table">
    <thead>
        <tr>
            <th>Berat</th>
        <th>Harga</th>
        <th>Nama Pelanggan</th>
        <th>Barang</th>
        <th>Jenis <Barang></Barang></th>
        <th>Jenis Paket</th>
        <th>Kode Pos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pengirimen as $pengiriman)
        <tr>
            <td>{!! $pengiriman->berat !!}</td>
            <td>{!! $pengiriman->harga !!}</td>
            <td>{!! $pengiriman->pelanggan->nama !!}</td>
            <td>{!! $pengiriman->barang->nama !!}</td>
            <td>{!! $pengiriman->jenisbarang->jenisbarang !!}</td>
            <td>{!! $pengiriman->paket->jenispaket !!}</td>
            <td>{!! $pengiriman->kantorcabang->namakantorcabang !!}</td>
            <td>
                {!! Form::open(['route' => ['pengirimen.destroy', $pengiriman->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pengirimen.show', [$pengiriman->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pengirimen.edit', [$pengiriman->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>