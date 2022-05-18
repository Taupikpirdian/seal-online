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
        <a href="{{URL::to('/dating/index')}}">Pacaran</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit {{ $title }}</span>
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
              Edit {{ $title }}
            </h6>
            <div class="element-box">
            	{!! Form::model($intro,['method'=>'put', 'files'=>'true', 'action'=>['Admin\DatingController@update',$intro->id]]) !!}

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", null,['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('desc')}}</span>
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
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
  <script>
      CKEDITOR.replace('editor', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    

      // CKEDITOR.replace( 'editor', {
      //   extraPlugins: 'imageuploader'
      // });                                       
  </script>
@endsection