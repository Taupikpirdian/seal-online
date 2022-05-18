@extends('layouts.landing')
@section('css')
@endsection
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            <div class="col-lg">
                <h1><span></span> {{ $berita->title }}</h1>
                <hr>
                <p>{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y H:m') }},</p>
                @if($berita->img)
                <img src="{{ asset('/images/berita/thumbs/'.$berita->img)}}" style="height: 300px;">
                @endif
                <p style="font-size: 13px;" class="mb-5">{!! $berita->desc !!}</p>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection