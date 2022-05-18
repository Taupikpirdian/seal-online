@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Update: Carnival City</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'all' ? 'active' : '' }}" href="#tab1" role="tab" data-toggle="tab" onclick="into()">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'profesi-baru' ? 'active' : '' }}" href="#tab2" role="tab" data-toggle="tab" onclick="profesi()">Profesi Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'peta-baru' ? 'active' : '' }}" href="#tab3" role="tab" data-toggle="tab" onclick="map()">Peta Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'guardian' ? 'active' : '' }}" href="#tab4" role="tab" data-toggle="tab" onclick="guardian()">Guardian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'pvp' ? 'active' : '' }}" href="#tab5" role="tab" data-toggle="tab" onclick="pvp()">PVP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'item-baru' ? 'active' : '' }}" href="#tab6" role="tab" data-toggle="tab" onclick="item()">Item Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'skill-baru' ? 'active' : '' }}" href="#tab7" role="tab" data-toggle="tab" onclick="skill()">Skill Baru</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'all' ? 'active' : '' }}" id="tab1">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($datas as $key=>$data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $data->title }}</h2>
                                        <p>{!! $data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'profesi-baru' ? 'active' : '' }}" id="tab2">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($profesi_datas as $key=>$profesi_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$profesi_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $profesi_data->title }}</h2>
                                        <p>{!! $profesi_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $profesi_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'peta-baru' ? 'active' : '' }}" id="tab3">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($peta_datas as $key=>$peta_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$peta_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $peta_data->title }}</h2>
                                        <p>{!! $peta_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $peta_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'guardian' ? 'active' : '' }}" id="tab4">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($guardian_datas as $key=>$guardian_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$guardian_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $guardian_data->title }}</h2>
                                        <p>{!! $guardian_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $guardian_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'pvp' ? 'active' : '' }}" id="tab5">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($pvp_datas as $key=>$pvp_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$pvp_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $pvp_data->title }}</h2>
                                        <p>{!! $pvp_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $pvp_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'item-baru' ? 'active' : '' }}" id="tab6">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($item_datas as $key=>$item_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$item_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $item_data->title }}</h2>
                                        <p>{!! $item_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $item_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>

                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'skill-baru' ? 'active' : '' }}" id="tab7">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Carnival City <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($skill_datas as $key=>$skill_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$skill_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $skill_data->title }}</h2>
                                        <p>{!! $skill_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $skill_datas->appends(request()->except('page'))->links() !!}
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

    <script>
        function into(){
            window.history.replaceState(null, null, "?type=all");
        }

        function profesi(){
            window.history.replaceState(null, null, "?type=profesi-baru");
        }

        function map(){
            window.history.replaceState(null, null, "?type=peta-baru");
        }

        function guardian(){
            window.history.replaceState(null, null, "?type=guardian");
        }

        function pvp(){
            window.history.replaceState(null, null, "?type=pvp");
        }

        function item(){
            window.history.replaceState(null, null, "?type=item-baru");
        }

        function skill(){
            window.history.replaceState(null, null, "?type=skill-baru");
        }

    </script>

</div>    
@endsection