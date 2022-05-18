
/* -------------------------------------- common preparation -------------------------------------- */

$(function() {
	/* UA */
	videoFlag = false;
	strUA = navigator.userAgent.toLowerCase();

	/* flash */
	isFlashInstalled = function(){
		if(navigator.plugins["Shockwave Flash"]){
			return true;
		} try {
			new ActiveXObject("ShockwaveFlash.ShockwaveFlash");
			return true;
		} catch (a){
			return false;
		}
	}();

	/* inner jump scrool */
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "easeInOutCubic");
		return false;
	});

	/* jhover opacity */
	$(".jhover").hover(function(){
		$(this).stop().animate({opacity: 0.82}, 50);
	},function(){
		$(this).stop().animate({opacity: 1}, 300);
	});

	/* twitter connect */
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

	/* facebook connect */
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/"+sociallang+"/all.js#xfbml=1&appId=558577934160344";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	/* global nav animation */
	$('#nav_g .outer > li').hover(
		function () {
			hFlag = false;
			$('#nav_g_bg').css('display','block').stop(true,false).animate({opacity:1,top:0},500,'easeOutQuart');
			$('#nav_g .outer li .inner').css('display','block').stop(true,false).animate({opacity:1,marginTop:0},500,'easeOutQuart');
		},
		function () {
			$('#nav_g_bg').stop(true,false).delay(100).animate({opacity:0,top:-20},500,'easeInQuart');
			$('#nav_g .outer li .inner').stop(true,false).delay(100).animate({opacity:0,marginTop:-20},500,'easeInQuart');
		}
	);

	/* global nav scale animation */
	if (strUA.indexOf("msie 8.")==-1){
		$('#nav_g .outer > li').hover(
			function () {
				$('a.caption',this).stop(true,false).animate({scale: 1.15},100);
			},
			function () {
				$('.caption',this).stop(true,false).animate({scale: 1},400);
			}
		);
		$('#nav_g .inner a').hover(
			function () {
				$(this).stop(true,false).animate({scale: 1.09},100,'easeOutQuart').css( 'background-color', 'rgba(255,255,255,0.8)').css('color','rgba(0,118,122,1)').css('box-shadow','1px 1px 2px rgba(0,0,0,0.2)');
			},
			function () {
				$(this).stop(true,false).animate({'background-color':'rgba(255,255,255,0)',scale: 1},400).css('color','rgba(0,0,0,1)').css('box-shadow','1px 1px 2px rgba(0,0,0,0)');
			}
		);
	} else {
		$('#nav_g .inner a').hover(
			function () {
				$(this).css( 'background-color', '#fff');
			},
			function () {
				$(this).css( 'background-color', 'transparent');
			}
		);
	}

	/* global nav bg animation */
	$('#nav_g_bg').hover(
		function () {
			hFlag = false;
			$('#nav_g_bg').css('display','block').stop(true,false).animate({opacity:1,top:0},500,'easeOutQuart');
			$('#nav_g .outer li .inner').css('display','block').stop(true,false).animate({opacity:1,marginTop:0},500,'easeOutQuart');
		},
		function () {
			hFlag = true;
			$('#nav_g_bg').stop(true,false).delay(100).animate({opacity:0,top:-20},500,'easeInQuart');
			$('#nav_g .outer li .inner').stop(true,false).delay(100).animate({opacity:0,marginTop:-20},500,'easeInQuart');
			if (hFlag){
				setTimeout(function() {
					if (hFlag){
						hFlag = true;
						$('#nav_g_bg').css('display','none');
						$('#nav_g .outer li .inner').css('display','none');
					}
				},600);
			}
		}
	);

	/* regist off */
	/*$(function(){
		if ($("html").hasClass("register_off")){
			$("a.thickbox").removeClass("thickbox").removeAttr("href").addClass("gray");
		}
		if ($("html").hasClass("forum_off")){
			$("#gm_02").find("a").removeAttr("href").addClass("gray");
			$("#c_community > a").removeAttr("href");
			$("#c_community ul.sub li:eq(0)").find("a").removeAttr("href").addClass("gray");
			$("#other_body.sitemap .unit .list_sitemap:eq(1) li:eq(0) > a").removeAttr("href");
			$("#other_body.sitemap .unit .list_sitemap:eq(1) li:eq(0) > ul.sub > li:eq(0)").find("a").removeAttr("href").addClass("gray");
		}
		if ($("html").hasClass("faq_off")){
			$("#gm_03 ul > li:nth-of-type(1)").find("a").removeAttr("href").addClass("gray");
			$("#c_support > a").removeAttr("href");
			$("#c_support ul.sub li:eq(0)").find("a").removeAttr("href").addClass("gray");
			$("#other_body.sitemap .unit ul.list_sitemap:eq(1) > li.category:eq(2) > a").removeAttr("href");
			$("#other_body.sitemap .unit  ul.list_sitemap:eq(1) > li.category:eq(2) > ul.sub > li:eq(0)").find("a").removeAttr("href").addClass("gray");
			$("#c_other ul li:eq(0) a").attr("href","<?=base_url()?>other/soon.html");
		}
		if ($("html").hasClass("download_off")){
			$("#download_body #download_btn_win").removeAttr("href").addClass("before");
			$("#download_btn").find("a").removeAttr("href").addClass("before");
		}
	});*/
});


