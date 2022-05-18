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
        <span>Video</span>
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
                Video
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/video-download/create')}}" class="btn btn-primary">Menambahkan Data Video</a>
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Nama Video</th>
                        <th>Url</th>
                        <th>Size</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($video_downloads as $i=>$video_download)
                        <tr>
                          <td>{{ ($video_downloads->currentpage()-1) * $video_downloads->perpage() + $i + 1 }}</td>
                          <td> {{ $video_download->title }} </td>          
                          <td> {{ $video_download->video_name }} </td> 
                          <td> {{ $video_download->url }} </td> 
                          <td> {{ $video_download->size }} MB </td>     
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\VideoDownloadController@edit",array($video_download->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat Detail" href='{{URL::action("Admin\VideoDownloadController@show",array($video_download->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_video_download{{$video_download->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_video_download{{$video_download->id}}" action='{{URL::action("Admin\VideoDownloadController@destroy",array($video_download->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $video_downloads->appends(request()->except('page'))->links() !!}
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