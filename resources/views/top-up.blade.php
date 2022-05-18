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
						<li><a><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>TopUp</span></a></li><li>TopUp</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Top-Up</h2>

					<div class="widget-item">
				          @if($top_up)
			              <h3 class="bold">{{ $top_up->title }}</h3>
			              <img src="{{ asset('/images/topup/'.$top_up->img)}}" style="width: 100%">
			              <p class="post-open-text">{!! $top_up->desc !!}</p>
			              @endif
			      	</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection