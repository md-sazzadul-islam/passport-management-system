<div class="table-responsive-sm">
    <table class="table table-striped" id="payments-table">
        <thead>
            <tr>
                <th>Total Amount</th>
                <th>Passport no</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->total_amount }}</td>
                <td>{{ (isset($payment->passportjoin->passport_no)?$payment->passportjoin->passport_no:'None') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>