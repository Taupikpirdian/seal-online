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
        <a href="{{URL::to('/download/index')}}">List Download</a>
      </li>
      <li class="breadcrumb-item">
        <span>Create Download Part</span>
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
              Create Download Part
            </h6>
            <div class="element-box">
              {!! Form::open(['action' => 'Admin\PartDownloadController@store', 'files' => 'true']) !!}

                <div class="form-group clearfix {{ ($errors->first('part')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("part", "Part Ke", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("part", '',['class' => 'form-control required', 'value' => (old('part')) ? old('part') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('part')}}</span>
                  </div>
                </div>

                <div class="form-group clearfix {{ ($errors->first('link')) ? 'has-error has-danger' : '' }}">
                  {{ Form::label("link", "Link", ['class' => 'col-md-2 control-label']) }}
                  <div class='col-md-12'>
                    {{ Form::text("link", '',['class' => 'form-control required', 'value' => (old('link')) ? old('link') : '' ]) }}
                    <span class="help-block form-text with-errors form-control-feedback">{{$errors->first('link')}}</span>
                  </div>
                </div>

                <div class='form-group'>
                  <div class='col-md-4 col-md-offset-2'>
                    <button class='btn btn-primary' type='submit'><span class='glyphicon glyphicon-save'></span> Save</button>
                  </div>
                </div>
              {!! Form::close() !!}    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection