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
        <a href="{{URL::to('/event-seal/index')}}">List Event Seal</a>
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
                Halaman List Event Seal
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/event-seal-detail/create/'.$event_seal->id)}}" class="btn btn-primary">Menambahkan Data List Event</a>
                  </div>
                  <br>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <tr>
                        <td>Judul</td>
                        <td>
                        {{ $event_seal->title }}
                        </td>
                      </tr>
                      <tr>
                        <td>Detail</td>
                        <td>
                        {!! $event_seal->desc !!}
                        </td>
                      </tr>
                      <tr>
                        <td width="200px">Gambar</td>
                        <td>
                          <img src="{{ asset('/images/event-seal/'.$event_seal->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> 
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <br>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Detail</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($event_seal_lists as $i=>$event_seal_list)
                        <tr>
                          <td>{{ $i + 1 }}</td>
                          <td> {{ $event_seal_list->title }} </td>                
                          <td> {!! str_limit($event_seal_list->desc, 100) !!} </td>
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\EventSealListController@edit",array($event_seal_list->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Delete" href="#" onclick="document.getElementById('delete_role{{$event_seal_list->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$event_seal_list->id}}" action='{{URL::action("Admin\EventSealListController@destroy",array($event_seal_list->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
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