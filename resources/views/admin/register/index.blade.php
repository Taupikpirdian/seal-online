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
        <span>Konten Register</span>
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
              Konten Register
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                  @if($countData > 0)
                  @else
                    <a href="{{URL::to('/content-register/create')}}" class="btn btn-primary">Menambahkan Data</a>
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
                        <th>Title</th>
                        <th>Background</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $i=>$data)
                        <tr>
                          <td> {!! str_limit($data->title, 500) !!}</td>
                          <td> <img src="{{ asset('/images/register/'.$data->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\ContentRegisterController@edit",array($data->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Detail" href='{{URL::action("Admin\ContentRegisterController@show",array($data->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$data->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$data->id}}" action='{{URL::action("Admin\ContentRegisterController@destroy",array($data->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $datas->appends(request()->except('page'))->links() !!}
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