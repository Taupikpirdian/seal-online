@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Refine</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Intro Refine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Resiko Pembuatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Hasil Refine</a>
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
                                </div> -->
                                <!-- end content looping -->

                                <p>@if($intro){!! $intro->desc !!}@endif</p>

                                <!-- content looping -->
                                <!-- <div class="row mt-3">
                                    <div class="col-lg-3 mb-3">
                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-4">
                                        <p class="mt-2">Jika kamu sudah mencapai level 10 dan telah mempelajari skill Sleep, maka kamu dapat mempelajari skill Refine pada NPC Pedagang perhiasan yang ada di Menara Pelatihan di setiap kota.</a>
                                        </p>
                                    </div>
                                </div> -->
                                <!-- end content looping -->

                            </div>
                        </div>
                        <div class="row mt-3 feature tab-pane" id="tab2">
                            <div class="col-lg update__seal">
                                <p>@if($refine_risk){!! $refine_risk->desc !!}@endif</p>
                                <!-- <p>Ayo coba membuat armor dan senjata yang kuat ~</p>
                                <p>Untuk menempa item pada batas-batas tertentu kamu memerlukan permata yang berbeda-beda. Berikut ini adalah permata yang dipakai dalam masing-masing proses tempa dan resiko kegagalan tempa.</p>
                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> Untuk Equipment biasa</h2> -->
                                <!-- content table  -->
                                <!-- <div class="row mt-2">
                                    <div class="col-lg table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Proses Tempa</th>
                                                    <th>Bahan Tempa</th>
                                                    <th>Resiko Kegagalan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0 => +1</td>
                                                    <td>Crystal</td>
                                                    <td>Tidak akan gagal</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                                <!-- end content table -->
                            </div>
                        </div>
                        <div class="row mt-3 feature tab-pane" id="tab3">
                            <div class="col-lg update__seal">
                                <p>@if($refine_return){!! $refine_return->desc !!}@endif</p>

                                <!-- <p>Inilah contoh armor dan senjata yang sudah ditempa dari +0 sampai dengan +12</p>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="image-hasil__refine">
                                            <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                            <p class="text-center mt-1"> +0 </p>
                                        </div>
                                        <div class="image-hasil__refine">
                                            <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                            <p class="text-center mt-1"> +0 </p>
                                        </div>
                                        <div class="image-hasil__refine">
                                            <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                            <p class="text-center mt-1"> +0 </p>
                                        </div>
                                        <div class="image-hasil__refine">
                                            <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                            <p class="text-center mt-1"> +0 </p>
                                        </div>
                                        <div class="image-hasil__refine">
                                            <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                            <p class="text-center mt-1"> +0 </p>
                                        </div>
                                    </div>
                                </div>
                                <p>Kamu juga dapat memberikan elemen tertentu pada senjata dengan menempa senjata tersebut menggunakan batu elemen. Berikut ini adalah nama-nama batu elemen yang digunakan untuk menempa</p> -->
                                <!-- content table  -->
                                <!-- <div class="row mt-2 text-center">
                                    <div class="col-lg table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Elemen</th>
                                                    <th>Kegunaan</th>
                                                    <th>Nama Item</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nama Item</td>
                                                    <td>Elemen api untuk ditempa pada senjata, sangat cocok untuk melawan Bale elemen logam.</td>
                                                    <td>Red Fire</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                                <!-- end content table -->
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