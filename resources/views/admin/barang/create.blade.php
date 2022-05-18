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
        <a href="{{URL::to('/barang/index')}}">Barang</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create {{ $title }}</span>
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
              Create {{ $title }}
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\BarangController@store', 'files' => 'true']) !!}

                <input type="text" name="category" value="{{ $type }}" style="display: none">

                @if($type == 'Intro')
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("title", "Judul", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("title", '',['class' => 'form-control required', 'value' => (old('title')) ? old('title') : '']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('title')}}</span>
                  </div>
                </div>
                @else
                <div class="form-group clearfix {{ ($errors->first('tag_line')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("sub_category", "Sub Kategori", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::select('sub_category', $sub_category, null,['class' => 'form-control select2 required', 'placeholder' => 'Pilih Sub Kategori']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('category_id')}}</span>
                  </div>
                </div>
                @endif

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", '',['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
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