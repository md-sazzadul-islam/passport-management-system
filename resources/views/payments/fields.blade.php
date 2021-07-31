<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::select('passport', $passport, null, ['class' => 'form-control', 'placeholder' => 'Please Select Passport']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-secondary">Cancel</a>
</div>
