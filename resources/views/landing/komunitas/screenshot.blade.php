@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._komunitas-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            <div class="col-lg">
                <h1><span></span> Screenshot</h1>
                <hr>
                <!-- content looping -->
                <div class="row mt-4 mb-3">
                    @foreach($screen_shots as $key=>$screen_shot)
                    <div class="col-lg-3">
                        <a href="{{ asset('/images/screen-shot/'.$screen_shot->img)}}" data-lightbox="image-5" data-title="{{ $screen_shot->title }}">  
                            <img class="mb-2" style="width: 100%; height: 150px; border-radius: 0px;" src="{{ asset('/images/screen-shot/'.$screen_shot->img)}}" alt="">
                        </a>
                        <p class="text-center">{{ $screen_shot->title }}</p>
                    </div>
                    @endforeach
                </div>
                <!-- end content looping -->
                {!! $screen_shots->appends(request()->except('page'))->links() !!}
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection