<div class="live-news-widget-wrap">
  <div class="live-news-widget grid-limit">
    <div class="live-news-widget-stairs left red">
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
    </div>

    <div class="live-news-widget-stairs right blue">
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
      <div class="live-news-widget-stair"></div>
    </div>

    <div class="live-news-widget-title-wrap">
      <img class="live-news-widget-icon" src="front/assets/img/icons/live-news-icon.png" alt="live-news-icon">
      <p class="live-news-widget-title">Live News</p>
    </div>

     <marquee direction="left" style="color: white; font-family: sans-serif; padding: 10px;font-size: 15px;">
      @foreach($beritas as $i=>$berita)
       <a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}' style="color: #fff"><b>{{ $berita->title }}:</b></a> &nbsp; {{ strip_tags($berita->desc) }} &nbsp; <a style="color: #fff" href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'><b>Read More</b></a>
      @endforeach
    </marquee>
  </div>
</div>