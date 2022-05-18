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
        <span>List Download</span>
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
                Download
              </h5>

              <div class="element-box">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#single" role="tab" data-toggle="tab">Single Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#part" role="tab" data-toggle="tab">Part Link</a>
                  </li>
                </ul>
                <br>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div role="tabpanel" class="tab-pane fade in active" id="single">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/download/create')}}" class="btn btn-primary">Menambahkan Data Download</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Link Download</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($downloads as $i=>$download)
                            <tr>
                              <td>{{$start_page}}</td>
                              <td> {{ $download->title }} </td>	         
                              <td> {{ $download->link }} </td>           
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\DownloadController@edit",array($download->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="Lihat Detail" href='{{URL::action("Admin\DownloadController@show",array($download->id))}}'><i class="fa fa-eye"></i></a> 
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$download->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$download->id}}" action='{{URL::action("Admin\DownloadController@destroy",array($download->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                            <?php $start_page = $start_page+1 ?>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $downloads->appends(request()->except('page'))->links() !!}
                    </div>
                  </div>
                  
                  <div role="tabpanel" class="tab-pane fade" id="part">
                    <div class="row">
                      <div class='col-md-6 pull-right'>
                        <a href="{{URL::to('/part-download/create')}}" class="btn btn-primary">Menambahkan Data Download</a>
                      </div>
                      <br>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Part Ke</th>
                            <th>Link Download</th>
                            <th class='text-center' style="width: 100px">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($datas as $i=>$data)
                            <tr>
                              <td>{{$i+1}}</td>
                              <td> {{ $data->part }} </td>	         
                              <td> {{ $data->link }} </td>           
                              <td class='text-center'>
                                <a title="Edit" href='{{URL::action("Admin\PartDownloadController@edit",array($data->id))}}'><i class="fas fa-edit"></i></a>
                                <a title="delete" href="#" onclick="document.getElementById('delete_role{{$data->id}}').submit();"><i class="fa fa-trash"></i></a>
                                <form id="delete_role{{$data->id}}" action='{{URL::action("Admin\PartDownloadController@destroy",array($data->id))}}' method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                              </td>
                            </tr>
                            <?php $start_page = $start_page+1 ?>
                          @endforeach
                        </tbody>
                      </table>
                      {!! $datas->appends(request()->except('page'))->links() !!}
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