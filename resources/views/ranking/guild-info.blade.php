@extends('layouts.app2')
@section('content')

  {!! Html::style('front/assets/css/custom2.css') !!}

<main id="main" role="main">
  <div id="contents" class="">
    <div id="contents_left">
      <section id="login">
        @include('layouts.login')
      </section>
      <section id="rangked">
        @include('ranking.menu-sidebar')
      </section>
    </div>
    <div id="contents_center2">
      <article id="party_body" class="guide_body">
        <div id="topicpath">
          <ol>
            <li><a><span itemprop='title'>HOME</span></a></li><li><a href='create.html' itemprop='url'><span itemprop='title'>Ranking</span></a></li><li>Guild Info Ranking</li></ol>
        </div>

        <div class="box" id="guide-section">
          <h2>Guild Info Ranking</h2>
          <div class="widget-item">
            <div class="section-title-wrap blue small-space">
              <p class="section-title medium">Guild Info Ranking</p>
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
      </article>
    </div>
  </div>
</main>

@endsection