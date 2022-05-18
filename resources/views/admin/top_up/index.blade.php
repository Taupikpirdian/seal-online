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
        <span>List Top Up</span>
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
                Top Up
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/top-up/create')}}" class="btn btn-primary">Menambahkan cara top up</a>
                  </div>
                  <div class="col-md-6 pull-left">
                    {!! Form::open(['method'=>'GET','url'=>'searchtop-up','role'=>'search'])  !!}
                      <div class='form-group clearfix'>
                        <div class='col-md-12'>
                          <div class="input-group custom-search-form">
                            <input type="text" class="form-control form-control-sm rounded bright" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                              <span class="input-group-btn">
                                <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-search"></i></button>
                              </span>
                            </span>
                          </div>
                        </div>
                      </div>
                    {!! Form::close() !!}
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th><b>Judul</b></th>
                        <th><b>Gambar</b></th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($top_ups as $i=>$top_up)
                        <tr>
                          <td>{{$start_page}}</td>
                          <td> {{ $top_up->title }} </td>
                          <td> <img src="{{ asset('/images/topup/'.$top_up->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>	         
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\TopUpController@edit",array($top_up->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat Detail" href='{{URL::action("Admin\TopUpController@show",array($top_up->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$top_up->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$top_up->id}}" action='{{URL::action("Admin\TopUpController@destroy",array($top_up->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                        <?php $start_page = $start_page+1 ?>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $top_ups->appends(request()->except('page'))->links() !!}
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