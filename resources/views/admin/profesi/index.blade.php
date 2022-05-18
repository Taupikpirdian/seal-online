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
        <span>List Profesi & Skill</span>
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
                Profesi & Skill
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#single" role="tab" data-toggle="tab">Skill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#part" role="tab" data-toggle="tab">Profesi</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="single">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/skill/create')}}" class="btn btn-primary">Menambahkan Data Skill</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Skill</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($skills as $i=>$skill)
                            <tr>
                              <td>{{ ($skills->currentpage()-1) * $skills->perpage() + $i + 1 }}</td>
                              <td> {{ $skill->skill_name }} </td>	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\SkillController@edit",array($skill->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail + Tambah Skill Level" href='{{URL::action("Admin\SkillController@show",array($skill->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$skill->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$skill->id}}" action='{{URL::action("Admin\SkillController@destroy",array($skill->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $skills->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="part">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/profesi/create')}}" class="btn btn-primary">Menambahkan Data Profesi</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Profesi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($profesis as $i=>$profesi)
                            <tr>
                              <td>{{ ($profesis->currentpage()-1) * $profesis->perpage() + $i + 1 }}</td>
                              <td> {{ $profesi->title }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\ProfesiController@edit",array($profesi->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\ProfesiController@show",array($profesi->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$profesi->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$profesi->id}}" action='{{URL::action("Admin\ProfesiController@destroy",array($profesi->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $profesis->appends(request()->except('page'))->links() !!}
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