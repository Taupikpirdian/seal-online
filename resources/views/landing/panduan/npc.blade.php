@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            <div class="col-lg">
                <h1><span></span> NPC SEAL Online</h1>
                <hr>
                <p style="font-size: 13px;" class="mb-5">Ini adalah daftar NPC SEAL Online yang akan sering kamu temui di setiap kota-kota besar, dan juga di beberapa map tertentu di dunia Shiltz.</p>
                <!-- content looping -->
                @foreach($datas as $key=>$data)
                <div class="row content mb-3">
                    <div class="col-lg-3">
                        <img class="content-image mb-2" src="{{ asset('/images/npc/'.$data->img)}}" alt="">
                    </div>
                    <div class="col-lg">
                        <h2 class="mt-3 mb-3"> {{ $data->title }}</h2>
                        <p>{!! $data->desc !!}</p>
                    </div>
                </div>
                @endforeach
                <!-- end content looping -->
                {!! $datas->appends(request()->except('page'))->links() !!}
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection