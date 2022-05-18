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
        <span>List Gallery</span>
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
                Gallery
              </h5>
              <div class="element-box">
                <div class="row">
                  <div class='col-md-6 pull-right'>
                    <a href="{{URL::to('/gallery/create')}}" class="btn btn-primary">Menambahkan Data Gallery</a>
                  </div>
                  <div class="col-md-6 pull-left">
                  </div>
                  <br>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th class='text-center' style="width: 100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($galleries as $i=>$gallery)
                        <tr class="text-center">
                          <td>{{ ($galleries->currentpage()-1) * $galleries->perpage() + $i + 1 }}</td>
                          @if($gallery->img_medium)
                          <td> 
                            <img src="{{ asset('/images/gallery/800/'.$gallery->img_medium)}}" style="width: 30%"> 
                          </td>   
                          @else
                          <td> 
                            <img src="{{ asset('/images/gallery/1024/'.$gallery->img_height)}}" style="width: 30%"> 
                          </td> 
                          @endif
                          <td> {{ $gallery->category }} </td>          
                          <td class='text-center'>
                            <a title="Edit" href='{{URL::action("Admin\GalleryController@edit",array($gallery->id))}}'><i class="fas fa-edit"></i></a>
                            <a title="delete" href="#" onclick="document.getElementById('delete_role{{$gallery->id}}').submit();"><i class="fa fa-trash"></i></a>
                            <form id="delete_role{{$gallery->id}}" action='{{URL::action("Admin\GalleryController@destroy",array($gallery->id))}}' method="POST">
                              <input type="hidden" name="_method" value="delete">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $galleries->appends(request()->except('page'))->links() !!}
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