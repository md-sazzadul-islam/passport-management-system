<div class="table-responsive-sm">
    <table class="table table-striped" id="medicalReports-table">
        <thead>
            <tr>
                <th>Title</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicalReports as $medicalReport)
            <tr>
                <td>{{ $medicalReport->title }}</td>
                <td>
                    {!! Form::open(['route' => ['medicalReports.destroy', $medicalReport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('medicalReports.show', [$medicalReport->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('medicalReports.edit', [$medicalReport->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>