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
                <h1><span></span> Guild Ranking</h1>
                <hr>
                <!-- <div class="row mt-4">
                    <div class="col-lg">
                        <p class="font-weight-bold">PERHITUNGAN PERINGKAT : </p>
                        <ul>
                            <li class="bg-white">Menang: 3 Poin</li>
                            <li class="bg-white">SERI: 0 POIN</li>
                            <li class="bg-white">KALAH: -1 POIN</li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <p class="font-weight-bold">PERHITUNGAN PERINGKAT : </p>
                        <ul style="list-style: none; margin-left: -10px;">
                            <li class="bg-white">PERIODE GUILDWARS DIHITUNG MULAI</li>
                            <li class="bg-white">WAKTU MAINTENANCE SEBELUM DAN Sesudah</li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <p class="font-weight-bold">PERHITUNGAN PERINGKAT : </p>
                        <ul>
                            <li class="bg-white"><a href="#" style="color: blue; border-bottom: dashed 1px black;">Guild Wars Hall</a></li>
                            <li class="bg-white"><a href="#" style="color: blue; border-bottom: dashed 1px black;">Hadiah Guild Wars</a></li>
                        </ul>
                    </div>
                </div> -->
                <p class="mt-4 font-weight-bold" style="color: red">* Apabila poin guild sama, maka perhitungan peringkat dilihat dari skor tertinggi Menang, Seri dan Kalah.</p>
                <div class="row mt-4">
                    <div class="col-lg gameUpdate__content">

                        <!-- <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Service Arus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Server Duran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Server Clarie</a>
                            </li>
                        </ul> -->
                        <!-- Tab panes -->

                        <div class="row">
                            <div class="col-lg tab-content">
                                <div class="row mt-3 tab-pane active" id="tab1">
                                    <div class="col-lg">

                                        <!-- <h1 class="text-danger" style="line-height: 32px; border-bottom: dashed 1px black;"><span></span> Ranking Guild</h1> -->
                                        <!-- <div class="row">
                                            <div class="col-lg mt-3">
                                                <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="border-radius: 0px;" alt="">
                                            </div>
                                            <div class="col-lg mt-3">
                                                <h5 class="text-danger">Vainzard</h5>
                                                <p class="ml-3 mt-3 p-1" style="background: lightblue;">Master:Buayaman</p>
                                                <p class="ml-3">M/S/K:14/14/2</p>
                                                <p class="ml-3 p-1" style="background: lightblue;">Points:40</p>
                                            </div>
                                            <div class="col-lg mt-3">
                                                <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="border-radius: 0px;" alt="">
                                            </div>
                                        </div> -->
                                 
                                        <div class="row mt-3">
                                            <div class="col-lg">
                                                <table border="1" class="mb-2 bale-table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2">Rank</th>
                                                            <th rowspan="2">Lambang</th>
                                                            <th colspan="3">GUILD INFO</th>
                                                            <th colspan="4">TOTAL GUILD WARS (ALL-OUT & PRIDE WAR)</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3">Nama Guild</th>
                                                            <th>Menang</th>
                                                            <th>Seri</th>
                                                            <th>Kalah</th>
                                                            <th>Point</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $r=0;
                                                        @endphp
                                                        <!-- looping -->
                                                        @foreach ($guild_infos as $key => $guild_info)
                                                        @php
                                                            $r=$r+1;
                                                        @endphp
                                                        <tr>
                                                            @if($r == 1)
                                                                <td><img src="{{asset('front/assets/emblem/guild/firstpad.gif')}}" style="width: 50px !important; height: 50px;" alt="Win1"></td>
                                                            @elseif($r == 2)
                                                                <td><img src="{{asset('front/assets/emblem/guild/2emblem.gif')}}" style="width: 50px !important; height: 50px;" width="50" alt="Win1"></td>
                                                            @elseif($r == 3)
                                                                <td><img src="{{asset('front/assets/emblem/guild/3emblem.gif')}}" style="width: 50px !important; height: 50px;" width="50" alt="Win1"></td>
                                                            @else
                                                                <td>{{$r}}</td>
                                                            @endif
                                                            <td>
                                                            @if ($guild_info->emblem != -1)
                                                                @php
                                                                $x = $guild_info->emblem;
                                                                $j = intval($x / 65536);
                                                                $x = $x % 65536;
                                                                $i = intval($x / 256);
                                                                $k = $x % 256;
                                                                $i=$i+1;
                                                                $j=$j+1;
                                                                $k=$k+1;
                                                                @endphp
                                                                <div class="row">
                                                                    <div class="col-lg">
                                                                        <img  src="overlay_image.gif" style="width: 50px !important; height: 50px;" alt="" />
                                                                    </div>
                                                                    <div class="col-lg">
                                                                        <img style="background:url({{asset('front/assets/emblem/guild/color/'.$k.'.gif')}});" class="team-logo small combine" src="{{asset('front/assets/emblem/guild/back/'.$i.'.gif')}}">
                                                                        <img class="team-logo small combine" src="{{asset('front/assets/emblem/guild/emblem/'.$j.'.gif')}}">
                                                                    </div>
                                                                </div>
                                                            
                                                            @else
                                                                <img class="team-logo small" style="width: 50px !important; height: 50px;" src="{{asset('front/assets/emblem/guild/emblem/'.$guild_info->emblem.'.gif')}}">
                                                            @endif
                                                            </td>
                                                            <!-- <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 100px; height: 50px;" alt=""></td> -->
                                                            <td colspan="3">{{ $guild_info->name }}</td>
                                                            <td>{{ $guild_info->gw_win_w }}</td>
                                                            <td>{{ $guild_info->gw_draw_w }}</td>
                                                            <td>{{ $guild_info->gw_lose_w }}</td>
                                                            <td>{{ $guild_info->pointss }}</td>
                                                        </tr>
                                                        @endforeach
                                                        <!-- end looping -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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