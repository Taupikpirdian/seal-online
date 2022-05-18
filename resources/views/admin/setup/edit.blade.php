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
        <a href="{{URL::to('/setup/index')}}">Setup Web</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Setup Web</span>
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
              Edit Setup Web
            </h6>
            <div class="element-box">
            	{!! Form::model($setup,['method'=>'put', 'files'=>'true', 'action'=>['Admin\SetupWebController@update',$setup->id]]) !!}
                
                <div class="form-group clearfix {{ ($errors->first('img_up')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_up", "Banner 1", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_up" class="form-control col-md-12">
                    <img src="{{ asset('/images/setup/'.$setup->img_up)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img_maintenance')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img_maintenance", "Banner 2", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img_maintenance" class="form-control col-md-12">
                    <img src="{{ asset('/images/setup/'.$setup->img_maintenance)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('background')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("background", "Background", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="background" class="form-control col-md-12">
                    <img src="{{ asset('/images/setup/'.$setup->background)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="user_group">Status Website</label>
                      <div class="form-group">
                        <select name="status" class="form-control">
                          <option value="" selected> Pilih Status </option>
                          <option value="up" @if($setup->status == "up") selected @endif> Up </option>
                          <option value="maintenance" @if($setup->status == "maintenance") selected @endif> Maintenance </option>
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