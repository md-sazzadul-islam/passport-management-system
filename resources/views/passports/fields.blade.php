<!-- Passport Holder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport_holder', 'Passport Holder:') !!}
    {!! Form::text('passport_holder', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>

<!-- Holder Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('holder_father_name', 'Holder Father Name:') !!}
    {!! Form::text('holder_father_name', null, ['class' => 'form-control','maxlength' => 100]) !!}
</div>

<!-- Passport No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport_no', 'Passport No:') !!}
    {!! Form::text('passport_no', null, ['class' => 'form-control','minlength' => 6,'maxlength' => 100]) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::select('position', $position, null, ['class' => 'form-control', 'placeholder' => 'Please Position']) !!}
</div>

<!-- Issue Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_date', 'Issue Date:') !!}
    {!! Form::text('issue_date', null, ['class' => 'form-control','id'=>'issue_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#issue_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    {!! Form::text('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#expiry_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    {!! Form::text('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date_of_birth').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Mobile No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile_no', 'Mobile No:') !!}
    {!! Form::text('mobile_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Selection Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('selection_status', 'Selection Status:') !!}
    {!! Form::select('selection_status', $selectionStatus, null, ['class' => 'form-control', 'placeholder' => 'Please Selection Status']) !!}
</div>

<!-- Medical Issue Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_issue_date', 'Medical Issue Date:') !!}
    {!! Form::text('medical_issue_date', null, ['class' => 'form-control','id'=>'medical_issue_date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#medical_issue_date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Medical Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_status', 'Medical Status:') !!}
    {!! Form::select('medical_status', $medicalStatus, null, ['class' => 'form-control', 'placeholder' => 'Please Select Medical Status']) !!}
</div>

<!-- Medical Report Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medical_report', 'Medical Report:') !!}
    {!! Form::select('medical_report', $medicalReport ,null, ['class' => 'form-control', 'placeholder' => 'Please Select Medical Report']) !!}
</div>

<!-- Reference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference', 'Reference:') !!}
    {!! Form::select('reference', $reference, null, ['class' => 'form-control', 'placeholder' => 'Please Reference']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Agent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agent', 'Agent:') !!}
    {!! Form::select('agent', $agent, null, ['class' => 'form-control', 'placeholder' => 'Please Agent']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::textarea('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('passports.index') }}" class="btn btn-secondary">Cancel</a>
</div>
