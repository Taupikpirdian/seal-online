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
        <a href="{{URL::to('/profesi/index')}}">List Profesi & Skill</a>
      </li>
      <li class="breadcrumb-item">
        <span>Skill Level</span>
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
                Skill Level
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/skill-level/create/'.$skill->id)}}" class="btn btn-primary">Menambahkan Data Level</a>
                  </div>
                  <br>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <tr>
                        <td>Nama Skill</td>
                        <td>
                        {{ $skill->skill_name }}
                        </td>
                      </tr>
                      <tr>
                        <td>Keterangan</td>
                        <td>
                        {{ $skill->ket }}
                        </td>
                      </tr>
                      <tr>
                        <td>Syarat</td>
                        <td>
                        {{ $skill->syarat }}
                        </td>
                      </tr>
                      <tr>
                        <td>Detail</td>
                        <td>
                        {!! $skill->desc !!}
                        </td>
                      </tr>
                      <tr>
                        <td width="200px">Gambar</td>
                        <td>
                          <img src="{{ asset('/images/skill/'.$skill->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> 
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
                        <th>Level</th>
                        <th>Skill Point</th>
                        <th>ATK</th>
                        <th>Pemakaian AP</th>
                        <th>Jarak</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($skill_levels as $i=>$skill_level)
                        <tr>
                          <td>{{ $i + 1 }}</td>
                          <td> {{ $skill_level->lv }} </td>      
                          <td> {{ $skill_level->skill_point }} </td>      
                          <td> {{ $skill_level->atk }} </td>      
                          <td> {{ $skill_level->pemakaian_ap }} </td>      
                          <td> {{ $skill_level->jarak }} </td>      
                          <td class='text-center'>
                            <a title="Delete" href="#" onclick="document.getElementById('delete_role{{$skill_level->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$skill_level->id}}" action='{{URL::action("Admin\SkillLevelController@destroy",array($skill_level->id))}}' method="POST">
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