@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Forum</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Forum</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Portal Forum</span>
      </p>
    </div>
  </div>
  @include('layouts.live-news')

  <div class="layout-content-full grid-limit content-box-style">
    <div class="tab-wrap">
      <div class="tab-body">
        <div class="tab-item spaced">
          <div class="layout-content-4 v2 layout-item-1-4">
            <div class="layout-body">
              <div class="activity-items">
              @foreach($forums as $i=>$forum)
                <div class="activity-item">
                  <img class="user-avatar" src="{{ asset('/images/forum/'.$forum->icon)}}" alt="user-05">
                  <div class="activity-item-row">
                    <a href='{{ $forum->link }}' class="activity-item-title">{{ $forum->name }}</a>
                  </div>
                  <p class="border-forum"  style="border: solid {{ $forum->color }};"></p>
                  <p class="nolinehight">{{ $forum->desc }}</p>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection