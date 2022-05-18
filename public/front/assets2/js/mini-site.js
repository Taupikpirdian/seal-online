/*********************************************************************
* social tab change
**********************************************************************/

$(function(){
	/* social tab change */
	$("#social_window .tab ul li").click(function(){
		var listName = $(this).attr("class");
		if( listName.indexOf("active")==-1){
			if( listName.indexOf("loading")!=-1){
//				loadYoutubeList(listName);
				listName = "youtube";
			}
			$("#social_window .tab ul li").removeClass("active");
			$("#social_window .box > div").removeClass("active").hide("normal");
			$(this).addClass("active");
			$("#social_window .box > div." + listName).addClass("active").show("normal");
		}
	});


});

function loadYoutubeList(listName) {
	$("#social_window .tab ul li.youtube").removeClass("loading");
	/* youtube channel get data */
	var url = "http://gdata.youtube.com/feeds/api/users/OnigiriOnline/uploads";
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

			str += '<li><a href="' + href + "&hd=1" + '" target="_blank">';
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
/*********************************************************************
* coming soon
**********************************************************************/

$(function(){;
	if ($(".panel").hasClass("soon")){
		$(".soon").find("a").remove();
		$(".soon").find("h1").remove();
		$(".soon").find("span").remove();
		$(".soon").find("p").remove();
	}
	if ($(".panel_l").hasClass("soon")){
		$(".panel_l.soon").remove();
	}
	
});


/*********************************************************************
* SocialButton
**********************************************************************/
function attachSocial(){
	$("ul.social_area").append('<ul><li><div class="fb-like" data-href="" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></li><li><a href="https://twitter.com/share" class="twitter-share-button" data-text="" data-lang="en" data-hashtags="onigiri" data-count="vertical">tweet</a></li><li><div class="g-plusone" data-size="tall"></div></li></ul>');
	twttr.widgets.load();
	FB.XFBML.parse();
  window.___gcfg = {lang: 'en'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
}

/*********************************************************************
 * Simplified Thickbox-like Window
**********************************************************************/
function clearChild() {
	$('#child_title').empty();
	$('#child_iframe').empty();
}
function closeChild() {
    if ($('#TBspace').is(':visible') == true) {
        $("#TBspace").fadeOut(200);
    } else {
        $("#child_win").fadeOut(200);
    }
    $("#child_overlay").fadeOut(500, clearChild);
    // $("html").css("overflow","auto");  //show the whole page
}
function resizeChild() {
    var TB_height = 800; //init height
    var WD_height = $(window).height();
    if(TB_height > WD_height) {
        $('#child_win').css({height:WD_height,marginTop:'0',top:'-4px'});
        $('#child_iframe').css({ height: (WD_height-100) });
    } else {
        $('#child_win').css({height:TB_height,marginTop:(-TB_height/2),top:'50%'});
        $('#child_iframe').css({ height: (TB_height-100) });
    }
}
function showChild(loc, title, hiddenLayer) {
    if (loc != undefined) {
        // self.frames[target].document.location.href = loc; // if an iframe is preferred over .load(); extra parameter 'target' is used here
        $('#child_iframe').load(loc + " article.pop_iframe", attachSocial);
    }
    if (title != undefined) {
        $('#child_title').append('<h2>' + title + '</h2>');
    }
    resizeChild();
    $("#child_overlay").fadeIn(300);
    if (hiddenLayer != undefined) { //show hidden layer
        $('#TBspace').fadeIn(600);
    } else { //show the default window
        $("#child_win").fadeIn(600);
    }
    // $("html").css("overflow","hidden"); //stop scrolling for the whole page
    attachSocial();
    $("#child_overlay").click(function(){ closeChild() });
}

/*********************************************************************
 * Download button
**********************************************************************/
function redirect_dl(){
	var ua = window.navigator.userAgent.toLowerCase();
//	if (ua.indexOf('msie') != -1 || ua.match(/trident.+rv:11/i)) { // IE
//		window.open(download_installer);
		//_gaq.push(['_trackEvent','ClientDL','click',download_installer_name, 1]);
//	} else {              // その他
		window.open(download_url);
		 //_gaq.push(['_trackEvent','ClientDL','click',download_url_name, 1]);
//	}
	location.href = "/nolayout/register/download.html";
}
