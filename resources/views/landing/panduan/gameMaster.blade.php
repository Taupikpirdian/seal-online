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
                @if($intro_game_master)
                <h1><span></span> {{ $intro_game_master->title }}</h1>
                <hr>
                <p>{!! $intro_game_master->desc !!}</p>
                @endif
                <!-- content looping -->
                @foreach($game_masters as $key=>$game_master)
                <div class="row">
                    <div class="col-lg">
                        <h5>GM {{ $game_master->nama }}</h5>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <img class="game__content-image mb-2" src="{{ asset('/images/game-master/'.$game_master->img)}}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                                <p><b>Nama :</b> {{ $game_master->nama }}</p>
                                <p><b>Umur :</b> {{ $game_master->umur }}</p>
                                <p><b>Alamat :</b> {{ $game_master->alamat }}</p>
                                <p><b>Hobi :</b> {{ $game_master->hobi }}</p>
                                <p><b>Pet Favorit :</b> {{ $game_master->favorit_pet }}</p>
                                <p><b>Warna Favorit :</b> {{ $game_master->favorit_warna }}</p>
                                <p><b>Reputasi :</b> {{ $game_master->reputasi }}</p>
                                <p><b>Motto :</b> {{ $game_master->motto }}</p>
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