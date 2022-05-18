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
        <span>Setup Web</span>
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
              Setup Web
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                  @if($countData > 0)
                  @else
                    <a href="{{URL::to('/setup-web/create')}}" class="btn btn-primary">Menambahkan Data</a>
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
                        <th>Banner 1</th>
                        <th>Banner 2</th>
                        <th>Background</th>
                        <th>Status</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($setups as $i=>$setup)
                        <tr>
                          <td> <img src="{{ asset('/images/setup/'.$setup->img_up)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> <img src="{{ asset('/images/setup/'.$setup->img_maintenance)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> <img src="{{ asset('/images/setup/'.$setup->background)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> </td>
                          <td> {{ $setup->status }} </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\SetupWebController@edit",array($setup->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$setup->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$setup->id}}" action='{{URL::action("Admin\SetupWebController@destroy",array($setup->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $setups->appends(request()->except('page'))->links() !!}
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