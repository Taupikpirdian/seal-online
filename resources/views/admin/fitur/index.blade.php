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
        <span>List Fitur</span>
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
                Fitur
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/fitur/create')}}" class="btn btn-primary">Menambahkan Data Fitur</a>
                  </div>
                  <div class="col-md-6 pull-left">
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($fiturs as $i=>$fitur)
                        <tr class="text-center">
                          <td>{{ ($fiturs->currentpage()-1) * $fiturs->perpage() + $i + 1 }}</td>
                          <td>{{ $fitur->title }} </td>         
                          <td> 
                            <img src="{{ asset('/images/fitur/'.$fitur->img)}}" style="width: 30%"> 
                          </td>   
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\FiturController@edit",array($fitur->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Detail" href='{{URL::action("Admin\FiturController@show",array($fitur->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$fitur->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$fitur->id}}" action='{{URL::action("Admin\FiturController@destroy",array($fitur->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $fiturs->appends(request()->except('page'))->links() !!}
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