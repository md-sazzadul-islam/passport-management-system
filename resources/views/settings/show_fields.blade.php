<!-- App Name Field -->
<div class="form-group">
    {!! Form::label('app_name', 'App Name:') !!}
    <p>{{ $setting->app_name }}</p>
</div>

<!-- App Title Field -->
<div class="form-group">
    {!! Form::label('app_title', 'App Title:') !!}
    <p>{{ $setting->app_title }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $setting->address }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $setting->phone }}</p>
</div>

<!-- App Email Field -->
<div class="form-group">
    {!! Form::label('app_email', 'App Email:') !!}
    <p>{{ $setting->app_email }}</p>
</div>

<!-- App Logo Field -->
<div class="form-group">
    {!! Form::label('app_logo', 'App Logo:') !!}
    <img src="{{ asset('/storage/'. $setting->app_logo ) }}" width="30" height="40">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $setting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $setting->updated_at }}</p>
</div>

