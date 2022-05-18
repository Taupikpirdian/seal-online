@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Informasi Download Game</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Download Game</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Download Game</span>
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
        @if($download)
        <p class="post-open-text bold">{{ $download->title }}</p>
        <p class="post-open-text">{!! $download->desc !!}.</p>
        <div class="post-open-text">
          <h3>Link Download game-review</h3>
          <br>
          <a class="button blue full" href='{{ $download->link }}'>Download Here!</a>
        </div>
        @endif
    	</div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection