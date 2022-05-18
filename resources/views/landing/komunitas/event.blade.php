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
            <div class="col-lg">
                <div class="row">
                    <div class="col-lg">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list nav">
                                    @foreach($event_seals as $event_seal)
                                    <li class="splide__slide">
                                        <!-- href pake id dari data aja  -->
                                        <a href="{{URL::to('/event?slug='.$event_seal->slug)}}">
                                            <img class="mb-2" style="height: 150px; border-radius: 0px;" src="{{ asset('/images/event-seal/'.$event_seal->img)}}" alt="">
                                            <p class="text-center">Acara {{ $event_seal->title }}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- @include('include.components._header-event-navbar') -->
                @if($flag == 1)
                <div class="row mt-5">
                    <div class="col-lg">
                        @foreach($event_seals as $event_seal)
                        <!-- id sesuaikan dengan id datanya aja -->
                        <div class="row" id="tab{{ $event_seal->id }}">
                            <div class="col-lg">
                                <h1><span></span>Liputan Pameran SEAL di {{ $event_seal->title }}</h1>
                                <hr>
                                <img class="mb-2" style="height: 300px; border-radius: 0px;" src="{{ asset('/images/event-seal/'.$event_seal->img)}}" alt="">
                                <p>{!! $event_seal->desc !!}</p>
                                
                                <!-- looping -->
                                @foreach($event_seal_lists as $key=>$event_seal_list)
                                <h1 class="mt-4 text-dark"><span class="bg-primary"></span> {{ $event_seal_list->title }}</h1>
                                <hr>
                                <p>{!! $event_seal_list->desc !!}</p>
                                @endforeach
                                <!-- looping -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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