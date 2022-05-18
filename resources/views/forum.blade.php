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
						<li><a><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Forum</span></a></li><li>Forum</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Forum</h2>

					<div class="widget-item">
						<div class="section-title-wrap blue small-space">
				          <p class="section-title medium">Forum</p>
				          <div class="section-title-separator"></div>
				        </div>
				        
				         <div class="activity-items">
			                @foreach($forums as $i=>$forum)
			                  <div class="activity-item">
			                    <img class="user-avatar" src="{{ asset('/images/forum/'.$forum->icon)}}" alt="user-05">
			                    <div class="activity-item-row">
			                      <a href='{{ $forum->link }}' class="activity-item-title">{{ $forum->name }}</a>
			                    </div>
			                    <p class="border-forum"  style="border: solid {{ $forum->color }};"></p>
			                    <p class="nolinehight">{{ $forum->desc }}</p>
			                  </div>
			                @endforeach
			              </div>
			      	</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection