@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{!! route('settings.index') !!}">Setting</a>
    </li>
    <li class="breadcrumb-item active">Create</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-plus-square-o fa-lg"></i>
                        <strong>Create Setting</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'settings.store','files'=>'true']) !!}
                        <div class="row">
                            @include('settings.fields')
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection