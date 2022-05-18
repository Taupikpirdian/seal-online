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
        <a href="{{URL::to('/intro/index')}}">List Pengenalan</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Pengenalan</span>
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
              Create Pengenalan
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\IntroController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('about_seal')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("about_seal", "Tentang Seal", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("about_seal", '',['class' => 'form-control required', 'value' => (old('about_seal')) ? old('about_seal') : '', 'id' => 'editor' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('about_seal')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img_about')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_about", "Gambar Tentang Seal", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_about" class="form-control col-md-12">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('story_seal')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("story_seal", "Cerita Seal", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("story_seal", '',['class' => 'form-control required', 'value' => (old('story_seal')) ? old('story_seal') : '', 'id' => 'editor2' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('story_seal')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img_story')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_story", "Gambar Cerita Seal", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_story" class="form-control col-md-12">
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
@endsection