<!-- Amount Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('amount', 'Amount:') !!}</strong>
    <p>{{ $payment->amount }}</p>
</div>

<!-- Passport Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('passport', 'Passport no:') !!}</strong>
    <p>{{ (isset($payment->passportjoin->passport_no)?$payment->passportjoin->passport_no:'None') }}</p>
</div>

<!-- Date Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('date', 'Date:') !!}</strong>
    <p>{{ $payment->date }}</p>
</div>

<!-- Note Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('note', 'Note:') !!}</strong>
    <p>{{ $payment->note }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('created_at', 'Created At:') !!}</strong>
    <p>{{ $payment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('updated_at', 'Updated At:') !!}</strong>
    <p>{{ $payment->updated_at }}</p>
</div>

