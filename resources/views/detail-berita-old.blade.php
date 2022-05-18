@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">{{ $berita->title }}</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Berita</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Detail Berita</span>
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
              
              <h3 class="bold">{{ $berita->title }}</h3>

              <img src="{{ asset('/images/berita/thumbs/'.$berita->img)}}" style="width: 100%">
              <p class="post-open-text">{!! $berita->desc !!}</p>
              
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>
</div>
@endsection