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
        <a href="{{URL::to('/komik/index')}}">List Komik</a>
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
                Halaman Komik
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/komik-page/create/'.$komik->id)}}" class="btn btn-primary">Menambahkan Data Halaman Komik</a>
                  </div>
                  <br>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped table-hover">
                      <tr>
                        <td>Judul</td>
                        <td>
                        {{ $komik->title }}
                        </td>
                      </tr>
                      <tr>
                        <td width="200px">Cover</td>
                        <td>
                          <img src="{{ asset('/images/komik/'.$komik->cover)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> 
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
                        <th>Halaman</th>
                        <th>Gambar</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($page_komiks as $i=>$page_komik)
                        <tr>
                          <td>{{ $i + 1 }}</td>
                          <td> {{ $page_komik->page }} </td>      
                          <td> 
                            <img src="{{ asset('/images/komik-page/'.$page_komik->img)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> 
                          </td>           
                          <td class='text-center'>
                            <a title="Delete" href="#" onclick="document.getElementById('delete_role{{$page_komik->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$page_komik->id}}" action='{{URL::action("Admin\KomikController@destroyPage",array($page_komik->id))}}' method="POST">
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