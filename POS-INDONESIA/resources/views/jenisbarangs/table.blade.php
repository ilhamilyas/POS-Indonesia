<table class="table table-responsive" id="jenisbarangs-table">
    <thead>
        <tr>
            <th>Jenisbarang</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jenisbarangs as $jenisbarang)
        <tr>
            <td>{!! $jenisbarang->jenisbarang !!}</td>
            <td>
                {!! Form::open(['route' => ['jenisbarangs.destroy', $jenisbarang->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jenisbarangs.show', [$jenisbarang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jenisbarangs.edit', [$jenisbarang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>