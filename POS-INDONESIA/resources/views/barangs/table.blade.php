<table class="table table-responsive" id="barangs-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>Tujuan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($barangs as $barang)
        <tr>
            <td>{!! $barang->nama !!}</td>
            <td>{!! $barang->Tujuan !!}</td>
            <td>
                {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('barangs.show', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('barangs.edit', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>