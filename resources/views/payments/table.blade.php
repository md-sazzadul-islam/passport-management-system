<div class="table-responsive-sm">
    <table class="table table-striped" id="payments-table">
        <thead>
            <tr>
                <th>Amount</th>
                <th>Passport no</th>
                <th>Date</th>
                <th>Note</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->amount }}</td>
                <td>{{ (isset($payment->passportjoin->passport_no)?$payment->passportjoin->passport_no:'None') }}</td>
                <td>{{ $payment->date }}</td>
                <td>{{ $payment->note }}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>