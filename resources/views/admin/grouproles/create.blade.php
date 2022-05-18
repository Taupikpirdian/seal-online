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
        <a href="{{URL::to('/group-roles')}}">List Group Roles</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Group Role</span>
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
              Create Group Role
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\GroupRoleController@store']) !!}
                <div class="form-group clearfix {{ ($errors->first('group_id')) ? 'has-error has-danger' : '' }}">
                    {{ Form::label("group_id", "Group", ['class' => 'col-md-2 control-label']) }}
                    <div class='col-md-4'>
                      {{ Form::select('group_id', $groups, null,['class' => 'form-control required']) }}
                      <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('group_id')}}</span>
                    </div>
                </div> 
                <div class="form-group clearfix {{ ($errors->first('role_id')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("role_id", "Role", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-4'>
                    {{ Form::select('role_id', $roles, null,['class' => 'form-control select2 required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('role_id')}}</span>
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