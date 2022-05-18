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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href='../home.html' itemprop='url'><span itemprop='title'>HOME</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href='create.html' itemprop='url'><span itemprop='title'>List</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">List Berita</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>List Berita</h2>
					<div class="infolist_body_01 detail">

				<section>
					<ul id="head">
						<li class="category">Category</li>
						<li class="date">Date</li>
						<li class="subject">Title</li>
					</ul>

					<ul id="outer">
					@foreach($beritas as $i=>$berita)
						<li id="topic_22255" class="type_eups4 type_euxbox type_ps4 type_windows type_xbox">
							<a class="url" href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'>
								<ul class="inner">
									<li class="category category_event">news</li>
									<li class="date">{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y') }}</li>
									<li class="subject">{{ $berita->title }}</li>
								</ul>
							</a>
						</li>
					@endforeach
					</ul>

					<ul id="topic_pager" style="text-align: center;">
						{!! $beritas->appends(request()->except('page'))->links() !!}
					</ul>
				</section>
			</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection