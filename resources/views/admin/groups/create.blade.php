@extends('layouts.admin')

@section('content')
  <div class="content-w">  
    <!--------------------
    START - Breadcrumbs
    -------------------->
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin-dashboard') }}">Admin Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ url('groups/index') }}">List Groups</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Group</span>
      </li>
    </ul>
    <!--------------------
    END - Breadcrumbs
    -------------------->
    
    <div class="content-i">
      <div class="content-box">
        <div class="col-lg-12">
          <div class="element-wrapper">
            <h6 class="element-header">
              Create Group
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\GroupController@store']) !!}
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("name", "Group", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-4'>
                    {{ Form::text("name", '',['class' => 'form-control required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('name')}}</span>
                  </div>
                </div> 
                <div class='form-group'>
                  <div class='col-md-4 col-md-offset-2'>
                    <button class='btn btn-primary' type='submit' name='save' id='save'><span class='glyphicon glyphicon-save'></span> Save</button>
                  </div>
                </div>
              {!! Form::close() !!}    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection