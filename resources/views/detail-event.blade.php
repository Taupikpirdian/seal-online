@extends('layouts.app2')
@section('content')

{!! Html::style('front/assets/css/custom2.css') !!}

<main id="main" role="main">
	<div id="contents" class="">
		<div id="contents_left">
			<section id="login">
				@include('layouts.login')
			</section>
			<nav id="nav_second" style="top: 0px;">
				@include('layouts.nav-content')
			</nav>
		</div>
		<div id="contents_center2">
			<article id="party_body" class="guide_body">
				<div id="topicpath">
					<ol>
					<li itemscope itemtype=""><a href='{{ url('/') }}' itemprop='url'><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Detail</span></a></li><li>Detail Event</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Detail Event</h2>
					<div class="detail">
						<article id="topic" class="info_list type_eups4 type_euxbox type_ps4 type_windows type_xbox">
							<ul class="head">
								<li class="category category_event">Event</li>
								<li class="date">
									<time class="date_time" itemprop="datePublished" content="2019-06-24" datetime="2019-06-24">{{ \Carbon\Carbon::parse($event->created_at)->format('d-m-Y') }}</time>
								</li>
								<li class="subject" itemprop="name">Seal Online : {{ $event->title }}</li>
							</ul>

							<div class="description">
		              			<img src="{{ asset('/images/event/thumbs/'.$event->img)}}" style="width: 100%">
								<br>
								<br>
								<div class="info_content content" itemprop="articleDescription">{!! $event->desc !!}  
								</div>
							</div>
						</article>
					</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection