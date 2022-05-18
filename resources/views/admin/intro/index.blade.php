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
        <span>Pengenalan Seal</span>
      </li>
		</ul>
		<!--------------------
		END - Breadcrumbs
		-------------------->
		<div class="content-i">
      <div class="content-box">
        <div class="row">
          <div class="col-sm-12">
            <div class="element-wrapper">
              <h5 class="element-header">
              Pengenalan Seal
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                  @if($countData > 0)
                  @else
                    <a href="{{URL::to('/intro/create')}}" class="btn btn-primary">Menambahkan Data</a>
                  @endif
                  </div>
                  <div class="col-md-6 pull-left">
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Tentang Seal</th>
                        <th>Gambar Tentang Seal</th>
                        <th>Latar Cerita Seal</th>
                        <th>Gambar Cerita Seal</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($intros as $i=>$intro)
                        <tr>
                          <td> {!! str_limit($intro->about_seal, 500) !!}</td>
                          <td> <img src="{{ asset('/images/intro/'.$intro->img_about)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> {!! str_limit($intro->story_seal, 500) !!}</td>
                          <td> <img src="{{ asset('/images/intro/'.$intro->img_story)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\IntroController@edit",array($intro->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Detail" href='{{URL::action("Admin\IntroController@show",array($intro->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$intro->id}}" action='{{URL::action("Admin\IntroController@destroy",array($intro->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $intros->appends(request()->except('page'))->links() !!}
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script>
	$( document ).ready(function() {
		var message = '{{session('flash-error')}}';
		if(message!=''){
			alert('{{session('flash-error')}}');
		}
	})
</script>
@endsection