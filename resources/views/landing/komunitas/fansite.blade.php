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
                <h1><span></span> SEAL Online Fansite</h1>
                <hr>
                <p style="font-size: 13px;" class="mb-3">Mari bergabung, berkenalan, dan berdiskusi bersama tentang fitur game SEAL Online, seperti quest, pemeliharaan pet, item sets yang menarik serta pengembangan profesi favorit kamu dengan SEALovers dari seluruh Indonesia.</p>
                <!-- <a href="#">
                    <img class="mr-2" style="width: 30px; height: 30px; border: none; border-radius: 0px; box-shadow: none; float: left;" src="{{ asset('front/logo.png') }}" alt="">
                    <p class="mt-4" style="border-bottom: 1px solid black; width: 10%;">Submit Fansite</p>
                </a> -->
                <!-- content looping -->
                @foreach($forums as $forum)
                <div class="row mt-5">
                    <div class="col-lg">
                        <div class="row mb-3" style="border-bottom: 1px solid black;">
                            <div class="col-lg-2">
                                <img class="mb-2" style="width: 100%; height: 100px; border: none; border-radius: 0px; box-shadow: none;" src="{{ asset('/images/forum/'.$forum->icon)}}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                                <a href="{{ $forum->link }}"><h1 style="color: {{ $forum->color }}">{{ $forum->name }}</h1></a>
                                <p>{!! $forum->desc !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
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