@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Pacaran</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Intro Pacaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Hadiah Pacaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Mengambil Hadiah</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-3 feature tab-pane active" id="tab1">
                            <div class="col-lg update__seal">
                                <!-- content looping -->
                                <!-- <div class="row mt-3 mb-5">
                                    <div class="col-lg-3 mb-3">
                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-3">
                                        <p>Dalam Seal Online terdapat fitur pacaran, dimana kamu dapat mengajak karakter yang berlawanan jenis untuk jalan dengan kamu atau disebut juga dengan pacaran.</p>
                                        <p class="mt-2">Setiap karakter hanya dapat memiliki satu pasangan.</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg">
                                        <img class="pacaran__img" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                        <p>Kesetiaan kamu dengan pasanganmu dapat di hitung melalui jumlah hari dalam Seal Online (24 menit waktu nyata adalah 1 hari dalam Seal Online). Kamu juga akan diberi hadiah dan fungsi khusus sesuai dengan lama nya kesetiaan kamu pada pasangan masing-masing.</p>
                                    </div>
                                </div> -->

                                <!-- end content looping -->
                                <!-- <h1 class="mt-3"><span></span> Fungsi Pacaran</h1>
                                <hr> -->

                                <!-- content looping -->
                                <!-- <div class="row mt-3">
                                    <div class="col-lg-3 mb-3">
                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-4">
                                        <p class="mt-2">Jika kamu sudah memiliki pasangan, kamu akan dapat menggunakan fungsi khusus yang hanya dapat dilakukan oleh sepasang kekasih. Kamu dapat memanggil pasangan mu ke tempat dimana kamu berada (fungsi ini tidak berlaku saat berada di dalam Dungeon atau wilayah misi).</a>
                                        </p>
                                    </div>
                                </div> -->
                                <!-- end content looping -->

                                <!-- jadinya cuma pake desk, biar simple -->
                                <p>@if($intro){!! $intro->desc !!}@endif</p>
                            </div>
                        </div>
                        <div class="row mt-3 feature tab-pane" id="tab2">
                            <div class="col-lg update__seal">
                                <p class="mt-2 mb-4">Kamu bisa mendapatkan hadiah pacaran jika waktu kesetiaan mu sudah mencapai 100, 500, 1000, 2000 dan 3000 hari dalam waktu Shiltz.</p>
                                <!-- content looping -->
                                @foreach($dating_gifts as $key=>$dating_gift)
                                <div class="row mt-3">
                                    <div class="col-lg ml-3 mt-4">
                                        <h2 class="mb-3"><i class="fas fa-chevron-right"></i> {{ $dating_gift->title }}</h2>
                                        <p class="mt-2">{!! $dating_gift->desc !!}</p>
                                        <!-- <img style="width: 200px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""> -->
                                    </div>
                                </div>
                                @endforeach
                                <!-- end content looping -->
                            </div>
                        </div>
                        <div class="row mt-3 feature tab-pane" id="tab3">
                            <div class="col-lg">
                                 <!-- jadinya cuma pake desk, biar simple -->
                                <p>@if($take_gift){!! $take_gift->desc !!}@endif</p>
                                <!-- content looping -->
                                <!-- <div class="row mt-3 mb-5">
                                    <div class="col-lg-4 mb-3">
                                        <img style="height: 200px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-3">
                                        <p>Pergilah ke gereja yang terletak di kota Elim</p>
                                    </div>
                                </div> -->
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