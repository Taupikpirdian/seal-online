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
        <span>Pet</span>
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
                Pet
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#intro" role="tab" data-toggle="tab">Intro Pet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#seed" role="tab" data-toggle="tab">Pet Seed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#piya" role="tab" data-toggle="tab">Pet Piya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#bird" role="tab" data-toggle="tab">Pet Bird</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#heaven" role="tab" data-toggle="tab">Pet Heaven</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="intro">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/pet/create')}}" class="btn btn-primary">Menambahkan Data Intro Pet</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pet_intros as $i=>$pet_intro)
                            <tr>
                              <td> {!! $pet_intro->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PetController@edit",array($pet_intro->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\PetController@show",array($pet_intro->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$pet_intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$pet_intro->id}}" action='{{URL::action("Admin\PetController@destroy",array($pet_intro->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $pet_intros->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="seed">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/pet/create-seed')}}" class="btn btn-primary">Menambahkan Data Pet Seed</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pet_seeds as $i=>$pet_seed)
                            <tr>
                              <td> {!! $pet_seed->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PetController@editSeed",array($pet_seed->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\PetController@show",array($pet_seed->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$pet_seed->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$pet_seed->id}}" action='{{URL::action("Admin\PetController@destroy",array($pet_seed->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $pet_seeds->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="piya">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/pet/create-piya')}}" class="btn btn-primary">Menambahkan Data Pet Piya</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pet_piyas as $i=>$pet_piya)
                            <tr>
                              <td> {!! $pet_piya->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PetController@editPiya",array($pet_piya->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\PetController@show",array($pet_piya->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$pet_piya->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$pet_piya->id}}" action='{{URL::action("Admin\PetController@destroy",array($pet_piya->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $pet_piyas->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="bird">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/pet/create-bird')}}" class="btn btn-primary">Menambahkan Data Pet Bird</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pet_birds as $i=>$pet_bird)
                            <tr>
                              <td> {!! $pet_bird->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PetController@editBird",array($pet_bird->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\PetController@show",array($pet_bird->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$pet_bird->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$pet_bird->id}}" action='{{URL::action("Admin\PetController@destroy",array($pet_bird->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $pet_birds->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="heaven">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/pet/create-heaven')}}" class="btn btn-primary">Menambahkan Data Pet Heaven</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($pet_heavens as $i=>$pet_heaven)
                            <tr>
                              <td> {!! $pet_heaven->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PetController@editHeaven",array($pet_heaven->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\PetController@show",array($pet_heaven->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$pet_heaven->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$pet_heaven->id}}" action='{{URL::action("Admin\PetController@destroy",array($pet_heaven->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $pet_heavens->appends(request()->except('page'))->links() !!}
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