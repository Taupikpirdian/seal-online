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
          @if($persetujuan)
            <div class="col-lg">
                <h1><span></span> {{ $persetujuan->title }}</h1>
                <hr>
                <p>{!! $persetujuan->desc !!}</p>
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