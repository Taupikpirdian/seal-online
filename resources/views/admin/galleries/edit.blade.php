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
        <a href="{{URL::to('/gallery/index')}}">List Gallery</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Gallery</span>
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
            	{!! Form::model($gallery,['method'=>'put', 'files'=>'true', 'action'=>['Admin\GalleryController@update',$gallery->id]]) !!}
                
                <div class="form-group clearfix {{ ($errors->first('img_medium')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_medium", "800x600", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_medium" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
                    <img src="{{ asset('/images/gallery/800/'.$gallery->img_medium)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img_height')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_height", "1024x768", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_height" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
                    <img src="{{ asset('/images/gallery/1024/'.$gallery->img_height)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('tag_line')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("category", "Kategori", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::select('category', $category, null,['class' => 'form-control select2 required', 'placeholder' => 'Pilih Kategori']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('category')}}</span>
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