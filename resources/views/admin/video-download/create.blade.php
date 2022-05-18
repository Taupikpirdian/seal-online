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
        <a href="{{URL::to('/video-download/index')}}">Video</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Video</span>
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
              Create Video
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\VideoDownloadController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Judul", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", '',['class' => 'form-control required', 'value' => (old('title')) ? old('title') : '', 'required' => 'required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", '',['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('desc')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('video_name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("video_name", "Nama Video", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("video_name", '',['class' => 'form-control required', 'value' => (old('video_name')) ? old('video_name') : '', 'required' => 'required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('video_name')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("url", "URL Youtube Embed", ['class' => 'col-md-4 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("url", '',['class' => 'form-control required', 'value' => (old('url')) ? old('url') : '', 'required' => 'required', 'placeholder' => 'Contoh: http://www.youtube.com/embed/W7qWa52k-nE']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('url')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("size", "Ukuran Video (MB)", ['class' => 'col-md-4 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("size", '',['class' => 'form-control required', 'value' => (old('size')) ? old('size') : '', 'required' => 'required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('size')}}</span>
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
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
  <script>
      ClassicEditor
      .create(document.querySelector('#editor'))
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

@endsection