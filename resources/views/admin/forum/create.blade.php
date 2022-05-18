@extends('layouts.admin')

@section('content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>

  <div class="content-w">  
    <!--------------------
    START - Breadcrumbs
    -------------------->
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ url('admin-dashboard') }}">Admin Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{URL::to('/users')}}">List Users</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Forum</span>
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
              Create Forum
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\ForumController@store', 'files' => 'true']) !!}
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("name", "Nama Forum", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("name", '',['class' => 'form-control required', 'value' => (old('name')) ? old('name') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('name')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                      <input type="text" class="form-control" name="desc" maxlength="200" required/>
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('desc')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('link')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("link", "Link Forum", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("link", '',['class' => 'form-control required', 'value' => (old('link')) ? old('link') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('link')}}</span>
                  </div>
                </div>
                
                <div class="form-group clearfix {{ ($errors->first('color')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("color", "Warna Background Icon", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("color", '',['class' => 'colorpicker form-control required', 'value' => (old('color')) ? old('color') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('color')}}</span>
                  </div>
                </div>
                
                <div class="form-group clearfix {{ ($errors->first('icon')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("icon", "Icon Forum", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="icon" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('icon')}}</span>
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

  <script>
    $('.colorpicker').colorpicker({});
  </script>
@endsection