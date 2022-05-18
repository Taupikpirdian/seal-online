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
        <span>List Forum</span>
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
                Forum
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/forum/create')}}" class="btn btn-primary">Menambahkan data forum</a>
                  </div>
                  <div class="col-md-6 pull-left">
                    {!! Form::open(['method'=>'GET','url'=>'searchforum','role'=>'search'])  !!}
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
                        <th><b>Name</b></th>
                        <th><b>Icon</b></th>
                        <th><b>Warna</b></th>
                        <th><b>Link</b></th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($forums as $i=>$forum)
                        <tr>
                          <td>{{$start_page}}</td>
                          <td> {{ $forum->name }} </td>
                          <td> <img src="{{ asset('/images/forum/'.$forum->icon)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>          
                          <td style="background-color:{{ $forum->color }};"> </td>
                          <td> {{ $forum->link }} </td>	         
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\ForumController@edit",array($forum->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat Detail" href='{{URL::action("Admin\ForumController@show",array($forum->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$forum->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$forum->id}}" action='{{URL::action("Admin\ForumController@destroy",array($forum->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                        <?php $start_page = $start_page+1 ?>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $forums->appends(request()->except('page'))->links() !!}
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