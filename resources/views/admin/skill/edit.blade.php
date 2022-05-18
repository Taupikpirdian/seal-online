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
        <a href="{{URL::to('/profesi/index')}}">List Profesi & Skill</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Skill</span>
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
              Edit Skill
            </h6>
            <div class="element-box">
            	{!! Form::model($skill,['method'=>'put', 'files'=>'true', 'action'=>['Admin\SkillController@update',$skill->id]]) !!}

                <div class="form-group clearfix {{ ($errors->first('skill_name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("skill_name", "Nama Skill", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("skill_name", null,['class' => 'form-control required', 'value' => (old('skill_name')) ? old('skill_name') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('skill_name')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('ket')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("ket", "Keterangan", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("ket", null,['class' => 'form-control required', 'value' => (old('ket')) ? old('ket') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('ket')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('syarat')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("syarat", "Syarat", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("syarat", null,['class' => 'form-control required', 'value' => (old('syarat')) ? old('syarat') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('syarat')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", null,['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('desc')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                    <img src="{{ asset('/images/skill/'.$skill->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
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