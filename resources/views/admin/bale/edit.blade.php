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
        <a href="{{URL::to('/bale-monster/index')}}">List Bale Monster</a>
      </li>
      <li class="breadcrumb-item">
        <span>Edit Bale Monster</span>
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
              Edit Bale Monster
            </h6>
            <div class="element-box">
            	{!! Form::model($bale_monster,['method'=>'put', 'files'=>'true', 'action'=>['Admin\BaleMonsterController@update',$bale_monster->id]]) !!}
                <div class="form-group clearfix {{ ($errors->first('name')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("name", "Nama Monster", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("name", null,['class' => 'form-control required', 'value' => (old('name')) ? old('name') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('name')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('tag_line')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("category", "Kategori", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::select('category', $category, $bale_monster->type,['class' => 'form-control select2 required', 'placeholder' => 'Pilih Kategori']) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('category')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('img')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("img", "Gambar", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    <input type="file" name ="img" class="form-control col-md-12">
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('img')}}</span>
                    <img src="{{ asset('/images/bale/'.$bale_monster->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('lokasi')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("lokasi", "Lokasi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("lokasi", null,['class' => 'form-control required', 'value' => (old('lokasi')) ? old('lokasi') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('lokasi')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('level')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("level", "Level", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("level", null,['class' => 'form-control required', 'value' => (old('level')) ? old('level') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('level')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('elemen')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("elemen", "Elemen", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("elemen", null,['class' => 'form-control required', 'value' => (old('elemen')) ? old('elemen') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('elemen')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('hp')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("hp", "HP", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("hp", null,['class' => 'form-control required', 'value' => (old('hp')) ? old('hp') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('hp')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('atk')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("atk", "ATK", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("atk", null,['class' => 'form-control required', 'value' => (old('atk')) ? old('atk') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('atk')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('def')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("def", "DEF", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::number("def", null,['class' => 'form-control required', 'value' => (old('def')) ? old('def') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('def')}}</span>
                  </div>
                </div>
                
                <div class="form-group clearfix {{ ($errors->first('item_drop')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("item_drop", "Item Drop", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("item_drop", null,['class' => 'form-control required', 'value' => (old('item_drop')) ? old('item_drop') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('item_drop')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('desc')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("desc", "Deskripsi", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::textarea("desc", $bale_monster->deskripsi,['class' => 'form-control required', 'value' => (old('desc')) ? old('desc') : '', 'id' => 'editor']) }}
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