@extends('layouts.app')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="banner-wrap e-sport">
  <div class="banner grid-limit">
    <h2 class="banner-title">Informasi Permainan Seal Online</h2>
    <p class="banner-sections">
      <span class="banner-section">Home</span>
      <svg class="arrow-icon">
        <use xlink:href="#svg-arrow"></use>
      </svg>
      <span class="banner-section">Guide Game</span>
      <svg class="arrow-icon">
        <use xlink:href="#svg-arrow"></use>
      </svg>
      <span class="banner-section">Informasi Permainan Seal Online</span>
    </p>
  </div>
</div>
  @include('layouts.live-news')

<br>
  <div class="layout-content-1 layout-item-3-1 grid-limit content-box-style">
    <div class="layout-body layout-item gutter-big">
      <div class="widget-item">
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Classes</h2>
          <div class="section-title-separator"></div>
        </div>

        <div>
          {{-- @if($classes) --}}
          {{-- <p>{{ $classes->detail_classes }}</p> --}}
          {{-- @endif --}}
        </div>

        <div class="tabset">
          @foreach ($guides as $key => $guide)
            <input type="radio" name="tabset" id="tab{{$guide->id}}" aria-controls="marzen{{$guide->id}}" {{($key==0)? 'checked':''}}>
            <label for="tab{{$guide->id}}">{{ $guide->title }}</label>
          @endforeach
          
          <div class="tab-panels">
            @foreach ($guides as $key => $guide_detail)
              <section id="marzen{{$guide_detail->id}}" class="tab-panel img-clases-item">
                <div>
                  <img src="{{ asset('images/guide/'.$guide_detail->img) }}">
                  {!! $guide_detail->desc !!}
                </div>
                <div class="info-quest">
                  {!! $guide_detail->informasi_quest !!}
                </div>
              </section>
            @endforeach
          </div>


        </div>
      </div>
    </div>

    <div class="layout-sidebar layout-item gutter-medium">




      <div class="widget-sidebar style-sidebar">
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Game Guide</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings">
          <ul class="dropdown-inner-list accordion-content accordion-open">
            <li class="dropdown-inner-list-item">
              <p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/the_warrior_big.png"></i>Classes</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection