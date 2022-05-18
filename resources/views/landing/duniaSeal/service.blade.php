@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Update: Service</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'all' ? 'active' : '' }}" href="#tab1" role="tab" data-toggle="tab" onclick="into()">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'peta-baru' ? 'active' : '' }}" href="#tab2" role="tab" data-toggle="tab" onclick="peta()">Peta Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'monster' ? 'active' : '' }}" href="#tab3" role="tab" data-toggle="tab" onclick="monter()">Monster Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'armor' ? 'active' : '' }}" href="#tab4" role="tab" data-toggle="tab" onclick="armor()">Armor Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'npc' ? 'active' : '' }}" href="#tab5" role="tab" data-toggle="tab" onclick="npc()">NPC Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ app('request')->input('type') == 'status' ? 'active' : '' }}" href="#tab6" role="tab" data-toggle="tab" onclick="status()">Status Item</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'all' ? 'active' : '' }}" id="tab1">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
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
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'peta-baru' ? 'active' : '' }}" id="tab2">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
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
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'monster' ? 'active' : '' }}" id="tab3">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($monsters as $key=>$monster)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$monster->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $monster->title }}</h2>
                                        <p>{!! $monster->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $monsters->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'armor' ? 'active' : '' }}" id="tab4">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($armors as $key=>$armor)
                                <div class="row content mb-3">
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $armor->title }}</h2>
                                        <p>{!! $armor->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $armors->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'npc' ? 'active' : '' }}" id="tab5">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($npc_datas as $key=>$npc_data)
                                <div class="row content mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/images/update-part/'.$npc_data->img)}}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $npc_data->title }}</h2>
                                        <p>{!! $npc_data->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $npc_datas->appends(request()->except('page'))->links() !!}
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane {{ app('request')->input('type') == 'status' ? 'active' : '' }}" id="tab6">
                            <div class="col-lg">
                                @if($background)
                                    <img class="header-image" src="{{ asset('/images/background-update/'.$background->img)}}" alt="">
                                    <h1 class="mt-4 header"><span></span> Intro Update: Service <span class="date">({{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y") }})</span></h1>
                                    <hr class="border-header">
                                    <p class="mb-4">{!! $background->desc !!}</p>
                                @endif
                                <!-- looping content -->
                                @foreach($status_items as $key=>$status_item)
                                <div class="row content mb-3">
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $status_item->title }}</h2>
                                        <p>{!! $status_item->desc !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- end looping content -->
                                {!! $status_items->appends(request()->except('page'))->links() !!}
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

        function peta(){
            window.history.replaceState(null, null, "?type=peta-baru");
        }

        function monter(){
            window.history.replaceState(null, null, "?type=monster");
        }

        function armor(){
            window.history.replaceState(null, null, "?type=armor");
        }

        function npc(){
            window.history.replaceState(null, null, "?type=npc");
        }

        function status(){
            window.history.replaceState(null, null, "?type=status");
        }

    </script>

</div>    
@endsection