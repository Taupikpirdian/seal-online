@extends('layouts.app2')
@section('content')

  {!! Html::style('front/assets/css/custom2.css') !!}

<main id="main" role="main">
	<div id="contents" class="">
		<div id="contents_left">
			<section id="login">
				@include('layouts.login')
			</section>
		</div>
		<div id="contents_center2">
			<article id="party_body" class="guide_body">
				<div id="topicpath">
					<ol>
						<li><a><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>guide</span></a></li><li>guide class</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>GUIDE</h2>
					<div class="widget-item">
				        <div class="section-title-wrap blue small-space">
				          <p class="section-title medium">Classes</p>
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
			</article>
		</div>
	</div>
</main>

@endsection