/* -------------------------------------- homeScript -------------------------------------- */
$(function() {
	if( getFil == "home" || getDir == "/"){
		homeScript();
	}
});

function homeScript(){
	/* info tab change */
	$("#info .box .tab ul li").click(function(){
		var listName = $(this).attr("class").replace('slvzr-hover','');
		if( listName.indexOf("active")==-1){
			$("#info .box .tab ul li").removeClass("active");
			$("#info .box .list > div").removeClass("active").hide("normal");
			$(this).addClass("active");
			$("#info .box .list .list_" + listName).addClass("active").show("normal");

			$("#info .box .list .list_" + listName +" li").css({opacity: 0, left: '40px'});
			$("#info .box .list .list_" + listName +" li").each(function(i){
				$(this).delay(25 * i).animate({opacity: 1, left: '0'}, 300);
			});
		}
	});

	/* balloon blink */
	setInterval(function() {
	  $('#promotion .blink').css({opacity: '0'});
		setTimeout(function(){
			$('#promotion .blink').css({opacity: '1'});
		}, 500);
	}, 5500);

	/* bnr right hover text */
	$("#bnr_right a").hover(
	  function(){
	    $("span",this).stop(true,false).animate({"margin-top":"-20px"},100,'easeInQuart');
	  },
	  function(){
	    $("span",this).stop(true,false).animate({"margin-top":"0px"},100,'easeInQuart');
	  }
	);

	/* social tab change */
	$("#social .tab ul li").click(function(){
		var listName = $(this).attr("class");
		if( listName.indexOf("active")==-1){
			if( listName.indexOf("loading")!=-1){
//				loadYoutubeList(listName);
				listName = "youtube";
			}
			$("#social .tab ul li").removeClass("active");
			$("#social .box > div").removeClass("active").hide("normal");
			$(this).addClass("active");
			$("#social .box > div." + listName).addClass("active").show("normal");
		}
	});
}

/* information animate */
function infoFirstAnimate() {
	$('#info_all .head').each(function(i){
		$(this).delay(105 * i).animate({opacity: 1, left: '0'}, 300);
	});
}

