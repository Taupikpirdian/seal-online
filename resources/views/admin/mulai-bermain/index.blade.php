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
        <span>Mulai Bermain</span>
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
                Mulai Bermain
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#intro" role="tab" data-toggle="tab">Intro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#client" role="tab" data-toggle="tab">Client Seal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#karakter" role="tab" data-toggle="tab">Karakter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#in_game" role="tab" data-toggle="tab">Dalam Game</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kontrol" role="tab" data-toggle="tab">Kontrol</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#teman" role="tab" data-toggle="tab">Berteman</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#lain" role="tab" data-toggle="tab">Lain-lain</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="intro">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create')}}" class="btn btn-primary">Menambahkan Data Intro</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($intros as $i=>$intro)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {!! $intro->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@edit",array($intro->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($intro->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($intro->id))}}' method="POST">
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
                  
                  <div role="tabpanel" class="tab-pane fade" id="client">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-client')}}" class="btn btn-primary">Menambahkan Data Client</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($clients as $i=>$client)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $client->sub_category }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editClient",array($client->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($client->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$client->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$client->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($client->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $clients->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="karakter">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-karakter')}}" class="btn btn-primary">Menambahkan Data Karakter</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($karakters as $i=>$karakter)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $karakter->sub_category }} </td>	        
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editKarakter",array($karakter->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($karakter->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$karakter->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$karakter->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($karakter->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $karakters->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="in_game">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-in-game')}}" class="btn btn-primary">Menambahkan Data Dalam Game</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($in_games as $i=>$in_game)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $in_game->sub_category }} </td>	          
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editInGame",array($in_game->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($in_game->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$in_game->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$in_game->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($in_game->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $in_games->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="kontrol">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-kontrol')}}" class="btn btn-primary">Menambahkan Data Kontrol</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($kontrols as $i=>$kontrol)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $kontrol->sub_category }} </td>	 	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editKontrol",array($kontrol->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($kontrol->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$kontrol->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$kontrol->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($kontrol->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $kontrols->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="teman">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-teman')}}" class="btn btn-primary">Menambahkan Data Berteman</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($temans as $i=>$teman)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $teman->sub_category }} </td>         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editTeman",array($teman->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($teman->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$teman->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$teman->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($teman->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $temans->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="lain">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/mulai-bermain/create-lain-lain')}}" class="btn btn-primary">Menambahkan Data Lain-Lain</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Sub Kategori</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($lains as $i=>$lain)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $lain->sub_category }} </td> 	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\MulaiBermainController@editLain",array($lain->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\MulaiBermainController@show",array($lain->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$lain->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$lain->id}}" action='{{URL::action("Admin\MulaiBermainController@destroy",array($lain->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $lains->appends(request()->except('page'))->links() !!}
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