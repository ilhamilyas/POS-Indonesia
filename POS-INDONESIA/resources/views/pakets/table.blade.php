<table class="table table-responsive" id="pakets-table">
    <thead>
        <tr>
            <th>Jenispaket</th>
        <th>Value</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pakets as $paket)
        <tr>
            <td>{!! $paket->jenispaket !!}</td>
            <td>{!! $paket->value !!}</td>
            <td>
                {!! Form::open(['route' => ['pakets.destroy', $paket->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pakets.show', [$paket->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pakets.edit', [$paket->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>