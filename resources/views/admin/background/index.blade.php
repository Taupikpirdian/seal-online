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
        <span>List Background</span>
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
                Background
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                  @if($countDataBackground > 0)
                  @else
                    <a href="{{URL::to('/background/create')}}" class="btn btn-primary">Menambahkan Data Background</a>
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
                        <th>Slider</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($backgrounds as $i=>$background)
                        <tr>
                          <td> 
                            <img src="{{ asset('/images/background/'.$background->img)}}"> 
                          </td>           
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\BackgroundController@edit",array($background->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$background->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$background->id}}" action='{{URL::action("Admin\BackgroundController@destroy",array($background->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $backgrounds->appends(request()->except('page'))->links() !!}
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