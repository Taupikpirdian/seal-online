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
        <span>Emotikon</span>
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
                Emotikon
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/emotikon-download/create')}}" class="btn btn-primary">Menambahkan Data Emotikon</a>
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Emotikon</th>
                        <th>Format</th>
                        <th>Nama File</th>
                        <th>Gambar</th>
                        <th>Size</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($emotikon_downloads as $i=>$emotikon_download)
                        <tr>
                          <td>{{ ($emotikon_downloads->currentpage()-1) * $emotikon_downloads->perpage() + $i + 1 }}</td>
                          <td> {{ $emotikon_download->title }} </td>          
                          <td> {{ $emotikon_download->format }} </td> 
                          <td> {{ $emotikon_download->img }} </td> 
                          <td> <img src="{{ asset('/images/emotikon/'.$emotikon_download->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>           
                          <td> {{ $emotikon_download->size }} kb </td>     
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\EmotikonDownloadController@edit",array($emotikon_download->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat Detail" href='{{URL::action("Admin\EmotikonDownloadController@show",array($emotikon_download->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_emotikon_download{{$emotikon_download->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_emotikon_download{{$emotikon_download->id}}" action='{{URL::action("Admin\EmotikonDownloadController@destroy",array($emotikon_download->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $emotikon_downloads->appends(request()->except('page'))->links() !!}
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