/************************************************
	PORTAL NAV v0.2 (2012.12.26)
	EUポータルバー機能詰め合わせ
*************************************************/

/*グローバルメニュー*/
$(function (){
	var PNav = $("#portal_nav").find("#global_nav_area");
	PNav.find("li[id^='gm_']").each(function(a) {
		PNav.find("li#gm_0"+(a+1)+" > a").hover(function(){
			PNav.find("li[id^='gm_0'] .sub_menu").not("#gm_0"+(a+1)+" .sub_menu").stop(true,true).fadeOut("500");
			PNav.find("#gm_0"+(a+1)+" .sub_menu").addClass("active").stop(true,true).slideDown(300);
			$('html').css({overflow:'auto'});
			$('#nav_overlay, #nav_area_check').remove();
			$('body').append('<div id="nav_overlay"></div>');
			$('#portal_nav').append('<li id="nav_area_check">');
			$('#nav_overlay').show();

			try {
				parent.header_open();
			} catch (e) {
			}

			$('#nav_overlay').hover(function(){
				PNav.find("li[id^='gm_0'] .sub_menu").removeClass("active").stop(true,true).fadeOut("500");
				eliminate();
				try {
					parent.header_close();
				} catch (e) {
				}
			});
			
			$('#nav_area_check').hover(function(){
				PNav.find("li[id^='gm_0'] .sub_menu").removeClass("active").stop(true,true).fadeOut("500");
				eliminate();
				try {
					parent.header_close();
				} catch (e) {
				}

			});
			
			return false;
		})
	})
	PNav.find("#gm_sub_nav_01 li[class^='sub_nav']").each(function(b){
		PNav.find(".sub_nav_0"+(b+1)+" a").hover(function(){
			PNav.find("li[class^='sub_nav_'] a").not(".sub_nav_0"+(b+1)+" a").removeClass("active");
			PNav.find("li[class^='sub_nav_'] .sub_contents").not(".sub_nav_0"+(b+1)+" .sub_contents").removeClass("active");
			PNav.find(".sub_nav_0"+(b+1)+" a:first").addClass("active");
			PNav.find(".sub_nav_0"+(b+1)+" .sub_contents").addClass("active");
		})
	})
});

$(function(){
	if ($("html").hasClass("no_country")){
		$("#nu_03").find(".sub_menu").remove();
		$("#nu_03").addClass("off");
	}
});

/*ユーザーメニュー*/
$(function (){
	var PNav = $("#user_menu_area");
	PNav.find("li[id^='nu_0']").each(function(c) {
		PNav.find("#nu_0"+(c+1)).hover(function(){
			PNav.find("li[id^='nu_0'] .sub_menu").not("#nu_0"+(c+1)+" .sub_menu").stop(true,true).fadeOut("500");
			PNav.find("#nu_0"+(c+1)+" .sub_menu").addClass("active").stop(true,true).slideDown("300");
			$('html').css({overflow:'auto'});
			$('#nav_overlay, #nav_area_check').remove();
			$('body').append('<div id="nav_overlay"></div>');
			$('#portal_nav').append('<li id="nav_area_check">');
			$('#nav_overlay').stop(true,true).show();
			$('#nu_02').find(".sub_menu input").focus(function(){$('#nu_02').find(".sub_menu").addClass("focus");});
			$('#nu_02').find(".sub_menu input").blur(function(){$('#nu_02').find(".sub_menu").removeClass("focus");});
			try {
				parent.header_open();
			} catch (e) {
			}

			$('#nav_overlay').hover(function(){
				PNav.find("li[id^='nu_0'] .sub_menu").not("#nu_02 .sub_menu.focus").removeClass("active").stop(true,true).fadeOut("500");
				try {
					if ($('#nu_02').find(".sub_menu").hasClass('focus')){
					} else {
						eliminate();
						try {
							parent.header_close();
						} catch (e) {
						}
					}
				} catch (e) {
				}
			});
			
			$('#nav_area_check').hover(function(){
				PNav.find("li[id^='nu_0'] .sub_menu").not("#nu_02 .sub_menu.focus").removeClass("active").stop(true,true).fadeOut("500");
				try {
					if ($("#nu_02").find(".sub_menu").hasClass('focus')){
					} else {
						eliminate();
						try {
							parent.header_close();
						} catch (e) {
						}
					}
				} catch (e) {
				}
			});
			
			return false;
		})
	})
});

/*共通*/
function eliminate(){
	if ($('#nu_02').find(".sub_menu").hasClass('focus')){
	} else {
		//$('html').css({overflow:''});
		$('#nav_overlay, #nav_area_check').stop(true,true).fadeOut('fast');
		setTimeout('remove()',800);
	}
}

function remove() {
	if ($('#nu_02').find(".sub_menu").hasClass('focus')){
	} else {
		$('#nav_overlay').remove();
		$('#nav_area_check').remove();
	}
}


/************************************************
	グローバルナビのランゲージ切り替え
*************************************************/
$(function(){
	var a=$("#nu_03 > ul");
	var b=$("#nu_03").find(".sub_menu ul");
	var c=$("#nu_03").find(".sub_menu");
	
	b.find("li").each(function(i){
		b.find("li:eq("+i+") a").live("click",function(){
			a.find("li").removeClass("current");
			a.find("li:eq("+i+")").addClass("current");
			c.removeClass("active").fadeOut("500")
		}
	)})
});