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
						<li><a><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Ranking</span></a></li><li>Couple Ranking</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Couple Ranking</h2>
					<div class="widget-item">
				        <div class="section-title-wrap blue small-space">
				          <p class="section-title medium">Couple Ranking</p>
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
			</article>
		</div>
	</div>
</main>

@endsection