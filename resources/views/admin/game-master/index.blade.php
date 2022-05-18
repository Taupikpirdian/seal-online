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
        <span>List Game Master</span>
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
                Game Master
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#single" role="tab" data-toggle="tab">List Game Master</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#part" role="tab" data-toggle="tab">Intro</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="single">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/game-master/create')}}" class="btn btn-primary">Menambahkan Data Game Master</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($game_masters as $i=>$game_master)
                            <tr>
                              <td>{{ ($game_masters->currentpage()-1) * $game_masters->perpage() + $i + 1 }}</td>
                              <td> {{ $game_master->nama }} </td>	         
                              <td> {{ $game_master->umur }} </td>	         
                              <td> {{ $game_master->alamat }} </td>
                              <td> 
                                <img src="{{ asset('/images/game-master/'.$game_master->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;">
                              </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\GameMasterController@edit",array($game_master->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\GameMasterController@show",array($game_master->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$game_master->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$game_master->id}}" action='{{URL::action("Admin\GameMasterController@destroy",array($game_master->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $game_masters->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="part">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/intro-game-master/create')}}" class="btn btn-primary">Menambahkan Data</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($intro_game_masters as $i=>$intro_game_master)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $intro_game_master->title }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\IntroGameMasterController@edit",array($intro_game_master->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\IntroGameMasterController@show",array($intro_game_master->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro_game_master->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro_game_master->id}}" action='{{URL::action("Admin\IntroGameMasterController@destroy",array($intro_game_master->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $intro_game_masters->appends(request()->except('page'))->links() !!}
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