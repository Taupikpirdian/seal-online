@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._koin-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            @if($top_up)
            <div class="col-lg">
                <h1><span></span> {{ $top_up->title }}</h1>
                <hr>
                <div style="text-align: center">
                    <img src="{{ asset('/images/topup/'.$top_up->img)}}" style="width:520px; height: 220px">
                </div>
                <p style="font-size: 13px;" class="mb-5">{!! $top_up->desc !!}</p>
            </div>
            @endif
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection