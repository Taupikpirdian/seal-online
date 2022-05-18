@extends('layouts.landing')
@section('content')
<div class="row mt-5 mb-5">    
    <!-- left sidebar  -->
    @include('include.components._left-slide')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-1">
                <div style="background: red; padding: 0px 45px 0px 7px; border-radius: 5px;">
                    <p style="color: white;">!notice</p>
                </div>
            </div>
            <div class="col-lg">
                <!-- Codes by HTMLcodes.ws -->
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    @foreach($running_texts as $key=>$running_text)
                    <a href="{{ $running_text->url }}" class="mr-5">
                        <span style="background: orange; color: white; font-size: 15px; padding: 0 5px 0px 5px;">{{ $running_text->title }}</span> {{ $running_text->text }} @if($running_text->url) baca selengkapnya disini @endif
                    </a>
                    @endforeach
                </marquee>
            </div>
        </div>
        <div class="row">
            <div class="col-lg mb-5">
                <div id="newsbox" class="row mt-3">
                    <div class="col-lg">
                        <div style="position: absolute;"><span class="far fa-comment-alt" style="font-size: 18px;"></span></div>
                        <h1 class="h_newsbox1">Whats New <span></span><a href="#">seputar seal online</a></h1>
                        <!-- <img id="h_newsbox1" src="{{ asset('assets/web.archive.org/web/20070703053250im_/http_/www.sealindo.com/images/newsbox/h_whatsnew.gif') }}" alt=""> -->
                        <ul class="newsbar nav nav-tabs" role="tablist">
                            <li class="b_whatsnew">
                                <a href="#tab1" data-toggle="tab" role="tab"><img src="{{ asset('assets/web.archive.org/web/20070703054104im_/http_/www.sealindo.com/images/newsbox/bar_whatsnew.gif') }}" alt=""></a>
                            </li>
                            <li class="b_more nav-item">
                                <a href="#"><img src="{{ asset('assets/web.archive.org/web/20070703053357im_/http_/www.sealindo.com/images/newsbox/bar_more.gif') }}" alt=""></a>
                            </li>
                            <li class="b_berita nav-item">
                                <a href="#tab2" data-toggle="tab" role="tab"><img src="{{ asset('assets/web.archive.org/web/20070703053344im_/http_/www.sealindo.com/images/newsbox/bar_berita.gif') }}" alt=""></a>
                            </li>
                            <li class="b_acara nav-item">
                                <a href="#tab3" data-toggle="tab" role="tab"><img src="{{ asset('assets/web.archive.org/web/20070703054111im_/http_/www.sealindo.com/images/newsbox/bar_acara.gif') }}" alt=""></a>
                            </li>
                            <li class="b_info nav-item">
                                <a href="#tab4" data-toggle="tab" role="tab"><img src="{{ asset('assets/web.archive.org/web/20070703053348im_/http_/www.sealindo.com/images/newsbox/bar_info.gif') }}" alt=""></a>
                            </li>
                            <li class="b_gameup nav-item">
                                <a href="#tab5" data-toggle="tab" role="tab"><img src="{{ asset('assets/web.archive.org/web/20070703053357im_/http_/www.sealindo.com/images/newsbox/bar_gameup.gif') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg newscontent tab-content">
                        <!-- all -->
                        <div class="tab-pane active size" id="tab1" role="tabpanel">
                            @foreach($all_datas as $key=>$data)
                            <p>
                                <span class="{{ $data->class }}"><a href='{{URL::action("HomeController@detailBerita",array($data->slug))}}'>{{ $data->title }}</a></span>
                                <span class="newstime">{{ $data->created_at }}</span>
                            </p>
                            @endforeach
                            {!! $all_datas->appends(request()->except('page'))->links() !!}
                        </div>
                        <!-- berita  -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            @foreach($beritas as $key=>$berita)
                            <p>
                                <span class="c_berita"><a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'>{{ $berita->title }}</a></span>
                                <span class="newstime">{{ $berita->created_at }}</span>
                            </p>
                            @endforeach
                            {!! $beritas->appends(request()->except('page'))->links() !!}
                        </div>
                        <!-- acara -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            @foreach($events as $key=>$event)
                            <p>
                                <span class="c_acara"><a href='{{URL::action("HomeController@detailBerita",array($event->slug))}}'>{{ $event->title }}</a></span>
                                <span class="newstime">{{ $event->created_at }}</span>
                            </p>
                            @endforeach
                            {!! $events->appends(request()->except('page'))->links() !!}
                        </div>
                        <!-- info -->
                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                            @foreach($infos as $key=>$info)
                            <p>
                                <span class="c_info"><a href='{{URL::action("HomeController@detailBerita",array($info->slug))}}'>{{ $info->title }}</a></span>
                                <span class="newstime">{{ $info->created_at }}</span>
                            </p>
                            @endforeach
                            {!! $infos->appends(request()->except('page'))->links() !!}
                        </div>
                        <!-- game up -->
                        <div class="tab-pane fade" id="tab5" role="tabpanel">
                            @foreach($game_ups as $key=>$game_up)
                            <p>
                                <span class="c_gameup"><a href='{{URL::action("HomeController@detailBerita",array($game_up->slug))}}'>{{ $game_up->title }}</a></span>
                                <span class="newstime">{{ $game_up->created_at }}</span>
                            </p>
                            @endforeach
                            {!! $game_ups->appends(request()->except('page'))->links() !!}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div id="gallery">
                    <div class="he">
                        <h2 class="h_gallery"><span>Seal Online Gallery</span></h2>
                        <div class="more">
                            <a href="download/index.html"><span>more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg gallery_img">
                @foreach($galleries as $key=>$gallery)
                    @if($gallery->img_medium)
                        <a href="#"><img src="{{ asset('/images/gallery/800/'.$gallery->img_medium)}}" alt=""></a>
                    @else
                        <a href="#"><img src="{{ asset('/images/gallery/1024/'.$gallery->img_height)}}" alt=""></a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection
