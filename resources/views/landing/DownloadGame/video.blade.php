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
                <h1><span></span> Video SEAL</h1>
                <hr>
                <!-- content looping -->
                @foreach($video_downloads as $key=>$video_download)
                <div class="row mt-3 mb-3">
                    <div class="col-lg-4">    
                    <iframe src="{{ $video_download->url }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <h1 class="text-dark mb-4" style="font-size: 18px;">{{ $video_download->title }}</h1>
                <p class="mb-4">{!! $video_download->desc !!}</p>
                <!-- <a href="#" style="background: lightblue; padding: 8px; border-radius: 5px;"><i class="fas fa-circle"></i> SEAL Online Video (size: 49.3 MB)</a> -->
                <hr>
                @endforeach
                <!-- end content looping -->
           </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection