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
        <span>Pacaran</span>
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
                Pacaran
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#intro" role="tab" data-toggle="tab">Intro Pacaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gift" role="tab" data-toggle="tab">Hadiah Pacaran</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#take" role="tab" data-toggle="tab">Mengambil Hadiah</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="intro">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/dating/create')}}" class="btn btn-primary">Menambahkan Data Intro Pacaran</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Desc</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($intros as $i=>$intro)
                            <tr>
                              <td> {!! $intro->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\DatingController@edit",array($intro->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro->id}}" action='{{URL::action("Admin\DatingController@destroy",array($intro->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $intros->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="gift">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/dating/create-dating')}}" class="btn btn-primary">Menambahkan Data Hadiah Pacaran</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($dating_gifts as $i=>$dating_gift)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $dating_gift->title }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\DatingController@editDating",array($dating_gift->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\DatingController@show",array($dating_gift->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$dating_gift->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$dating_gift->id}}" action='{{URL::action("Admin\DatingController@destroyDating",array($dating_gift->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $dating_gifts->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="take">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/dating/create-gift')}}" class="btn btn-primary">Menambahkan Data Hadiah Pacaran</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($take_gifts as $i=>$take_gift)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $take_gift->title }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\DatingController@edit",array($take_gift->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$take_gift->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$take_gift->id}}" action='{{URL::action("Admin\DatingController@destroy",array($take_gift->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $take_gifts->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                </div>
                <!-- Tabs navs -->
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