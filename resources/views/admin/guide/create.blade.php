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
        <a href="{{URL::to('/guide/index')}}">Guide</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Guide</span>
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
              Create Guide
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\GuideController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Nama Guide", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", '',['class' => 'form-control required', 'value' => (old('title')) ? old('title') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
                  </div>
                </div>
                
                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Detail Guide", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", '',['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('desc')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('informasi_quest')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("informasi_quest", "Informasi Quest", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("informasi_quest", '',['class' => 'form-control required', 'value' => (old('informasi_quest')) ? old('informasi_quest') : '', 'id' => 'editor2']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('informasi_quest')}}</span>
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

  @section('js')
    <!-- CkEditor -->
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> --}}
    <!-- <script>
        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error=>{
            console.error(error);
        });
        $(document).ready(function(){
          CKEDITOR.replace( 'editor2' );
        });                       
    </script> -->

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
  @endsection
@endsection