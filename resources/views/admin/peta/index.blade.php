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
        <span>Peta</span>
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
                Peta
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 mb-3'>
                    <a href="{{URL::to('/peta/create')}}" class="btn btn-primary">Menambahkan Data Peta</a>
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>image</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($petas as $i=>$peta)
                        <tr>
                          <td>{{ $i + 1 }}</td>
                          @if($peta->category == 0)
                            <td>Peta Dunia Sheiltz</td>
                          @elseif($peta->category == 1)
                            <td>Peta Kota Sheiltz</td>
                          @endif
                          <td>{{ $peta->title }}</td>          
                          <td>
                            <img src="{{ asset('/images/peta/'.$peta->img)}}" width="100px"> 
                          </td>
                          <td class='text-center'>
                            <a title="Edit" href="/peta/edit/{{ $peta->id }}"><i class="fas fa-edit"></i></a>
                            <a title="Lihat Detail" href="/peta/show/{{ $peta->id }}"><i class="fa fa-eye"></i></a> 
                            <a title="delete" href="#" onclick="document.getElementById('delete_peta{{$peta->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_peta{{$peta->id}}" action='{{URL::action("Admin\PetaController@destroy",array($peta->id))}}' method="POST">
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