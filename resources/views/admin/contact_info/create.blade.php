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
        <a href="{{URL::to('/contact-info/index')}}">Pengaturan Dasar</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Pengaturan Dasar</span>
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
              Create Rules
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\ContactInfoController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Nama Logo", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", '',['class' => 'form-control required', 'value' => (old('title')) ? old('title') : '', 'maxlength' => '15' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('tag_line')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("tag_line", "Tag Line", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("tag_line", '',['class' => 'form-control required', 'value' => (old('tag_line')) ? old('tag_line') : '', 'maxlength' => '35' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('tag_line')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("contact_info", "Contact Info", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("contact_info", '',['class' => 'form-control required', 'value' => (old('contact_info')) ? old('contact_info') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('contact_info')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("detail_classes", "Detail Classes", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("detail_classes", '',['class' => 'form-control required', 'value' => (old('detail_classes')) ? old('detail_classes') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('detail_classes')}}</span>
                  </div>
                </div>
                
                <div class="form-group clearfix {{ ($errors->first('link_forum')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("link_forum", "Link Forum Facebook", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("link_forum", '',['class' => 'form-control required', 'value' => (old('link_forum')) ? old('link_forum') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('link_forum')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('email')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("email", "Email", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("email", '',['class' => 'form-control required', 'value' => (old('email')) ? old('email') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('email')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('logo')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("logo", "Logo", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="logo" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('logo')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("copyright", "Copyright", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("copyright", '',['class' => 'form-control required', 'value' => (old('copyright')) ? old('copyright') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('copyright')}}</span>
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