@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Ranking Couple</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Ranking Couple</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Ranking - Couple</span>
      </p>
    </div>
  </div>

  @include('layouts.live-news')

  <div class="layout-content-1 layout-item-3-1 grid-limit content-box-style">
    <div class="layout-body layout-item gutter-big">
      <div class="widget-item">
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Couple Ranking</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings full">
          <div class="table-row-header">
            <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Position Rank</p>
            </div>

            {{-- <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Emblem</p>
            </div> --}}
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Nama Karakter</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Nama Couple</p>
            </div>

            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Point</p>
            </div>
          </div>
    
          @php
            $r=0;
          @endphp
          @foreach ($msgfriends as $key => $msgfriend)
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

              {{-- <div class="table-row-item">
              <div class="team-info-wrap">
                  <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
                </div>
              </div> --}}

              <div class="table-row-item">
                <div class="team-info">
                  <p class="table-text bold">{{ $msgfriend->char_name }}</p>
                </div>
              </div>
    
              <div class="table-row-item">
                <p class="table-text bold">{{ $msgfriend->couple_name }}</p>
              </div>
    
              <div class="table-row-item">
                <p class="table-text bold">{{ $msgfriend->couple_daycnt }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    @include('ranking.menu-sidebar')
    
  </div>

@endsection