@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{!! route('users.index') !!}">User</a>
    </li>
    <li class="breadcrumb-item active">Change password</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit fa-lg"></i>
                        <strong>Change password</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::model($user, ['route' => ['change_password_update'], 'method' => 'post']) !!}

                        <div class="form-group col-sm-6">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password']) !!}
                            {!! Form::label('password_confirmation', 'Password confirmation:') !!}
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder'=>'Password confirmation']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('change_password') }}" class="btn btn-secondary">Cancel</a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection