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
        <a href="{{URL::to('/background/index')}}">List Background</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Background</span>
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
            	{!! Form::model($running_text,['method'=>'put', 'files'=>'true', 'action'=>['Admin\RunningTextController@update',$running_text->id]]) !!}
                
                <div class="form-group clearfix {{ ($errors->first('title')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Title", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", null,['class' => 'form-control', 'value' => (old('title')) ? old('title') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('text')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("text", "Text", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("text", null,['class' => 'form-control', 'value' => (old('text')) ? old('text') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('text')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('title')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("url", "URL (Kosongkan jika tidak ada)", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("url", null,['class' => 'form-control', 'value' => (old('url')) ? old('url') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('url')}}</span>
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
  <!-- CkEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error=>{
          console.error(error);
      });                                             
  </script>
@endsection