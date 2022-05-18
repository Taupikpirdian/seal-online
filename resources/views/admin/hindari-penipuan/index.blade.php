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
        <span>List Hindari Penipuan</span>
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
                Hindari Penipuan
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#single" role="tab" data-toggle="tab">List Penipuan</a>
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
                        <a href="{{URL::to('/hindari-penipuan/create')}}" class="btn btn-primary">Menambahkan Data Penipuan</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($hindari_penipuans as $i=>$hindari_penipuan)
                            <tr>
                              <td>{{ ($hindari_penipuans->currentpage()-1) * $hindari_penipuans->perpage() + $i + 1 }}</td>
                              <td> {{ $hindari_penipuan->title }} </td>	         
                              <td> {!! str_limit($hindari_penipuan->desc, 500) !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\HindariPenipuanController@edit",array($hindari_penipuan->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\HindariPenipuanController@show",array($hindari_penipuan->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$hindari_penipuan->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$hindari_penipuan->id}}" action='{{URL::action("Admin\HindariPenipuanController@destroy",array($hindari_penipuan->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $hindari_penipuans->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="part">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/intro-hindari-penipuan/create')}}" class="btn btn-primary">Menambahkan Data</a>
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
                          @foreach($intro_hindari_penipuans as $i=>$intro_hindari_penipuan)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $intro_hindari_penipuan->title }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\IntroHindariPenipuanController@edit",array($intro_hindari_penipuan->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\IntroHindariPenipuanController@show",array($intro_hindari_penipuan->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro_hindari_penipuan->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro_hindari_penipuan->id}}" action='{{URL::action("Admin\IntroHindariPenipuanController@destroy",array($intro_hindari_penipuan->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $intro_hindari_penipuans->appends(request()->except('page'))->links() !!}
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