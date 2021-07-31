@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('medicalStatuses.index') !!}">Medical Status</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Medical Status</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($medicalStatus, ['route' => ['medicalStatuses.update', $medicalStatus->id], 'method' => 'patch']) !!}

                              @include('medical_statuses.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection