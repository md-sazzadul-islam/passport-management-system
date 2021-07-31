<div class="table-responsive-sm">
    <table class="table table-striped" id="passports-table">
        <thead>
            <tr>
                <th>Passport Holder</th>
                <th>Passport No</th>
                <th>Position</th>
                <th>Mobile No</th>
                <th>Selection Status</th>
                <th>Medical Status</th>
                <th>Medical Report</th>
                <th>Reference</th>
                <th>Agent</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($passports as $passport)
            <tr>
                <td>{{ $passport->passport_holder }}</td>
                <td>{{ $passport->passport_no }}</td>
                <td>{{ (isset($passport->possitionjoin->title)?$passport->possitionjoin->title:'None') }}</td>
                <td>{{ $passport->mobile_no }}</td>
                <td>{{ (isset($passport->selectionStatusjoin->title)?$passport->selectionStatusjoin->title:'None') }}</td>
                <td>{{ (isset($passport->medicalStatusjoin->title)?$passport->medicalStatusjoin->title:'None') }}</td>
                <td>{{ (isset($passport->medicalReportjoin->title)?$passport->medicalReportjoin->title:'None') }}</td>
                <td>{{ (isset($passport->referencejoin->name)?$passport->referencejoin->name:'None') }}</td>
                <td>{{ (isset($passport->agentjoin->title)?$passport->agentjoin->title:'None') }}</td>
                <td>
                    {!! Form::open(['route' => ['passports.destroy', $passport->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('passports.show', [$passport->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('passports.edit', [$passport->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>