<div class="table-responsive-sm">
    <table class="table table-striped" id="possitions-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($possitions as $possition)
            <tr>
                <td>{{ $possition->title }}</td>
                <td>
                    {!! Form::open(['route' => ['possitions.destroy', $possition->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('possitions.show', [$possition->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('possitions.edit', [$possition->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>