function loadYoutubeList(listName) {
	$("#social .tab ul li.youtube").removeClass("loading");
	/* youtube channel get data */
	var url = "//gdata.youtube.com/feeds/api/playlists/PLvZ6NfCtsu_zJ5sa-Iib5jpG4_Gp0_psv";
	$.getJSON(url, { alt:'json' }, function(json) {
		var entry = json.feed.entry;
		var str = '';
		for (var i = 0; i < entry.length; i++) {
			var media = entry[i].media$group;
			var author = entry[i].author[0].name.$t;
			var src = media.media$thumbnail[2].url;
			var href = media.media$player[0].url;
			var title = media.media$title.$t;
			var duration = formatDuration(media.yt$duration.seconds);
			str += '<li><a href="' + href + "&vq=hd720" + '" target="_blank">';
			str += '<div class="left"><img class="thumb" src="' + src + '"><span class="duration">' + duration + '</span></div>';
			str += '<div class="right"><span class="title">' + title + '</span></div>';
			str += '</a></li>';
		}
		$('ul#playList .dummy').remove();
		$('ul#playList').append(str);
	});
	function formatDuration(duration) {
		var hour = Math.floor(duration / 3600);
		var minute = Math.floor(duration / 60) % 60;
		var second = duration % 60;
		if (hour) {
			return hour.toString() + ':' + zero(minute) + ':' + zero(second);
		} else {
			return minute.toString() + ':' + zero(second);
		}
	}
	function zero(num) {
		if (num < 10) {
			return '0' + num.toString();
		} else {
			return num.toString();
		}
	}
}

/* -------------------------------------- layoutSecond -------------------------------------- */
$(function() {
	if( getFil !== "home" && getDir !== "/"){
		layoutSecondScript();
	}
});

function layoutSecondScript(){
	/* nav_second active */
	$('#nav_second .' + getDir).addClass("active");
	$('#nav_second .' + getDir + ' .' + getFil).addClass("active");
	$('#nav_second .' + getDir + ' .' + getFil + ' a').removeAttr("href");
	/* nav_country active */
	$("#nav_country").css('display','block');
	/* nav_second scrool */
	$(window).on("load", function() {
		setTimeout(function(){
			var nav = $("#nav_second, #nav_country");
			var offset = nav.offset();
			var offsetReset = offset.top - 30;
			var offset_limit = $("body").height() - 600;

			function nav_fixed(){
				if(($(window).scrollTop() > offsetReset) && ($(window).scrollTop() < offset_limit)) {
					nav.stop(true,false).animate({'top':$(window).scrollTop() - offsetReset},400,"easeOutQuint");
				} else if($(window).scrollTop() < offset_limit){
					nav.stop(true,false).animate({'top':0},400,"easeOutQuint");
				}
			}
			nav_fixed();
			$(window).scroll(function () {
				nav_fixed();
			});
		}, 700);
	});

	/* contents footer social */
	$(window).on("load", function() {
		$("#contents_center").find('.social_area').append('<ul><li><div class="fb-like" data-href="" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></li><li><a href="https://twitter.com/share" class="twitter-share-button" data-text="" data-lang="en" data-hashtags="onigiri" data-count="vertical">tweet</a></li><li><div class="g-plusone" data-size="tall"></div></li>');
		twttr.widgets.load();
		FB.XFBML.parse();
	  window.___gcfg = {lang: 'en'};
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/platform.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	  //download&charge button
		$("#contents_center").find('.social_area').append('<div class="btn_footer"><a href="#" onClick="redirect_dl(); _gaq.push([\'_trackEvent\', \'ClientDL\', \'click\', \'footer_dlbtn\', 1]);">Download Client</a><a href="https://onigiri.cyberstep.com/charge">Purchase Onigiri Coins</a></div>');
	});

/* contents footer social */
$(window).on("load", function() {
	$("#sp_contents_center").find('.social_area').append('<ul><li><div class="fb-like" data-href="" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></li><li><a href="https://twitter.com/share" class="twitter-share-button" data-text="" data-lang="en" data-hashtags="onigiri" data-count="vertical">tweet</a></li><li><div class="g-plusone" data-size="tall"></div></li>');
	twttr.widgets.load();
	FB.XFBML.parse();
  window.___gcfg = {lang: 'en'};
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  //download&charge button
	$("#sp_contents_center").find('.social_area').append('<div class="btn_footer"><a href="#" onClick="redirect_dl(); _gaq.push([\'_trackEvent\', \'ClientDL\', \'click\', \'footer_dlbtn\', 1]);">Download Client</a><a href="https://onigiri.cyberstep.com/charge">Purchase Onigiri Coins</a></div>');
});

}


