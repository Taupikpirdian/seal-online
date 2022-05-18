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
        <span>List Event Seal</span>
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
                Event Seal
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/event-seal/create')}}" class="btn btn-primary">Menambahkan Data Event Seal</a>
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Acara</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($event_seals as $i=>$event_seal)
                        <tr>
                          <td>{{ ($event_seals->currentpage()-1) * $event_seals->perpage() + $i + 1 }}</td>
                          <td> {{ $event_seal->title }} </td>	         
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\EventSealController@edit",array($event_seal->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat List Event" href='{{URL::action("Admin\EventSealController@show",array($event_seal->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="Delete" href="#" onclick="document.getElementById('delete_role{{$event_seal->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$event_seal->id}}" action='{{URL::action("Admin\EventSealController@destroy",array($event_seal->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $event_seals->appends(request()->except('page'))->links() !!}
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