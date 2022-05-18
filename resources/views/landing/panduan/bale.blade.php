@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->
    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Mulai Bermain</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Bale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Bos Bale</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-2 feature tab-pane active" id="tab1">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">1~20</a>
                                            </li>
                                            <li>
                                                <a href="#tabs2" data-toggle="tab">21~40</a>
                                            </li>
                                            <li>
                                                <a href="#tabs10" role="tab" data-toggle="tab">41~60</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">61~80</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">81~100</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">101~120</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">121~140</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">141~160</a>
                                            </li>
                                            <li>
                                                <a href="#tabs8" role="tab" data-toggle="tab">161~180</a>
                                            </li>
                                            <li>
                                                <a href="#tabs9" role="tab" data-toggle="tab">181~200</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_20 as $key=>$max_20)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_20->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_20->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_20->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_20->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_20->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_20->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_20->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_20->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_20->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_20->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg content">
                                                @if($bos_bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_40 as $key=>$max_40)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_40->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_40->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_40->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_40->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_40->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_40->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_40->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_40->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_40->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_40->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_80 as $key=>$max_80)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_80->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_80->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_80->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_80->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_80->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_80->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_80->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_80->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_80->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_80->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_100 as $key=>$max_100)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_100->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_100->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_100->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_100->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_100->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_100->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_100->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_100->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_100->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_100->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_120 as $key=>$max_120)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_120->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_120->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_120->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_120->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_120->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_120->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_120->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_120->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_120->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_120->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_140 as $key=>$max_140)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_140->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_140->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_140->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_140->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_140->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_140->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_140->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_140->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_140->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_140->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_160 as $key=>$max_160)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_160->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_160->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_160->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_160->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_160->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_160->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_160->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_160->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_160->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_160->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs8">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_180 as $key=>$max_180)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_180->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_180->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_180->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_180->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_180->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_180->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_180->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_180->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_180->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_180->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs9">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_200 as $key=>$max_200)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_200->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_200->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_200->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_200->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_200->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_200->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_200->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_200->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_200->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_200->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs10">
                                            <div class="col-lg content">
                                                @if($bale_monster)
                                                <p>{!! $bale_monster->desc !!}</p>
                                                @endif
                                                <!-- looping  -->
                                                @foreach($level_max_60 as $key=>$max_60)
                                                <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $max_60->name }}</h2>
                                                <table border="1" class="mb-2 bale-table">
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="6"><img src="{{ asset('/images/bale/'.$max_60->img)}}" alt=""></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                            <td colspan="5" style="padding: 5px;"> {{ $max_60->lokasi }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                            <td style="padding: 5px;">{{ $max_60->level }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                            <td colspan="3" style="padding: 5px;">{{ $max_60->elemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                            <td style="padding: 5px;">{{ $max_60->hp }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                            <td style="padding: 5px;">{{ $max_60->atk }}</td>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                            <td style="padding: 5px;">{{ $max_60->def }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                            <td colspan="5" style="padding: 5px;">{{ $max_60->item_drop }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                            <td colspan="5" style="padding: 5px;">{!! $max_60->deskripsi !!}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                                <!-- end looping -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab2">
                            <div class="col-lg">
                                <div class="row ml-2">
                                    <div class="col-lg content">
                                        @if($bos_bale_monster)
                                            <p>{!! $bos_bale_monster->desc !!}</p>
                                        @endif
                                        <!-- looping  -->
                                        @foreach($boss_bale as $boss)
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> {{ $boss->name }}</h2>
                                        <table border="1" class="mb-2 bale-table">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="6"><img src="{{ asset('/images/bale/'.$boss->img)}}" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">LOKASI</td>
                                                    <td colspan="5" style="padding: 5px;"> {{ $boss->lokasi }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">LEVEL</td>
                                                    <td style="padding: 5px;">{{ $boss->level }}</td>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">ELEMEN</td>
                                                    <td colspan="3" style="padding: 5px;">{{ $boss->elemen }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">HP</td>
                                                    <td style="padding: 5px;">{{ $boss->hp }}</td>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">ATK</td>
                                                    <td style="padding: 5px;">{{ $boss->atk }}</td>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">DEF</td>
                                                    <td style="padding: 5px;">{{ $boss->def }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">ITEM DROP</td>
                                                    <td colspan="5" style="padding: 5px;">{{ $boss->item_drop }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="background: rgb(199, 199, 221); padding: 5px;">DESKRIPSI</td>
                                                    <td colspan="5" style="padding: 5px;">{!! $boss->deskripsi !!}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @endforeach
                                        <!-- end looping -->
                                    </div>
                                </div>
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