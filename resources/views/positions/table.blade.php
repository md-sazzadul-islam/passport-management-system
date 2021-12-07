<div class="table-responsive-sm">
    <table class="table table-striped" id="positions-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($positions as $position)
            <tr>
                <td>{{ $position->title }}</td>
                <td>
                    {!! Form::open(['route' => ['positions.destroy', $position->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('positions.show', [$position->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('positions.edit', [$position->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>