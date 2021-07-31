<div class="table-responsive-sm">
    <table class="table table-striped" id="references-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($references as $reference)
            <tr>
                <td>{{ $reference->name }}</td>
            <td>{{ $reference->phone }}</td>
            <td>{{ $reference->address }}</td>
                <td>
                    {!! Form::open(['route' => ['references.destroy', $reference->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('references.show', [$reference->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('references.edit', [$reference->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>