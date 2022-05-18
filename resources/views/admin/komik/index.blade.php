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
        <span>List Komik</span>
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
                Komik
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/komik/create')}}" class="btn btn-primary">Menambahkan Data Komik</a>
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Cover</th>
                        <th>Jumlah Page</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($komiks as $i=>$komik)
                        <tr>
                          <td>{{ ($komiks->currentpage()-1) * $komiks->perpage() + $i + 1 }}</td>
                          <td> {{ $komik->title }} </td>	         
                          <td> 
                            <img src="{{ asset('/images/komik/'.$komik->cover)}}" style="max-height:100px;max-width:100px;margin-top:10px;"> 
                          </td>           
                          <td> {{ $komik->count_page }} </td>           
                          <td class='text-center'>
                            <a title="Edit Cover Komik" href='{{URL::action("Admin\KomikController@edit",array($komik->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="Lihat Page Komik" href='{{URL::action("Admin\KomikController@show",array($komik->id))}}'><i class="fa fa-eye"></i></a> 
                            <a title="Delete Komik" href="#" onclick="document.getElementById('delete_role{{$komik->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$komik->id}}" action='{{URL::action("Admin\KomikController@destroy",array($komik->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $komiks->appends(request()->except('page'))->links() !!}
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