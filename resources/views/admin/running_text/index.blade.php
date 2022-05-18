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
        <span>Running Text</span>
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
                Running Text
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/running-text/create')}}" class="btn btn-primary">Menambahkan Running Text</a>
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
                        <th>Text</th>
                        <th>Url</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($running_texts as $i=>$running_text)
                        <tr>
                          <td> {{ $i + 1 }} </td>   
                          <td> {{ $running_text->title }} </td>   
                          <td> {{ $running_text->text }} </td>
                          <td> {{ $running_text->url }} </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\RunningTextController@edit",array($running_text->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$running_text->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$running_text->id}}" action='{{URL::action("Admin\RunningTextController@destroy",array($running_text->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $running_texts->appends(request()->except('page'))->links() !!}
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