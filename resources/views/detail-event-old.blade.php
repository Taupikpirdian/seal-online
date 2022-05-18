@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">{{ $event->title }}</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Event</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Detail Event</span>
      </p>
    </div>
  </div>

<br>
<div class="layout-content-full grid-limit content-box-style">
  <div class="tab-wrap">
    <div class="tab-body">
      <div class="layout-item gutter-big padded-bottom">
        <div class="post-open game-review">

          <div class="post-open-content v2 grid-limit">
            <div class="post-open-body">
              
              <h3 class="bold">{{ $event->title }}</h3>

              <img src="{{ asset('/images/event/thumbs/'.$event->img)}}" style="width: 100%">
              <p class="post-open-text">{!! $event->desc !!}</p>
              
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>
</div>
@endsection