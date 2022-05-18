@extends('layouts.landing')
@section('content')
<style>
.feature img {
    width: auto;
}
</style>
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature">
            <div class="col-lg update__seal">
                <h1><span></span> Panduan Instalasi</h1>
                <hr>
                @if($data)
                <!-- content looping -->
                <div class="row mt-3" style="border-bottom: 1px dashed lightblue;">
                    <div class="col-lg-3 mb-3">
                        <img src="{{ asset('/images/installation/'.$data->img)}}" alt="">
                    </div>
                    <div class="col-lg ml-3 mt-4">
                        <p>{!! $data->intro !!}</p>
                    </div>
                </div>
                <!-- end content looping -->
                <p class="mt-3">{!! $data->spec !!}</p>
              
                <h1 class="mt-5"><span></span> Langkah-Langkah Instalasi</h1>
                <hr>

                <!-- langkah-langkah content looping -->
                <div class="row">
                    <div class="col-lg ml-3">
                        <p>{!! $data->step_by_step !!}</p>
                    </div>
                    <div class="col-lg-4 mb-3">
                    </div>
                </div>
                <!-- langkah-langkah end content looping -->
                @endif
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection