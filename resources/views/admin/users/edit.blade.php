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
        <a href="{{URL::to('/user/index')}}">List Users</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Users</span>
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
              Edit User
            </h6>
            <div class="element-box">
            	{!! Form::model($user,['method'=>'put', 'files'=>'true', 'action'=>['Admin\UserController@update',$user->id]]) !!}
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("name", "Nama", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-4'>
                    {{ Form::text("name", null,['class' => 'form-control required', 'value' => (old('name')) ? old('name') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('name')}}</span>
                  </div>
                </div>
                <div class="form-group clearfix {{ ($errors->first('email')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("email", "Alamat Email", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-4'>
                    {{ Form::email("email", null,['class' => 'form-control required', 'value' => (old('email')) ? old('email') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('email')}}</span>
                  </div>
                </div>
                <div class="form-group  clearfix">
                <label for="password" class="col-md-2 control-label">{{ __('Password') }}</label>
                  <div class="col-md-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group  clearfix">
                  <label for="password-confirm" class="col-md-2 control-label">{{ __('Confirm Password') }}</label>
                  <div class="col-md-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
                <div class="form-group clearfix">
                  {{ Form::label("profile_picture", "Profile Picture", ['class' => 'col-md-2 control-label']) }}
                  <div class="col-sm-4">
                    <input type="file" name ="profile_picture" class="form-control col-md-12">
                    <span class="error">{{$errors->first('profile_picture')}}</span>
                  </div>
                  <div class="col-sm-4">
                    <img alt="" height="150px" src="{{ asset('images/user_profiles/'.$user->profile_picture) }}">
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