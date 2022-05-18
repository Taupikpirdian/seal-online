@extends('layouts.app')
@section('content')
 <div id="banner-slider-2" class="banner-slider v2">
    <div class="slider-items">
    @foreach($sliders as $i=>$slider)
      <div class="slider-item slider-item-1" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url(/images/slider/thumbs/{{ $slider->img }}) no-repeat center !important;    background-size: cover;">
        <div class="slider-item-wrap">
          <div class="post-preview huge centered gaming-news">
            <a href="#" class="tag-ornament">{{ $slider->category->name }}</a>
            <a href="#" class="post-preview-title">{{ $slider->title }}</a>
            <div class="break"></div>
          </div>
        </div>
      </div>
    @endforeach
    </div>

    <div class="banner-slider-preview-wrap">
      <div id="sliderb2-controls" class="banner-slider-controls">
        <div class="control-previous">
          <svg class="arrow-icon medium">
            <use xlink:href="#svg-arrow-medium"></use>
          </svg>
        </div>
        <div class="control-next">
          <svg class="arrow-icon medium">
            <use xlink:href="#svg-arrow-medium"></use>
          </svg>
        </div>
      </div>

      <div id="banner-slider-2-thumbs" class="banner-slider-preview">
        <div class="banner-slider-preview-roster">
        @foreach($sliders as $i=>$slider)
          <div class="post-preview tiny negative no-img gaming-news">
            <p class="post-preview-title">{{ $slider->title }}</p>
          </div>
        @endforeach
        </div>
      </div>
    </div>
</div>

@include('layouts.live-news')

  <div class="layout-content-1 layout-item-3-1 search-pad grid-limit content-box-style">
    <div class="layout-body layout-item centered">
      <div class="layout-item centered">
        <div class="postslide-wrap">
          <div id="postslide-1" class="postslide">
            <div class="news-preview slider-items">
        
            @foreach($beritas as $i=>$berita)
              <div class="post-preview picture big gaming-news">
                <a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'>
                  <div class="post-preview-img-wrap">
                    <figure class="post-preview-img liquid">
                      <img src="{{ asset('/images/berita/thumbs/'.$berita->img)}}" alt="post-{{ $berita->id }}">
                    </figure>
                    <div class="post-preview-overlay">
                      <span class="tag-ornament">{{ $berita->category->name }}</span>
                      <p class="post-preview-title">{{ $berita->title }}</p>
                      <p class="post-preview-text">{!! str_limit($berita->desc, 100) !!}</p>
                    </div>
                    <div class="loading-line"></div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>

            <div class="news-roster slider-roster">
            @foreach($beritas as $i=>$berita)
              <div class="post-preview picture short gaming-news">
                <div class="post-preview-img-wrap">
                  <figure class="post-preview-img liquid">
                    <img src="{{ asset('/images/berita/thumbs/'.$berita->img)}}" alt="post-{{ $berita->id }}">
                  </figure>
                  <div class="post-preview-overlay">
                    <p class="post-preview-title">{{ $berita->title }}</p>
                  </div>
                  <span class="tag-ornament">{{ $berita->category->name }}</span>
                </div>
                <div class="loading-line"></div>
                <div class="overlay"></div>
              </div>
            @endforeach
            </div>
          </div>

          <div id="postslide-1-controls" class="slider-controls blue">
            <div class="slider-control big control-previous">
                <svg class="arrow-icon medium">
                  <use xlink:href="#svg-arrow-medium"></use>
                </svg>
            </div>

            <div class="slider-control big control-next">
                <svg class="arrow-icon medium">
                  <use xlink:href="#svg-arrow-medium"></use>
                </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="layout-item padded own-grid">
        <div class="section-title-wrap violet">
          <h2 class="section-title medium">Event Terbaru</h2>
          <div class="section-title-separator"></div>

          <div id="esnews-slider1-controls" class="carousel-controls slider-controls violet">
            <div class="slider-control control-previous">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
            </div>
            <div class="slider-control control-next">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
            </div>
          </div>
        </div>

        <div id="esnews-slider1" class="carousel">
          <div class="carousel-items">
            @foreach($events as $i=>$event)
              <div class="post-preview e-sport">
                <a href='{{URL::action("HomeController@detailEvent",array($event->slug))}}'>
                  <div class="post-preview-img-wrap">
                    <figure class="post-preview-img liquid">
                      <img src="{{ asset('/images/event/'.$event->img)}}" alt="post-{{ $event->id }}">
                    </figure>
                  </div>
                </a>

                <a href='{{URL::action("HomeController@detailEvent",array($event->slug))}}' class="tag-ornament">{{ $event->category->name }}</a>

                <a href='{{URL::action("HomeController@detailEvent",array($event->slug))}}' class="post-preview-title">{{ $event->title }}</a>
                <div class="post-author-info-wrap">
                  <p class="post-author-info small light">By <a href="#" class="post-author">{{ $event->user->name }}</a><span class="separator">|</span>{{ Carbon\Carbon::parse($event->created_at)->formatLocalized('%d %B %Y')}}</p>
                </div>
                <p class="post-preview-text">{!! str_limit($event->desc, 100) !!}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="layout-sidebar layout-item gutter-medium">
      <div class="widget-sidebar">
        <form class="sidebar-search-form">
          <div class="submit-input full blue">
            <input type="text" id="sidebar-search1" name="sidebar-search1" placeholder="Search articles here...">
            <button class="submit-input-button">
              <svg class="search-icon small">
                <use xlink:href="#svg-search"></use>
              </svg>
            </button>
          </div>
        </form>
      </div>

      <div class="widget-sidebar">
        <div class="section-title-wrap blue">
          <h2 class="section-title medium">Online Player</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="social-links medium centered mob-box">
          <p class="post-preview-title glow">{{$count_user_onlines}}</p>
        </div>
      </div>

      <div class="widget-sidebar">
        <div class="section-title-wrap blue">
          <h2 class="section-title medium">Forum List</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="social-links medium centered mob-box">
          @foreach($forums as $i=>$forum)
          <a href="{{ $forum->link }}" class="bubble-ornament big fb">
            <img class="user-avatar img-forum-home" src="{{ asset('/images/forum/'.$forum->icon)}}" alt="user-05">
            <p class="bubble-ornament-text">{{ $forum->name }}</p>
          </a>
          @endforeach
        </div>
      </div>

      <div class="widget-sidebar">
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Top Kill</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings">
          <div class="table-row-header">
            <div class="table-row-header-item position">
              <p class="table-row-header-title">Position</p>
            </div>

            <div class="table-row-header-item">
              <p class="table-row-header-title">Match Record</p>
            </div>
          </div>

          <div class="table-rows">
            @foreach ($top_kills as $key => $top_kill)
              <div class="table-row">
                <div class="table-row-item position">
                  <p class="table-text">{{$key+1}}</p>

                  <div class="team-info-wrap">
                    <img class="team-logo small" src="front/assets/img/teams/logos/01.png" alt="logo-01">
                    
                    <div class="team-info">
                      <p class="team-name">{{ $top_kill->char_name }}</p>
                      {{-- <p class="team-country">{{ $top_kill->char_name }}</p> --}}
                    </div>
                  </div>
                </div>

                <div class="table-row-item">
                  <p class="table-text bold">{{ $top_kill->gw_score_t }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="widget-sidebar">
        @foreach($iklans as $i=>$iklan)
        <div class="">
          <a target="_blank" href="{{ $iklan->link }}">
            <img class="promo-ad-img" alt="promo-ad-1" src="{{ asset('/images/iklan/thumbs/'.$iklan->img)}}">
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>


@endsection