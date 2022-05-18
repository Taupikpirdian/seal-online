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
        <span>Bale Monster</span>
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
                Bale Monster
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#single" role="tab" data-toggle="tab">Intro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#part" role="tab" data-toggle="tab">Bale Monster</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="single">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/intro-bale/create')}}" class="btn btn-primary">Menambahkan Data Intro</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Jenis</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($intro_bales as $i=>$intro_bale)
                            <tr>
                              <td>{{ $i + 1 }}</td>
                              @if($intro_bale->type == 0)
                              <td> Bale </td>
                              @else
                              <td> Bos Bale </td>
                              @endif	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BaleMonsterController@editIntro",array($intro_bale->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BaleMonsterController@showIntro",array($intro_bale->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role_intro_bale{{$intro_bale->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role_intro_bale{{$intro_bale->id}}" action='{{URL::action("Admin\BaleMonsterController@destroyIntro",array($intro_bale->id))}}' method="POST">
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
                  
                  <div role="tabpanel" class="tab-pane fade" id="part">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/bale-monster/create')}}" class="btn btn-primary">Menambahkan Data Bale Monster</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Monster</th>
                            <th>Jenis</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Level</th>
                            <th>Elemet</th>
                            <th>HP</th>
                            <th>ATK</th>
                            <th>DEF</th>
                            <th>Item</th>
                            <th>Deskripsi</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($monster_bales as $i=>$monster_bale)
                            <tr>
                              <td>{{ $i+1 }}</td>
                              <td> {{ $monster_bale->name }} </td>	 
                              @if($monster_bale->type == 0)
                              <td> Bale </td>
                              @else
                              <td> Bos Bale </td>
                              @endif	        
                              <td> <img src="{{ asset('/images/bale/'.$monster_bale->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>           
                              <td> {{ $monster_bale->lokasi }} </td>           
                              <td> {{ $monster_bale->level }} </td>           
                              <td> {{ $monster_bale->elemen }} </td>           
                              <td> {{ $monster_bale->hp }} </td>           
                              <td> {{ $monster_bale->atk }} </td>           
                              <td> {{ $monster_bale->def }} </td>           
                              <td> {{ $monster_bale->item_drop }} </td>
                              <td> {!! str_limit($monster_bale->deskripsi, 100) !!} </td>
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BaleMonsterController@edit",array($monster_bale->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BaleMonsterController@show",array($monster_bale->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$monster_bale->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$monster_bale->id}}" action='{{URL::action("Admin\BaleMonsterController@destroy",array($monster_bale->id))}}' method="POST">
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