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
        <a href="{{URL::to('/game-master/index')}}">List Game Master</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Game Master</span>
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
              Create Game Master
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\GameMasterController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('nama')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("nama", "Nama", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("nama", '',['class' => 'form-control required', 'value' => (old('nama')) ? old('nama') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('nama')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('umur')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("umur", "Umur", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("umur", '',['class' => 'form-control required', 'value' => (old('umur')) ? old('umur') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('umur')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('alamat')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("alamat", "Alamat", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("alamat", '',['class' => 'form-control required', 'value' => (old('alamat')) ? old('alamat') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('alamat')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('hobi')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("hobi", "Hobi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("hobi", '',['class' => 'form-control required', 'value' => (old('hobi')) ? old('hobi') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('hobi')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('favorit_pet')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("favorit_pet", "Pet Favorit", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("favorit_pet", '',['class' => 'form-control required', 'value' => (old('favorit_pet')) ? old('favorit_pet') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('favorit_pet')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('favorit_warna')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("favorit_warna", "Warna Favorit", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("favorit_warna", '',['class' => 'form-control required', 'value' => (old('favorit_warna')) ? old('favorit_warna') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('favorit_warna')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('reputasi')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("reputasi", "Reputasi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("reputasi", '',['class' => 'form-control required', 'value' => (old('reputasi')) ? old('reputasi') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('reputasi')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('motto')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("motto", "Motto", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("motto", '',['class' => 'form-control required', 'value' => (old('motto')) ? old('motto') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('motto')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
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

  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
  <script>
      CKEDITOR.replace('editor', {
          filebrowserUploadUrl: "{{route('post.image.ckeditor', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });    
  </script>
@endsection