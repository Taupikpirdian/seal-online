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
        <span>List Users</span>
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
                Users
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/user/create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> create</a>
                  </div>
                  <div class="col-md-6 pull-left">
                    {!! Form::open(['method'=>'GET','url'=>'search-users','role'=>'search'])  !!}
                      <div class='form-group clearfix'>
                        <div class='col-md-12'>
                          <div class="input-group custom-search-form">
                            <input type="text" class="form-control form-control-sm rounded bright" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                              <span class="input-group-btn">
                                <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-search"></i> Search</button>
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
                        <th><b>User</b></th>
                        <th><b>Email</b></th>
                        <th><b>Groups</b></th>
                        <th><b>Foto</b></th>
                        <th class='text-center'>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $i=>$user)
                        <tr>
                          <td>{{$start_page}}</td>
                          <td> {{ $user->name }} </td>
                          <td> {{ $user->email }} </td>	         
                          <td>
                            @foreach($user->groups as $key => $user_group)
                              @if($key > 0)
                                , 
                              @endif
                              {{ $user_group->name }}
                            @endforeach
                          </td>
                          <td> <img src="{{ asset('/images/user_profiles/thumbs/'.$user->profile_picture)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td> 
                          <td class='text-center'>
                            <a href='{{URL::action("Admin\UserController@edit",array($user->id))}}'><i class="fa fa-pencil"></i> edit</a>
                            <!-- <a href='{{URL::action("Admin\UserController@show",array($user->id))}}'>show</a> --> 
                            <!-- | -->
                            <!-- <a href="#" onclick="document.getElementById('delete_role{{$user->id}}').submit();"><i class="fa fa-trash"></i> delete</a> -->
                            <form id="delete_role{{$user->id}}" action='{{URL::action("Admin\UserController@destroy",array($user->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                        <?php $start_page = $start_page+1 ?>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $users->appends(request()->except('page'))->links() !!}
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