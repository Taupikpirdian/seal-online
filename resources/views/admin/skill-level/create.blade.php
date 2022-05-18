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
        <span>Create Skill Level</span>
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
              Create Skill Level
            </h6>
            <div class="element-box">
            	{!! Form::model($id,['method'=>'post', 'files'=>'true', 'action'=>['Admin\SkillLevelController@store',$id]]) !!}

                <div class="form-group clearfix {{ ($errors->first('lv')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("lv", "Level", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("lv", '',['class' => 'form-control required', 'value' => (old('lv')) ? old('lv') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('lv')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('skill_point')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("skill_point", "Skill Point", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("skill_point", '',['class' => 'form-control required', 'value' => (old('skill_point')) ? old('skill_point') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('skill_point')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('atk')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("atk", "ATK", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("atk", '',['class' => 'form-control required', 'value' => (old('atk')) ? old('atk') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('atk')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('pemakaian_ap')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("pemakaian_ap", "Pemakaian AP", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("pemakaian_ap", '',['class' => 'form-control required', 'value' => (old('pemakaian_ap')) ? old('pemakaian_ap') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('pemakaian_ap')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('jarak')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("jarak", "Jarak", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("jarak", '',['class' => 'form-control required', 'value' => (old('jarak')) ? old('jarak') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('jarak')}}</span>
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