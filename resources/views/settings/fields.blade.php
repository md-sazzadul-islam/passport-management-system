<!-- App Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_name', 'App Name:') !!}
    {!! Form::text('app_name', null, ['class' => 'form-control']) !!}
</div>

<!-- App Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_title', 'App Title:') !!}
    {!! Form::text('app_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- App Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app_email', 'App Email:') !!}
    {!! Form::text('app_email', null, ['class' => 'form-control']) !!}
</div>

<!-- App Logo Field -->

<div class="form-group col-sm-6">
    {!! Form::label('app_logo', 'App Logo:') !!}
    {!! Form::file('app_logo') !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-secondary">Cancel</a>
</div>
