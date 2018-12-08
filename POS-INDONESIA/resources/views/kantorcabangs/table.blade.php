<table class="table table-responsive" id="kantorcabangs-table">
    <thead>
        <tr>
            <th>Namakantorcabang</th>
        <th>Alamat</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($kantorcabangs as $kantorcabang)
        <tr>
            <td>{!! $kantorcabang->namakantorcabang !!}</td>
            <td>{!! $kantorcabang->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['kantorcabangs.destroy', $kantorcabang->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('kantorcabangs.show', [$kantorcabang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('kantorcabangs.edit', [$kantorcabang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>