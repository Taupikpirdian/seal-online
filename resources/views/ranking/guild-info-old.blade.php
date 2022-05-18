@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Ranking Guild Info</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Ranking Guild Info</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Ranking - Guild Info</span>
      </p>
    </div>
  </div>

  @include('layouts.live-news')

  <div class="layout-content-1 layout-item-3-1 grid-limit content-box-style">
    <div class="layout-body layout-item gutter-big">
      <div class="widget-item">
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Guild Info Ranking</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings full">
          <div class="table-row-header">
            <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Position Rank</p>
            </div>

            <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Emblem</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Nama Guild</p>
            </div>

            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Jumlah Menang</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">jumlah Kalah</p>
            </div>

            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Jumlah Seri</p>
            </div>

            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Point</p>
            </div>
          </div>
          @php
            $r=0;
          @endphp
          @foreach ($guild_infos as $key => $guild_info)
            @php
              $r=$r+1;
            @endphp
            <div class="table-row">
              <div class="table-row-item position">
                {{-- @if ($r<4)
                  <p class="table-text" style="text-align:center;">{{$r}}</p>
                @endif --}}
                <div class="team-info-wrap">
                  @if($r == 1)
                    <img src="{{asset('front/assets/emblem/guild/firstpad.gif')}}" width="50px" alt="Win1">
                  @elseif($r == 2)
                    <img src="{{asset('front/assets/emblem/guild/2emblem.gif')}}" alt="Win1">
                  @elseif($r == 3)
                    <img src="{{asset('front/assets/emblem/guild/3emblem.gif')}}" alt="Win1">
                  @else
                    {{$r}}
                  @endif
                </div>
              </div>

              <div class="table-row-item">
                <div class="team-info-wrap">
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
                    <img  src="overlay_image.gif" alt="" />
                    <img style="background:url({{asset('front/assets/emblem/guild/color/'.$k.'.gif')}})" class="team-logo small" src="{{asset('front/assets/emblem/guild/back/'.$i.'.gif')}}">
                    <img class="team-logo small" src="{{asset('front/assets/emblem/guild/emblem/'.$j.'.gif')}}">
                  @else
                    <img class="team-logo small" src="{{asset('front/assets/emblem/guild/emblem/'.$guild_info->emblem.'.gif')}}">
                  @endif
                </div>
              </div>

              <div class="table-row-item">
                <div class="team-info">
                  <p class="table-text bold">{{ $guild_info->name }}</p>
                </div>
              </div>
    
              <div class="table-row-item">
                <p class="table-text bold">{{ $guild_info->gw_win_w }}</p>
              </div>
    
              <div class="table-row-item">
                <p class="table-text bold">{{ $guild_info->gw_lose_w }}</p>
              </div>
    
              <div class="table-row-item">
                <p class="table-text bold">{{ $guild_info->gw_draw_w }}</p>
              </div>

              <div class="table-row-item">
                <p class="table-text bold">{{ $guild_info->pointss }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    @include('ranking.menu-sidebar')
  </div>

@endsection