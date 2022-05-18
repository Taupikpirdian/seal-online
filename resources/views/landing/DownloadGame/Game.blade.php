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
                <h1><span></span> SEAL Online Game Download</h1>
                <hr>
                @if($data)
                <p>{!! $data->desc !!}</p>
                @endif
            
                <div class="row">
                    @if($data)
                    <div class="col-lg-3 text-center">
                       <a target="_blank" href="{{ $data->link }}">
                        <div class="bg-primary" style="height: 160px; border: 2px solid white; border-radius: 10px;">
                            <p class="text-white" style="position: absolute; bottom: 0; right: 0; left: 0;"><b>Download</b></p>
                        </div>
                       </a>
                    </div>
                    @endif

                    <div class="col-lg bg-primary" style="border: 2px solid white; border-radius: 10px;">
                        <h4 class="text-white mt-3"><i class="fas fa-circle text-white"></i> Seal Online Indonesia Game Client .RAR (Per : 25 MB)</h4>
                        <div class="row mt-3 text-left mb-3">
                        @foreach($part_downloads as $key=>$part_download)
                            <div class="col-lg-3 mb-2" ><a href="{{ $part_download->link }}" class="text-white"><b>{{ $part_download->part }}</b></a></div>
                        @endforeach
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg">
                                <a href="#" class="text-white">Petunjuk.ZIP</a>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row mt-5">
                    <div class="col-lg" style="background: lightblue; border-radius: 10px;">
                        <h5 class="text-danger mt-3 mb-3"><b>Perhatian</b></h5>
                        <p>Download SEAL Online Indonesia Client dalam bentuk .RAR (File terpisah) untuk download yang lebih cepat.</p>
                    </div>
                </div>

                <h4 class="text-danger mt-5 mb-3"><b>DIRECTX 9 DOWNLOAD</b></h4>
                <p>Kamu membutuhkan DirectX 9 untuk bisa bermain SEAL Online Indonesia.</p>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection