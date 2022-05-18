var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

// JavaScript Document
// WebTicker by Mioplanet
// www.mioplanet.com

TICKER_CONTENT = document.getElementById("TICKER").innerHTML;
 
TICKER_RIGHTTOLEFT = false;
TICKER_SPEED = 2;
TICKER_STYLE = "font-family:Arial; font-size:12px; color:#444444";
TICKER_PAUSED = false;

ticker_start();

function ticker_start() {
	var tickerSupported = false;
	TICKER_WIDTH = document.getElementById("TICKER").style.width;
	var img = "<img src=ticker_space.gif width="+TICKER_WIDTH+" height=0>";

	// Firefox
	if (navigator.userAgent.indexOf("Firefox")!=-1 || navigator.userAgent.indexOf("Safari")!=-1) {
		document.getElementById("TICKER").innerHTML = "<TABLE  cellspacing='0' cellpadding='0' width='100%'><TR><TD nowrap='nowrap'>"+img+"<SPAN style='"+TICKER_STYLE+"' ID='TICKER_BODY' width='100%'>&nbsp;</SPAN>"+img+"</TD></TR></TABLE>";
		tickerSupported = true;
	}
	// IE
	if (navigator.userAgent.indexOf("MSIE")!=-1 && navigator.userAgent.indexOf("Opera")==-1) {
		document.getElementById("TICKER").innerHTML = "<DIV nowrap='nowrap' style='width:100%;'>"+img+"<SPAN style='"+TICKER_STYLE+"' ID='TICKER_BODY' width='100%'></SPAN>"+img+"</DIV>";
		tickerSupported = true;
	}
	if(!tickerSupported) document.getElementById("TICKER").outerHTML = ""; else {
		document.getElementById("TICKER").scrollLeft = TICKER_RIGHTTOLEFT ? document.getElementById("TICKER").scrollWidth - document.getElementById("TICKER").offsetWidth : 0;
		document.getElementById("TICKER_BODY").innerHTML = TICKER_CONTENT;
		document.getElementById("TICKER").style.display="block";
		TICKER_tick();
	}
}

function TICKER_tick() {
	if(!TICKER_PAUSED) document.getElementById("TICKER").scrollLeft += TICKER_SPEED * (TICKER_RIGHTTOLEFT ? -1 : 1);
	if(TICKER_RIGHTTOLEFT && document.getElementById("TICKER").scrollLeft <= 0) document.getElementById("TICKER").scrollLeft = document.getElementById("TICKER").scrollWidth - document.getElementById("TICKER").offsetWidth;
	if(!TICKER_RIGHTTOLEFT && document.getElementById("TICKER").scrollLeft >= document.getElementById("TICKER").scrollWidth - document.getElementById("TICKER").offsetWidth) document.getElementById("TICKER").scrollLeft = 0;
	window.setTimeout("TICKER_tick()", 30);
}


}
/*
     FILE ARCHIVED ON 05:36:45 Jul 03, 2007 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 14:41:37 Mar 07, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  exclusion.robots: 0.208
  captures_list: 101.303
  esindex: 0.016
  CDXLines.iter: 23.125 (3)
  PetaboxLoader3.resolve: 52.463
  LoadShardBlock: 52.635 (3)
  load_resource: 144.373
  exclusion.robots.policy: 0.191
  PetaboxLoader3.datanode: 114.808 (4)
  RedisCDXSource: 20.933
*/