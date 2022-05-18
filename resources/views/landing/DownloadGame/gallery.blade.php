@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._download-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
           <div class="col-lg">
                <h1><span></span> Desktop Wallpaper</h1>
                <hr>
                <!-- content looping -->
                <div class="row mt-4 mb-3">
                    @foreach($galleries as $i=>$gallery)
                        @if($gallery->img_medium)
                        <div class="col-lg-3">
                            <a href="#">
                                <img class="mb-2" style="width: 100%; height: 200px; border-radius: 0px;" src="{{ asset('/images/gallery/800/'.$gallery->img_medium)}}" alt="">
                            </a>
                            <p class="text-center"><a href='{{URL::action("DownloadController@downloadImage800",array($gallery->img_medium))}}'>[800x600]</a> @if($gallery->img_height)<i class="fas fa-star"></i> <a href='{{URL::action("DownloadController@downloadImage1024",array($gallery->img_height))}}'>[1024x768]</a>@endif</p>
                        </div>
                        @else
                        <div class="col-lg-3">
                            <a href="#">
                                <img class="mb-2" style="width: 100%; height: 200px; border-radius: 0px;" src="{{ asset('/images/gallery/1024/'.$gallery->img_height)}}" alt="">
                            </a>
                            <p class="text-center">@if($gallery->img_medium)<a href='{{URL::action("DownloadController@downloadImage800",array($gallery->img_medium))}}'>[800x600]</a> <i class="fas fa-star"></i> @endif <a href='{{URL::action("DownloadController@downloadImage1024",array($gallery->img_height))}}'>[1024x768]</a></p>
                        </div>
                        @endif
                    @endforeach
                </div>
           </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection