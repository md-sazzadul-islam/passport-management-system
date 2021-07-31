@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('selectionStatuses.index') !!}">Selection Status</a>
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
                              <strong>Edit Selection Status</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($selectionStatus, ['route' => ['selectionStatuses.update', $selectionStatus->id], 'method' => 'patch']) !!}

                              @include('selection_statuses.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection