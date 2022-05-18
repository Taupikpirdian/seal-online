@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._download-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
           <div class="col-lg">
                <h1><span></span> SEAL Online Emotikon</h1>
                <hr>
                <!-- content looping -->
                @foreach($emotikon_downloads as $key=>$emotikon_download)
                <div class="row mt-5">
                    <div class="col-lg">
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <img class="mb-2" style="width: 100%; height: 240px; border: none; border-radius: 0px; box-shadow: none;" src="{{ asset('/images/emotikon/'.$emotikon_download->img)}}" alt="">
                            </div>
                            <div class="col-lg mt-3">
                                <h5 class="text-danger mb-3"><b>{{ $emotikon_download->title }}</b></h5>
                                <p>{!! $emotikon_download->desc !!}</p>
                                <p>Format file *.{{ $emotikon_download->format }}.</p>
                                <p>Nama File: {{ $emotikon_download->zip_file }}</p>
                                <p class="mb-3">File size: {{ $emotikon_download->size }} KB</p>
                                <a href='{{URL::action("DownloadController@downloadEmotikonFile",array($emotikon_download->zip_file))}}' style="background: lightblue; padding: 5px; border-radius: 5px;"><i class="fas fa-download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content looping -->
                @endforeach
                {!! $emotikon_downloads->appends(request()->except('page'))->links() !!}
           </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection