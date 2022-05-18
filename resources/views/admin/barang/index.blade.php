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
        <span>Barang</span>
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
                Barang
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#intro" role="tab" data-toggle="tab">Intro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kepala" role="tab" data-toggle="tab">Kepala</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#baju" role="tab" data-toggle="tab">Baju</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sepatu" role="tab" data-toggle="tab">Sepatu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#perisai" role="tab" data-toggle="tab">Perisai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#senjata" role="tab" data-toggle="tab">Senjata</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kostum" role="tab" data-toggle="tab">Kostum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aksesoris" role="tab" data-toggle="tab">Aksesoris</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="intro">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create')}}" class="btn btn-primary">Menambahkan Data Intro</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($intros as $i=>$intro)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $intro->title }} </td>	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@edit",array($intro->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($intro->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$intro->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$intro->id}}" action='{{URL::action("Admin\BarangController@destroy",array($intro->id))}}' method="POST">
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
                  
                  <div role="tabpanel" class="tab-pane fade" id="kepala">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-kepala')}}" class="btn btn-primary">Menambahkan Data Kepala</a>
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
                          @foreach($kepalas as $i=>$kepala)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $kepala->sub_category }} </td>	 
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editKepala",array($kepala->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($kepala->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$kepala->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$kepala->id}}" action='{{URL::action("Admin\BarangController@destroy",array($kepala->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $kepalas->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="baju">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-baju')}}" class="btn btn-primary">Menambahkan Data Baju</a>
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
                          @foreach($bajus as $i=>$baju)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $baju->sub_category }} </td>	        
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editBaju",array($baju->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($baju->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$baju->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$baju->id}}" action='{{URL::action("Admin\BarangController@destroy",array($baju->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $bajus->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="sepatu">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-sepatu')}}" class="btn btn-primary">Menambahkan Data Sepatu</a>
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
                          @foreach($sepatus as $i=>$sepatu)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $sepatu->sub_category }} </td>	          
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editSepatu",array($sepatu->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($sepatu->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$sepatu->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$sepatu->id}}" action='{{URL::action("Admin\BarangController@destroy",array($sepatu->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $sepatus->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="perisai">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-perisai')}}" class="btn btn-primary">Menambahkan Data Perisai</a>
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
                          @foreach($perisais as $i=>$perisai)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $perisai->sub_category }} </td>	 	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editPerisai",array($perisai->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($perisai->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$perisai->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$perisai->id}}" action='{{URL::action("Admin\BarangController@destroy",array($perisai->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $perisais->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="senjata">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-senjata')}}" class="btn btn-primary">Menambahkan Data Senjata</a>
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
                          @foreach($senjatas as $i=>$senjata)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $senjata->sub_category }} </td>         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editSenjata",array($senjata->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($senjata->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$senjata->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$senjata->id}}" action='{{URL::action("Admin\BarangController@destroy",array($senjata->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $senjatas->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="kostum">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-kostum')}}" class="btn btn-primary">Menambahkan Data Kostum</a>
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
                          @foreach($kostums as $i=>$kostum)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $kostum->sub_category }} </td> 	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editKostum",array($kostum->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($kostum->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$kostum->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$kostum->id}}" action='{{URL::action("Admin\BarangController@destroy",array($kostum->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $kostums->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="aksesoris">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/barang/create-aksesoris')}}" class="btn btn-primary">Menambahkan Data Aksesoris</a>
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
                          @foreach($aksesoris as $i=>$aksesori)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $aksesori->sub_category }} </td> 	         
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\BarangController@editAksesoris",array($aksesori->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\BarangController@show",array($aksesori->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$aksesori->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$aksesori->id}}" action='{{URL::action("Admin\BarangController@destroy",array($aksesori->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $aksesoris->appends(request()->except('page'))->links() !!}
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