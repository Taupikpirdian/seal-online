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
					<li><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Detail</span></a></li><li>Download Game</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Informasi Download Game</h2>
					<div class="detail">
						<article id="topic" class="info_list type_eups4 type_euxbox type_ps4 type_windows type_xbox">
							<ul class="head">
								<li class="category category_news">Info</li>
								<li class="date">
									<time class="date_time" itemprop="datePublished">{{ \Carbon\Carbon::parse($download->created_at)->format('d-m-Y') }}</time>
								</li>
								<li class="subject" itemprop="name">Seal Online : {{ $download->title }}</li>
							</ul>

							<div class="description">
								  <br>
								  <br>
								<div class="info_content content" itemprop="articleDescription">{!! $download->desc !!}  
								</div>
                <div class="post-open-text">
                  <h3>Link Download game-review</h3>
                  <br>
                  <a class="btn btn-default" href='{{ $download->link }}'>Download Here!</a>
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