/* -------------------------------------- about/chara -------------------------------------- */
// $(function() {
// 	if( getFil == "chara"){
// 		aboutCharaScript();
// 	}
// });

if( getFil == "chara"){
	$(function(){
		aboutCharaScript();
		$('.voice [id^="b"], [class^="back_btn_"]').on("click", function(){
			SoundStop();
		});
	});
}

function SoundStop(){(
	ion.sound.stop("J01_01"),
	ion.sound.stop("J02_01"),
	ion.sound.stop("J03_01"),
	ion.sound.stop("J04_01"),
	ion.sound.stop("J05_01"),
	ion.sound.stop("J06_01"),
	ion.sound.stop("J07_01"),
	ion.sound.stop("J08_01"),
	ion.sound.stop("J09_01"),
	ion.sound.stop("J10_01"),
	ion.sound.stop("J11_01"),
	ion.sound.stop("J12_01"),
	ion.sound.stop("J13_01"),
	ion.sound.stop("J14_01"),
	ion.sound.stop("J15_01"),
	ion.sound.stop("J16_01"),
	ion.sound.stop("J17_01"),
	ion.sound.stop("J18_01"),
	ion.sound.stop("J19_01"),
	ion.sound.stop("J20_01"),
	ion.sound.stop("J21_01"),
	ion.sound.stop("J22_01"),
	ion.sound.stop("J23_01"),
	ion.sound.stop("J24_01"),
	ion.sound.stop("J25_01"),
	ion.sound.stop("J26_01"),
	ion.sound.stop("J27_01"),
	ion.sound.stop("J28_01"),
	ion.sound.stop("J29_01"),
	ion.sound.stop("J30_01"),
	ion.sound.stop("J31_01"),
	ion.sound.stop("J32_01"),
	ion.sound.stop("J33_01"),
	ion.sound.stop("J34_01"),
	ion.sound.stop("J35_01"),
	ion.sound.stop("J36_01"),
	ion.sound.stop("J37_01"),
	ion.sound.stop("J38_01"),
	ion.sound.stop("J39_01"),
	ion.sound.stop("J40_01"),
	ion.sound.stop("J41_01"),
	ion.sound.stop("J42_01"),
	ion.sound.stop("J43_01"),
	ion.sound.stop("J44_01"),
	ion.sound.stop("J45_01"),
	ion.sound.stop("J46_01"),
	ion.sound.stop("J47_01"),
	ion.sound.stop("J48_01"),
	ion.sound.stop("J49_01"),
	ion.sound.stop("J50_01"),
	ion.sound.stop("J51_01"),
	ion.sound.stop("J52_01"),
	ion.sound.stop("J53_01"),
	ion.sound.stop("J54_01"),
	ion.sound.stop("J55_01"),
	ion.sound.stop("J56_01"),
	ion.sound.stop("J57_01"),
	ion.sound.stop("J58_01"),
	ion.sound.stop("J59_01"),
	ion.sound.stop("J60_01"),
	ion.sound.stop("J61_01"),
	ion.sound.stop("J62_01"),
	ion.sound.stop("J63_01"),
	ion.sound.stop("J64_01"),
	ion.sound.stop("J65_01"),
	ion.sound.stop("J66_01"),
	ion.sound.stop("J67_01"),
	ion.sound.stop("J68_01"),
	ion.sound.stop("J69_01"),
	ion.sound.stop("J70_01"),
	ion.sound.stop("J71_01"),
	ion.sound.stop("J72_01"),
	ion.sound.stop("J73_01"),
	ion.sound.stop("J74_01"),
	ion.sound.stop("J75_01"),
	ion.sound.stop("J76_01"),
	ion.sound.stop("J77_01"),
	ion.sound.stop("J78_01"),
	ion.sound.stop("J79_01"),
	ion.sound.stop("J80_01"),
	ion.sound.stop("J81_01"),
	ion.sound.stop("J82_01"),
	ion.sound.stop("J83_01"),
	ion.sound.stop("J84_01"),
	ion.sound.stop("J85_01"),
	ion.sound.stop("J86_01"),
	ion.sound.stop("J87_01"),
	ion.sound.stop("J88_01"),
	ion.sound.stop("J89_01"),
	ion.sound.stop("J90_01"),
	ion.sound.stop("J91_01"),
	ion.sound.stop("J92_01"),
	ion.sound.stop("J93_01"),
	ion.sound.stop("J94_01"),
	ion.sound.stop("J95_01"),
	ion.sound.stop("J96_01"),
	ion.sound.stop("J97_01"),
	ion.sound.stop("J98_01"),
	ion.sound.stop("J99_01"),
	ion.sound.stop("J100_01"),
	ion.sound.stop("J101_01"),
	ion.sound.stop("J102_01"),
	ion.sound.stop("J103_01"),
	ion.sound.stop("J104_01"),
	ion.sound.stop("J105_01"),
	ion.sound.stop("J106_01"),
	ion.sound.stop("J107_01"),
	ion.sound.stop("J108_01"),
	ion.sound.stop("109"),
	ion.sound.stop("110"),
	ion.sound.stop("111"),
	ion.sound.stop("112"),
	ion.sound.stop("113"),
	ion.sound.stop("114"),
	ion.sound.stop("115"),
	ion.sound.stop("116"),
	ion.sound.stop("117"),
	ion.sound.stop("118"),
	ion.sound.stop("119"),
	ion.sound.stop("120"),
	ion.sound.stop("121"),
	ion.sound.stop("122"),
	ion.sound.stop("123"),
	ion.sound.stop("124"),
	ion.sound.stop("125"),
	ion.sound.stop("126"),
	ion.sound.stop("127"),
	ion.sound.stop("128"),
	ion.sound.stop("129"),
	ion.sound.stop("130"),
	ion.sound.stop("131"),
	ion.sound.stop("132"),
	ion.sound.stop("133"),
	ion.sound.stop("134"),
	ion.sound.stop("135"),
	ion.sound.stop("136"),
	ion.sound.stop("137"),
	ion.sound.stop("138"),
	ion.sound.stop("139"),
	ion.sound.stop("140"),
	ion.sound.stop("141"),
	ion.sound.stop("142"),
	ion.sound.stop("143"),
	ion.sound.stop("144"),
	ion.sound.stop("145"),
	ion.sound.stop("146"),
	ion.sound.stop("147"),
	ion.sound.stop("148"),
	ion.sound.stop("149"),
	ion.sound.stop("150"),
	ion.sound.stop("151"),
	ion.sound.stop("152"),
	ion.sound.stop("153"),
	ion.sound.stop("154"),
	ion.sound.stop("155"),
	ion.sound.stop("156"),
	ion.sound.stop("157"),
	ion.sound.stop("158"),
	ion.sound.stop("159")
)};

