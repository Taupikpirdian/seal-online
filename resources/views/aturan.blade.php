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
						<li><a><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Rules</span></a></li><li>Rules</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Rules</h2>

					<div class="widget-item">
				          @if($rule)
			              <h3 class="bold">{{ $rule->title }}</h3>
			              {!! $rule->desc !!}
			              @endif
			      	</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection