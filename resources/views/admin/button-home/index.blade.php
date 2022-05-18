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
        <span>List Button Home</span>
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
                Button Home
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/button-home/create')}}" class="btn btn-primary">Menambahkan Data</a>
                  </div>
                  <div class="col-md-6 pull-left">
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Caption</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($buttonHomes as $i=>$buttonHome)
                        <tr>
                          <td>{{ $i + 1 }}</td>
                          <td> {{ $buttonHome->caption }} </td>   
                          <td> {{ $buttonHome->link }} </td>
                          <td> <img src="{{ asset('/images/button-home/'.$buttonHome->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> {{ $buttonHome->position }} </td>
                          <td> {{ $buttonHome->status }} </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\HomeButtonController@edit",array($buttonHome->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$buttonHome->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$buttonHome->id}}" action='{{URL::action("Admin\HomeButtonController@destroy",array($buttonHome->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $buttonHomes->appends(request()->except('page'))->links() !!}
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