function aboutCharaScript(){
	/* hover name */
	$('#sp_character_top ul li').hover(
		function () {
			$('p',this).stop(true,false).animate({width: "toggle", opacity: "toggle"},"fast");
		},
		function () {
			$('p',this).stop(true,true).animate({width: "toggle", opacity: "toggle"},"fast");
		}
	);

	/* top to detail */
	$("#sp_character_top ul li").click(function(){
		var getClass = $(this).attr("class");
		var num = getClass.replace('sp_character_sumb', '');
		$("#sp_character_top").hide("easeInQuint");
		$("#sp_character_number" + num).show("easeInQuint");
		$("#sp_character_list").show("easeInQuint");
		$("#sp_character_list .sumb_" + num).addClass("active");
	});

	/* list to detail */
	clickFlg = true;
	$("#sp_character_list ul li").click(function(){
		if (clickFlg){
			var getClass = $(this).attr("class");
			var num = getClass.replace('sumb_', '').replace(' jhover', '');
			if (getClass.indexOf("active") == -1){
				clickFlg = false;
				$("#sp_character_list ul li").removeClass("active");
				$(this).addClass("active");
				$(".sp_character_detail").hide(150);
				$("#sp_character_number" + num).show(150);
				setTimeout(function() {
					clickFlg = true;
				},300);
			}
		}
	});

	/* detail drag */
	$(".sp_character_detail .frame").draggable({
		containment: "body",
		revert: true,
		handle: "div.frame_h"
	});
}


/* -------------------------------------- info/topic -------------------------------------- */
function footerPopScript(){
	setTimeout(function() {
		var flagApper = true;
		var popAppearLimit = $("body").height() - 600;
		var currentUrl = location.href;
		var linkUrl = $("#footer_pop_area a").attr("href").split('/');

		if(currentUrl.indexOf(linkUrl[6]) == -1){
			function footerBannerPopUp(){
				if(popAppearLimit - ($(window).scrollTop() + $(window).height()) < 0 ){
					footer_pop_component(); // footer_pop.js
					flagApper = false;
				}
			}
			footerBannerPopUp();
			$(window).bind('scroll resize', function(){
				if(flagApper){
					footerBannerPopUp();
				}
			});
		}
	},3000);
}


/* -------------------------------------- movie/movie -------------------------------------- */
$(function(){
	$(".moviethickbox").click(function(){
		/* movie */
		movie_url = cdn_url +"movie/";
		movieParam = $(this)
			.attr("class")
			.replace('mN_','')
			.replace('mW_','')
			.replace('mH_','')
			.replace('mV_','')
			.replace('mP_','')
			.split(' ')
		;
		mN = movieParam[2];
		mW = movieParam[3];
		mH = movieParam[4];
		mV = movieParam[5];
		mP = movieParam[6];

		/* videoFlag */
		if(
			(strUA.indexOf("chrome") != -1) ||
			(strUA.indexOf("firefox") != -1) ||
			(strUA.indexOf("msie 10.") != -1) ||
			(strUA.indexOf("trident") != -1) && (strUA.indexOf("rv:11") != -1) ||
			(strUA.indexOf("iPhone") != -1) ||
			(strUA.indexOf("iPad") != -1) ||
			(strUA.indexOf("Android") != -1)
		){
			videoFlag = true;
		}

		/* video write */
		function videoWrite(){
			$('#moviebox').html("<div id='video_load'><video id='movie' autoplay preload controls><source src= '"+ movie_url + mN +".mp4' type='video/mp4'><source src='"+ movie_url + mN +".webm' type='video/webm'><source src= '"+ movie_url + mN +".ogv' type='video/ogg'></video></div>");
			document.getElementById("movie").play();
		}

		/* video or flash */
		setTimeout(function(){
			$('#moviebox').addClass('box'+ mH);
			if (videoFlag){
				videoWrite();
			} else if(isFlashInstalled){
				var flashvars = {
					fvN:mN,
					fvW:mW,
					fvH:mH,
					fvV:mV,
					fvP:mP,
					fvMoviePath:movie_url
				};
				var params = { wmode: "transparent", allowscriptaccess:"always", base:""+ movie_url};
				swfobject.embedSWF(""+ movie_url + mW +"x"+ mH +".swf", "moviebox", mW, mH, "8.0.0", null, flashvars, params);
			} else {
				videoWrite();
			}
		}, 1000);
	});
});
