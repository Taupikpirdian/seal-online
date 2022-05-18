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
        <a href="{{URL::to('/installation/index')}}">Installation</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Installation</span>
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
              Edit Installation
            </h6>
            <div class="element-box">
            	{!! Form::model($data,['method'=>'put', 'files'=>'true', 'action'=>['Admin\InstallationController@update',$data->id]]) !!}
                
                <div class="form-group clearfix {{ ($errors->first('intro')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("intro", "Intro", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("intro", null,['class' => 'form-control required', 'value' => (old('intro')) ? old('intro') : '', 'id' => 'editor' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('intro')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                    <img src="{{ asset('/images/installation/'.$data->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('spec')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("spec", "Spesifikasi Minimal", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("spec", null,['class' => 'form-control required', 'value' => (old('spec')) ? old('spec') : '', 'id' => 'editor2' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('spec')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('step_by_step')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("step_by_step", "Cara Installasi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("step_by_step", null,['class' => 'form-control required', 'value' => (old('step_by_step')) ? old('step_by_step') : '', 'id' => 'editor3' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('step_by_step')}}</span>
                  </div>
                </div>
                
                <div class='form-group'>
                  <div class='col-md-4 col-md-offset-2'>
                    <button class='btn btn-primary' type='submit'><span class='glyphicon glyphicon-save'></span> Save</button>
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
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error=>{
          console.error(error);
      });                                             
  </script>

  <script>
      ClassicEditor
      .create(document.querySelector('#editor2'))
      .catch(error=>{
          console.error(error);
      });                                             
  </script>

  <script>
      ClassicEditor
      .create(document.querySelector('#editor3'))
      .catch(error=>{
          console.error(error);
      });                                             
  </script> -->

    <!-- CkEditor -->
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
  <script>
      CKEDITOR.replace('editor', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    
  </script>

  <script>
      CKEDITOR.replace('editor2', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    
  </script>

  <script>
      CKEDITOR.replace('editor3', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    
  </script>
@endsection