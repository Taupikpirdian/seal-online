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
        <span>Update Seal - {{ $title }}</span>
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
              Update Seal - {{ $title }}
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to($url)}}" class="btn btn-primary">Menambahkan Data</a>
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
                        <th>Title</th>
                        <th>Image</th>
                        <th>Sub Kategori</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($datas as $i=>$data)
                        <tr>
                          <td>{{ ($datas->currentpage()-1) * $datas->perpage() + $i + 1 }}</td>
                          <td> {{ str_limit($data->title, 500) }}</td>
                          <td> <img src="{{ asset('/images/update-part/'.$data->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> {{ $sub_category[$data->sub_category] }}</td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\UpdateSealPartController@edit",array($data->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Detail" href='{{URL::action("Admin\UpdateSealPartController@show",array($data->id))}}'><i class="fa fa-eye"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$data->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$data->id}}" action='{{URL::action("Admin\UpdateSealPartController@destroy",array($data->id))}}' method="POST">
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