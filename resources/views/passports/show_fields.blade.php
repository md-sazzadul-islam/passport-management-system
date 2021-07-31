<!-- Passport Holder Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('passport_holder', 'Passport Holder:') !!}</strong>
    <p>{{ $passport->passport_holder }}</p>
</div>

<!-- Holder Father Name Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('holder_father_name', 'Holder Father Name:') !!}</strong>
    <p>{{ $passport->holder_father_name }}</p>
</div>

<!-- Passport No Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('passport_no', 'Passport No:') !!}</strong>
    <p>{{ $passport->passport_no }}</p>
</div>

<!-- Position Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('position', 'Position:') !!}</strong>
    <p>{{ (isset($passport->possitionjoin->title)?$passport->possitionjoin->title:'None') }}</p>
</div>

<!-- Issue Date Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('issue_date', 'Issue Date:') !!}</strong>
    <p>{{ $passport->issue_date }}</p>
</div>

<!-- Expiry Date Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('expiry_date', 'Expiry Date:') !!}</strong>
    <p>{{ $passport->expiry_date }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('date_of_birth', 'Date Of Birth:') !!}</strong>
    <p>{{ $passport->date_of_birth }}</p>
</div>

<!-- Mobile No Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('mobile_no', 'Mobile No:') !!}</strong>
    <p>{{ $passport->mobile_no }}</p>
</div>

<!-- Selection Status Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('selection_status', 'Selection Status:') !!}</strong>
    <p>{{ (isset($passport->selectionStatusjoin->title)?$passport->selectionStatusjoin->title:'None') }}</p>
</div>

<!-- Medical Issue Date Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('medical_issue_date', 'Medical Issue Date:') !!}</strong>
    <p>{{ $passport->medical_issue_date }}</p>
</div>

<!-- Medical Status Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('medical_status', 'Medical Status:') !!}</strong>
    <p>{{ (isset($passport->medicalStatusjoin->title)?$passport->medicalStatusjoin->title:'None') }}</p>
</div>

<!-- Medical Report Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('medical_report', 'Medical Report:') !!}</strong>
    <p>{{ (isset($passport->medicalReportjoin->title)?$passport->medicalReportjoin->title:'None') }}</p>
</div>

<!-- Reference Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('reference', 'Reference:') !!}</strong>
    <p>{{ (isset($passport->referencejoin->name)?$passport->referencejoin->name:'None') }}</p>
</div>

<!-- Company Name Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('company_name', 'Company Name:') !!}</strong>
    <p>{{ $passport->company_name }}</p>
</div>

<!-- Agent Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('agent', 'Agent:') !!}</strong>
    <p>{{ (isset($passport->agentjoin->title)?$passport->agentjoin->title:'None') }}</p>
</div>

<!-- Remarks Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('remarks', 'Remarks:') !!}</strong>
    <p>{{ $passport->remarks }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('created_at', 'Created At:') !!}</strong>
    <p>{{ $passport->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    <strong>{!! Form::label('updated_at', 'Updated At:') !!}</strong>
    <p>{{ $passport->updated_at }}</p>
</div>

