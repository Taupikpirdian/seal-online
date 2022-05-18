@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Pet Dalam Shiltz</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Seed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Piya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">Bird</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">Heaven</a>
                    </li>
                </ul>
                <!-- Tab panes -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg tab-content">
                <div class="row mt-3 tab-pane active" id="tab1">
                    <div class="col-lg">
                        <!-- <img class="mr-3" src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="250" style="float: left;" alt=""> -->
                        <p>@if($pet_intro){!! $pet_intro->desc !!}@endif</p>
                        <!-- <p>Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p> -->
                        <!-- <ul class="mt-4 list_pet">
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Seed</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Piya's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Bird's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Heaven's Egg <span>(Khusus Heaven’s Egg hanya bisa didapatkan melalui event tertentu.)</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="row mt-3 tab-pane" id="tab2">
                    <div class="col-lg">
                        <p>@if($pet_seed){!! $pet_seed->desc !!}@endif</p>
                        <!-- <img class="mr-3" src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="250" style="float: left;" alt="">
                        <p>Jika kamu adalah seorang pecinta binatang, di dalam SEAL Online ada binatang peliharaan atau Pet yang bervariasi. Pet ini tidak hanya sebagai peliharaan biasa, tetapi Pet dapat membantumu dalam bertualang menjelajahi Shiltz. <br> <br>
                        Ada beberapa jenis Biji dan telur Pet di Shiltz, diantara nya adalah Seed, Piya Egg, Bird Egg dan Heaven Egg. Biji dan telur Pet tersebut dapat berevolusi menjadi lebih besar dan kuat jika kamu merawat nya dengan baik. Kamu tidak hanya dapat mengevolusikan pet itu menjadi 1 jenis saja, tetapi Pet dapat berevolusi menjadi bermacam-macam jenis tumbuhan, hewan dan peri kecil. <br> Setelah dirawat hingga dewasa, Pet dapat berubah menjadi Guardian yang gagah dan dapat dikendarai untuk bepergian. Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <p>Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <ul class="mt-4 list_pet">
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Seed</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Piya's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Bird's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Heaven's Egg <span>(Khusus Heaven’s Egg hanya bisa didapatkan melalui event tertentu.)</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="row mt-3 tab-pane" id="tab3">
                    <div class="col-lg">
                        <p>@if($pet_piya){!! $pet_piya->desc !!}@endif</p>

                        <!-- <img class="mr-3" src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="250" style="float: left;" alt="">
                        <p>Jika kamu adalah seorang pecinta binatang, di dalam SEAL Online ada binatang peliharaan atau Pet yang bervariasi. Pet ini tidak hanya sebagai peliharaan biasa, tetapi Pet dapat membantumu dalam bertualang menjelajahi Shiltz. <br> <br>
                        Ada beberapa jenis Biji dan telur Pet di Shiltz, diantara nya adalah Seed, Piya Egg, Bird Egg dan Heaven Egg. Biji dan telur Pet tersebut dapat berevolusi menjadi lebih besar dan kuat jika kamu merawat nya dengan baik. Kamu tidak hanya dapat mengevolusikan pet itu menjadi 1 jenis saja, tetapi Pet dapat berevolusi menjadi bermacam-macam jenis tumbuhan, hewan dan peri kecil. <br> Setelah dirawat hingga dewasa, Pet dapat berubah menjadi Guardian yang gagah dan dapat dikendarai untuk bepergian. Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <p>Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <ul class="mt-4 list_pet">
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Seed</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Piya's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Bird's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Heaven's Egg <span>(Khusus Heaven’s Egg hanya bisa didapatkan melalui event tertentu.)</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="row mt-3 tab-pane" id="tab4">
                    <div class="col-lg">
                        <p>@if($pet_bird){!! $pet_bird->desc !!}@endif</p>

                        <!-- <img class="mr-3" src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="250" style="float: left;" alt="">
                        <p>Jika kamu adalah seorang pecinta binatang, di dalam SEAL Online ada binatang peliharaan atau Pet yang bervariasi. Pet ini tidak hanya sebagai peliharaan biasa, tetapi Pet dapat membantumu dalam bertualang menjelajahi Shiltz. <br> <br>
                        Ada beberapa jenis Biji dan telur Pet di Shiltz, diantara nya adalah Seed, Piya Egg, Bird Egg dan Heaven Egg. Biji dan telur Pet tersebut dapat berevolusi menjadi lebih besar dan kuat jika kamu merawat nya dengan baik. Kamu tidak hanya dapat mengevolusikan pet itu menjadi 1 jenis saja, tetapi Pet dapat berevolusi menjadi bermacam-macam jenis tumbuhan, hewan dan peri kecil. <br> Setelah dirawat hingga dewasa, Pet dapat berubah menjadi Guardian yang gagah dan dapat dikendarai untuk bepergian. Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <p>Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <ul class="mt-4 list_pet">
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Seed</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Piya's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Bird's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Heaven's Egg <span>(Khusus Heaven’s Egg hanya bisa didapatkan melalui event tertentu.)</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="row mt-3 tab-pane" id="tab5">
                    <div class="col-lg">
                        <p>@if($pet_heaven){!! $pet_heaven->desc !!}@endif</p>

                        <!-- <img class="mr-3" src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="250" style="float: left;" alt="">
                        <p>Jika kamu adalah seorang pecinta binatang, di dalam SEAL Online ada binatang peliharaan atau Pet yang bervariasi. Pet ini tidak hanya sebagai peliharaan biasa, tetapi Pet dapat membantumu dalam bertualang menjelajahi Shiltz. <br> <br>
                        Ada beberapa jenis Biji dan telur Pet di Shiltz, diantara nya adalah Seed, Piya Egg, Bird Egg dan Heaven Egg. Biji dan telur Pet tersebut dapat berevolusi menjadi lebih besar dan kuat jika kamu merawat nya dengan baik. Kamu tidak hanya dapat mengevolusikan pet itu menjadi 1 jenis saja, tetapi Pet dapat berevolusi menjadi bermacam-macam jenis tumbuhan, hewan dan peri kecil. <br> Setelah dirawat hingga dewasa, Pet dapat berubah menjadi Guardian yang gagah dan dapat dikendarai untuk bepergian. Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <p>Ini adalah 4 jenis awal pet yang bisa kamu miliki:</p>
                        <ul class="mt-4 list_pet">
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Seed</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Piya's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Bird's Egg</a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" width="80" alt=""> Heaven's Egg <span>(Khusus Heaven’s Egg hanya bisa didapatkan melalui event tertentu.)</span></a>
                            </li>
                        </ul> -->
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