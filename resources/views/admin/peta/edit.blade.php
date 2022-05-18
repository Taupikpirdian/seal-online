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
        <a href="{{URL::to('/peta/index')}}">List Peta</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Peta</span>
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
              Create Peta
            </h6>
            <div class="element-box">
              {!! Form::model($peta,['method'=>'put', 'files'=>'true', 'action'=>['Admin\PetaController@update',$peta->id]]) !!}
              
                <div class="form-group clearfix {{ ($errors->first('category')) ? 'has-error has-danger' : ''}}">
                  {{ Form::label("title", "Kategory", ['class' => 'col-md-2 control-label']) }}
                  <div class="col-md-12">
                    <select name="category" class="form-control">
                      <option value="0" {{ $peta->category == '0' ? 'selected' : ' ' }}>Peta Dunia Shilzt</option>
                      <option value="1" {{ $peta->category == '1' ? 'selected' : ' ' }}>Kota Dunia Shilzt</option>
                    </select>
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('category')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Judul", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="text" name="title" value="{{ $peta->title }}" class="form-control" id="">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <textarea name="desc" id="editor" class="form-control" cols="30" rows="10">{!! str_limit($peta->deskripsi) !!}</textarea>
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('deskripsi')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" value="{{ $peta->img }}" class="form-control col-md-12">
                  </div>
                </div>

                <div class='form-group'>
                  <div class='col-md-4 col-md-offset-2'>
                    <button class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Save</button>
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