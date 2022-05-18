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
            <div class="col-lg">
                <h1><span></span> Fitur Seal Online</h1>
                <hr>
                <!-- content looping -->
                @foreach($fiturs as $fitur)
                <div class="row mt-4" style="border-bottom: 1px dashed lightblue;">
                    <div class="col-lg-3 mb-3">
                        <img src="{{ asset('/images/fitur/'.$fitur->img)}}" alt="">
                    </div>
                    <div class="col-lg ml-3">
                        <h2>{{ $fitur->title }}</h2>
                        <p class="mt-2">{!! $fitur->desc !!}</p>
                    </div>
                </div>
                @endforeach
                <!-- end content looping -->
                <br>
                {!! $fiturs->appends(request()->except('page'))->links() !!}
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection