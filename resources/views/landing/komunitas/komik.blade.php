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
                <h1><span></span> Komik</h1>
                <hr>
                <p>Hai Sealovers...</p>
                <p style="font-size: 13px;" class="mb-3">Mari bergabung, berkenalan, dan berdiskusi bersama tentang fitur game SEAL Online, seperti quest, pemeliharaan pet, item sets yang menarik serta pengembangan profesi favorit kamu dengan SEALovers dari seluruh Indonesia.</p>
                <div class="row mt-5">
                    <div class="col-lg">
                        <!-- content looping -->
                        @foreach($komiks as $key=>$komik)
                        <div class="row mb-3">
                            <div class="col-lg-2">
                                <img class="mb-2" style="width: 100%; height: 100px; border: none; border-radius: 0px; box-shadow: none;" src="{{ asset('/images/komik/'.$komik->cover)}}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                                <h1><span></span> {{ $komik->title }}</h1>
                                <hr>
                                <ul class="komik__list">
                                    @foreach($komik->komikPage as $key=>$page_komik)
                                    <li>
                                        <a href="{{ asset('/images/komik-page/'.$page_komik->img)}}" data-lightbox="image-1" data-title="Halaman {{ $page_komik->page }}">Halaman {{ $page_komik->page }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <!-- end content looping -->
                    </div>
                </div>
                {!! $komiks->appends(request()->except('page'))->links() !!}
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection