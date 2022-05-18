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
        <a href="{{URL::to('/user/index')}}">List Users</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Users</span>
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
            	{!! Form::model($iklan,['method'=>'put', 'files'=>'true', 'action'=>['Admin\IklanController@update',$iklan->id]]) !!}
                
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Judul", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", null,['class' => 'form-control required', 'value' => (old('title')) ? old('title') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('link')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("link", "Link", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("link", null,['class' => 'form-control required', 'value' => (old('link')) ? old('link') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('link')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('status')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("status", "Status Publish", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-4'>
                    {{ Form::select('status', $status, null,['class' => 'form-control select2 required']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('status')}}</span>
                  </div>
                </div> 

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
                    <img src="{{ asset('/images/iklan/'.$iklan->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
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