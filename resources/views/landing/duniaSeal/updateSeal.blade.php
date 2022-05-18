@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature">
            <div class="col-lg update__seal">
                <h1><span></span> Update Seal Online</h1>
                <hr>
                <!-- content looping -->
                @foreach($update_seals as $key=>$update_seal)
                <div class="row mt-3" style="border-bottom: 1px dashed lightblue;">
                    <div class="col-lg-3 mb-3">
                        <img src="{{ asset('/images/update-seal/'.$update_seal->img)}}" alt="">
                    </div>
                    <div class="col-lg ml-3">
                        <h2><i class="fas fa-chevron-right"></i> {{ $update_seal->title }}</h2>
                        <p class="mt-2">{!! $update_seal->desc !!}</p>
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