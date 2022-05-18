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
        <a href="{{URL::to('/button-home/index')}}">List Button Home</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Button Home</span>
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
              Create Button Home
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\HomeButtonController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('caption')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("caption", "Caption", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("caption", '',['class' => 'form-control', 'value' => (old('caption')) ? old('caption') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('caption')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('link')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("link", "Link", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("link", '',['class' => 'form-control', 'value' => (old('link')) ? old('link') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('link')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Image", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="user_group">Position</label>
                      <div class="form-group">
                        <select name="position" class="form-control">
                          <option value="" selected> Pilih Posisi </option>
                          <option value="left"> Left </option>
                          <option value="right"> Right </option>
                        </select>
                      </div>
                      @error('position')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="user_group">Status</label>
                      <div class="form-group">
                        <select name="status" class="form-control">
                          <option value="" selected> Pilih Status </option>
                          <option value="publish"> Publish </option>
                          <option value="draf"> Draf </option>
                        </select>
                      </div>
                      @error('position')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                      @enderror
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

  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
  <script>
      CKEDITOR.replace('editor', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    
  </script>
@endsection