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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href='../home.html' itemprop='url'><span itemprop='title'>HOME</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href='create.html' itemprop='url'><span itemprop='title'>List</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">Event</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>List Event</h2>
					<div class="infolist_body_01 detail">

						<section>
							<ul id="head">
								<li class="category">Category</li>
								<li class="date">Date</li>
								<li class="subject">Title</li>
							</ul>

							<ul id="outer">
								@foreach($events as $i=>$event)
								<li id="topic_23308" class="type_windows">
									<a class="url" href='{{URL::action("HomeController@detailEvent",array($event->slug))}}'>
										<ul class="inner">
											<li class="category category_event">event</li>
											<li class="date">{{ \Carbon\Carbon::parse($event->created_at)->format('d-m-Y') }}</li>
											<li class="subject">{{ $event->title }}</li>
										</ul>
									</a>
								</li>
							@endforeach
							</ul>

							<ul id="topic_pager" style="text-align: center;">
								{!! $events->appends(request()->except('page'))->links() !!}
							</ul>
						</section>
					</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection