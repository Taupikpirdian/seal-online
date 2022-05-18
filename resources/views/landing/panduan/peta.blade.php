@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Peta Dunia SEAL Online ~ Shiltz</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Peta Dunia Shitz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Kota Dunia Shitz</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-3 peta__content tab-pane active" id="tab1">
                            @foreach($petas as $peta)
                                @if($peta->category == 0)
                                <div class="col-lg">
                                    <img src="{{ asset('/images/peta/'.$peta->img)}}" alt="">
                                    <p>{{ $peta->title }}</p>
                                    <p>{!! str_limit($peta->deskripsi, 500) !!} </p>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="row mt-3 gameUpdate__content tab-pane" id="tab2">
                            <div class="col-lg feature">
                                <!-- content looping -->
                                @foreach($petas as $peta)
                                    @if($peta->category == 1)
                                    <div class="row mt-3 mb-5">
                                        <div class="col-lg-4 mb-3">
                                            <img style="height: 200px;" src="{{ asset('/images/peta/'.$peta->img)}}" alt="">
                                        </div>
                                        <div class="col-lg ml-3 mt-4">
                                            <p><b>{{ $peta->title }}</b></p>
                                            <p class="mt-2">{!! str_limit($peta->deskripsi, 500) !!} </p>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <!-- end content looping -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection