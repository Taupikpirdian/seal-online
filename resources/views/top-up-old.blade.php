@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Top-Up</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Top-Up</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Portal Top-Up</span>
      </p>
    </div>
  </div>
  @include('layouts.live-news')

<br>
<div class="layout-content-full grid-limit content-box-style">
  <div class="tab-wrap">
    <div class="tab-body">
      <div class="layout-item gutter-big padded-bottom">
        <div class="post-open game-review">

          <div class="post-open-content v2 grid-limit">
            <div class="post-open-body">
              @if($top_up)
              <h3 class="bold">{{ $top_up->title }}</h3>

              <img src="{{ asset('/images/topup/'.$top_up->img)}}" style="width: 100%">
              <p class="post-open-text">{!! $top_up->desc !!}</p>
              @endif
          	</div>
          </div>
        </div>
      </div>
   </div>
  </div>
</div>
@endsection