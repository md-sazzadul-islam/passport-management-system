@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Passports</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i>
                        Passports
                        <a class="pull-right" href="{{ route('passports.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">
                                {!! Form::open(['route' => 'passports.index', 'method' => 'GET']) !!}
                                <div class="customfilter">
                                    {!! Form::select('searchable', $searchable, null, ['class' => 'form-control', 'placeholder' => 'Select Search field']) !!}
                                </div>
                                <div class="customfilter">
                                    {!! Form::text('search_value', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="customfilter">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                </div>
                                <div class="customfilter">
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @include('passports.table')
                        <div class="pull-right mr-3">
                            {{ $passports->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection