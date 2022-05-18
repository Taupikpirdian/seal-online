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
        <span>Refine</span>
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
                Refine
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#intro" role="tab" data-toggle="tab">Intro Refine</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gift" role="tab" data-toggle="tab">Resiko Pembuatan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#take" role="tab" data-toggle="tab">Hasil Refine</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="intro">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/refine/create')}}" class="btn btn-primary">Menambahkan Data Intro Refine</a>
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
                                <a title="Edit" href='{{URL::action("Admin\RefineController@edit",array($intro->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\RefineController@show",array($intro->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro->id}}" action='{{URL::action("Admin\RefineController@destroy",array($intro->id))}}' method="POST">
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
                        <a href="{{URL::to('/refine/create-risk')}}" class="btn btn-primary">Menambahkan Data Resiko Pembuatan</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($refine_risks as $i=>$refine_risk)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {!! $refine_risk->desc !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\RefineController@editRisk",array($refine_risk->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\RefineController@show",array($refine_risk->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$refine_risk->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$refine_risk->id}}" action='{{URL::action("Admin\RefineController@destroy",array($refine_risk->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $refine_risks->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="take">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/refine/create-return')}}" class="btn btn-primary">Menambahkan Data Hasil Refine</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($refine_returns as $i=>$refine_return)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {!! $refine_return->desc !!} </td>	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\RefineController@editReturn",array($refine_return->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\RefineController@show",array($refine_return->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$refine_return->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$refine_return->id}}" action='{{URL::action("Admin\RefineController@destroy",array($refine_return->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $refine_returns->appends(request()->except('page'))->links() !!}
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