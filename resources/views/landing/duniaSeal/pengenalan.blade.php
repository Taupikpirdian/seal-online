@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9 pengenalan">
        <h1><span></span>Apakah Seal Online ?</h1>
        <hr>
        @if($intro)
        <div class="row mt-4">
            <div class="col-lg">
                @if($intro->img_about)
                    <img style="float: right;" src="{{ asset('/images/intro/'.$intro->img_about)}}" alt="">
                @endif
                <p>{!! $intro->about_seal !!}</p>
            </div>
        </div>
        <div class="row mt-3 pengenalan_content">
            <div class="col-lg">
                <h1><span></span>Latar Cerita Seal Online</h1>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        @if($intro->img_story)
                        <img src="{{ asset('/images/intro/'.$intro->img_story)}}" alt="">
                        @endif
                        <p class="mt-3">{!! $intro->story_seal !!}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection