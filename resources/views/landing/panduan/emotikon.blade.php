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
                <h1><span></span> SEAL Online Emotikon</h1>
                <hr>

                <p>@if($emotikon){!! $emotikon->desc !!}@endif</p>
            
                <!-- content looping -->
                <!-- <div class="row">
                    <div class="col-lg">
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                               <p>Dalam hidup yang santai, apakah kamu tahu hal penting lainnya selain makan dan tidur? Itu adalah, menyatakan perasaan. Seperti... meneteskan air mata saat kamu butuh makanan, tersenyum manis saat bertemu dengan cintamu. Kamu harus mempelajari cara menggunakan ekspresi jika ingin bertahan di dunia ini.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- end content looping -->

                <!-- <h4 class="mt-3 mb-3" style="color: orange;">Perasaan</h4> -->

                <!-- looping img  -->
                <!-- <div class="row">
                    <div class="col-lg">
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                    </div>
                </div>
                
                <h4 class="mt-3 mb-3" style="color: orange;">Spesial</h4>

                <div class="row">
                    <div class="col-lg">
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                        <div class="emoticon_item">
                            <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            <p>/haha</p>
                        </div>
                    </div>
                </div>


                <h1 class="mt-5"><span></span> Panduan Menggunakan Emotikon</h1>
                <hr> -->

                <!-- content looping -->
                <!-- <div class="row mt-3">
                    <div class="col-lg">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <img class="mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                               <p><b>Dalam hidup yang santai, apakah kamu tahu hal penting lainnya selain makan dan tidur? Itu adalah, menyatakan perasaan. Seperti... meneteskan air mata saat kamu butuh makanan, tersenyum manis saat bertemu dengan cintamu. Kamu harus mempelajari cara menggunakan ekspresi jika ingin bertahan di dunia ini.</b></p>
                            </div>
                        </div>
                    </div>
                </div> -->
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