@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._navigation-layanan')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            <div class="col-lg">
                <h1><span></span> Kontak Kami</h1>
                <hr>
                <!-- content  -->
                @foreach($contact_us_datas as $key=>$contact_us_data)
                <p><b class="text-danger mr-2">{{ $contact_us_data->title }}</b> | <span class="text-primary" style="background: none;">{{ $contact_us_data->contact_info }}</span></p>
                <p class="mb-4">{!! $contact_us_data->desc !!}</p>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection