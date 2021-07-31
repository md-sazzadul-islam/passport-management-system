<div class="table-responsive-sm">
    <table class="table table-striped" id="selectionStatuses-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($selectionStatuses as $selectionStatus)
            <tr>
                <td>{{ $selectionStatus->title }}</td>
                <td>
                    {!! Form::open(['route' => ['selectionStatuses.destroy', $selectionStatus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('selectionStatuses.show', [$selectionStatus->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('selectionStatuses.edit', [$selectionStatus->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>