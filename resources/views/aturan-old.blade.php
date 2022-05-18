@extends('layouts.app')
@section('content')
<div class="banner-wrap e-sport">
  <div class="banner grid-limit">
    <h2 class="banner-title">Informasi Aturan/Rules Game</h2>
    <p class="banner-sections">
      <span class="banner-section">Home</span>
      <svg class="arrow-icon">
        <use xlink:href="#svg-arrow"></use>
      </svg>
      <span class="banner-section">Aturan/Rules Game</span>
      <svg class="arrow-icon">
        <use xlink:href="#svg-arrow"></use>
      </svg>
      <span class="banner-section">Informasi Aturan/Rules Game</span>
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
              @if($rule)
              <h3 class="bold">{{ $rule->title }}</h3>
              {!! $rule->desc !!}
              @endif
          	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection