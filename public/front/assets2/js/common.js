var _common_loaded;
$(document).ready(function() {
	if (_common_loaded) return;
	_common_loaded = true;

	$('input,select').hover(function() { $(this).addClass('hover'); }, function() { $(this).removeClass('hover'); });
	$('input').focus(function() { $(this).addClass('focus'); });
	$('input').blur(function() { $(this).removeClass('focus'); });

	var setupImageGuide = function() {
		var target = $(this);
		var img = target.css('backgroundImage');
		target.focus(function() { $(this).css('backgroundImage', 'none'); });
		target.blur(function() { if (!$(this).val()) $(this).css('backgroundImage', img); });

		if (target.val() == '') {
			target.css('backgroundImage', img);
		} else {
			target.css('backgroundImage', 'none');
		}
	};
	$('input.img_guide').each(setupImageGuide);
/*
	// lightbox
	$('a[rel*=lightbox]').lightBox({
		imageLoading:  base_url('include') + 'images/lightbox-ico-loading.gif',
		imageBtnPrev:  base_url('include') + 'images/lightbox-btn-prev.gif',
		imageBtnNext:  base_url('include') + 'images/lightbox-btn-next.gif',
		imageBtnClose: base_url('include') + 'images/lightbox-btn-close.gif',
		imageBlank:    base_url('include') + 'images/lightbox-blank.gif'
	});
*/
	$("input[type!='submit'][type!='textarea']").keypress(function(event) {
		if (event.keyCode == 13) {
			return false;
		}
	});
	$('input.submit').keypress(function(event) {
		if (event.keyCode == 13) {
			$(this).parents('form').submit();
		}
	});
	$('a.submit').click(function(event) {
		$(this).parents('form').submit();
	});

	// フォームの多重submit防止
	var submitted = false;
	$('form').submit(function() {
		if (submitted) {
			return false;
		}
		submitted = true;
	});

	setTimeout(function() {
		jQuery.each(pages, function(i, v) {
			v();
		});
		pages = [];
	}, 100);
});


/**
 * ゲームを起動します。
 */
function startGame() {
	if ($.browser.mozilla) {
		// Firefox
		window.top.location.href = base_url() + 'start';
	} else if ($.browser.msie) {
		// IE(location.href変更の場合にリファラが空となるため)
		var a = $('<a></a>').appendTo('body').attr('href', base_url() + 'start');
		a.get(0).click();
	} else {
		// それ以外
		alert('Please use Internet Explorer or Firefox.');
	}
}

/**
 * WordPressページをロードします。
 * 親ページのロード後に1度だけ実行されます。
 *
 * @param target ロードしたページを埋め込む対象のCSSセレクタ
 * @param args ページのリクエストに使用するパラメータの連想配列
 * @param callback コールバック関数
 * @param noIcon ロードアイコンを表示しない
 */
function getWP(target, args, callback, noIcon) {
	var loadfunc = function() {
		if (!noIcon) {
			$(target).empty().append('<div><img src="' + base_url() + 'images/loadinfo.net.gif" /></div>');
		}

		var param = args || {};
		$.get(wordpress_url(), param, function(res) {
			$(target).fadeOut('fast', function() {
				$(target).html(res).fadeIn('fast');

				if (callback) {
					callback();
				}
			});
		});
	};

	if (_common_loaded) {
		loadfunc();
	} else {
		pages.push(loadfunc);
	}
}

/**
 * OpenPNEページをロードします。
 *
 * @param target ロードしたページを埋め込む対象のCSSセレクタ
 * @param args ページのリクエストに使用するパラメータの連想配列
 * @param callback コールバック関数
 * @param noIcon ロードアイコンを表示しない
 */
function getOP(target, args, callback, noIcon) {
	pages.push(function() {
		if (!noIcon) {
			$(target).empty().append('<div><img src="' + base_url() + 'images/loadinfo.net.gif" /></div>');
		}

		var param = args || {};
		$.get(pne_url, param, function(res) {
			$(target).fadeOut('fast', function() {
				$(target).html(res).fadeIn('fast');

				if (callback) {
					callback();
				}
			});
		});
	});
}

/**
 * base_urlを返します。(CIのbase_urlと同じ)
 *
 * @param type 'include': SSLページにインクルードされる場合
 *             'ssl': SSLページへのリンク等の場合
 *             指定なし: SSLなし
 * @return base_url文字列
 */
function base_url(type) {
	if (type == 'include') {
		return _base_urls.include;
	} else if (type == 'ssl') {
		return _base_urls.ssl;
	} else {
		return _base_urls.base;
	}
}

/**
 * server_urlを返します。(CIのserver_urlと同じ)
 *
 * @param type 'secure': EUポータル本体
 *             指定なし: BASE_URL
 * @return base_url文字列
 */
function server_url(type) {

	if (typeof( _server_urls[type] ) != 'undefined') {
		return _server_urls[type];
	}

	return _base_urls.base;
}

/**
 * wordpress_urlを返します。(wordpress_urlと同じ)
 *
 * @return wordpress_url文字列
 */
function wordpress_url() {
	return _wordpress_url;
}

/**
 * 簡易sprintfです。%sしかつかえません。
 */
function sprintf(){
	var format = arguments[0]; // format
	var args   = arguments;
	var i = 0;
	return format.replace(/%s/g, function(){
		i++;
		return args[i];
	});
}

/**
 * ページャクラスです。
 * ページ移動インターフェイスを生成します。
 */
var ext_pager = function(self, my) {
	self = self || {};
	my = my || {};

	/**
	 * 初期化します。
	 *
	 * @param string target ページャを入れるコンテナ要素の指定
	 * @param string url ページの基本URL
	 * @param int total 総件数
	 * @param int selected 選択されているページ
	 * @param int per_page 1ページ辺りの件数
	 * @param int max_pix ページャに一度に表示するページ数
	 */
	var setup = function(param) {
		var url = param.url;
		var unit = param.unit || 'item';
		var total = param.total;
		var per_page = param.per_page || 10;

		my.target = $(param.target);
		my.current = param.selected || 1;
		my.max_pix = param.max_pix || 10;
		my.max_page = Math.ceil(total / per_page);

		$('.total', my.target).text(total + ' ' + unit + '.');

		for (var i = 0; i < my.max_page; i++) {
			var index = i + 1;
			var p = $('.dummy', my.target).clone().removeClass('dummy');

			if (index == my.current) {
				p.addClass('selected').children().text(index);
			} else {
				p.children().attr('href', sprintf(url, index)).text(index);
			}

			$('.dummy', my.target).before(p);
		}
		$('.dummy', my.target).remove();

		$('.slider_right', my.target).
			attr('href', 'javascript:void(0);').
			click(function() { slide(1); });
		$('.slider_left', my.target).
			attr('href', 'javascript:void(0);').
			click(function() { slide(-1); });

		my.target.show();
		slide();
	};
	self.setup = setup;

	/**
	 * ページャの表示ページを変更します。
	 *
	 * @param int pos 移動値
	 */
	var slide = function(pos) {
		if (pos) {
			if (my.current + pos < 1 || my.max_page < my.current + pos) {
				return;
			} else {
				//my.current += pos;
				my.current = eval(my.current + pos);
			}
		}

		if (my.current > my.max_page - my.max_pix + 1) {
			my.current = my.max_page - my.max_pix + 1;
		}

		$('.pix:has(.page)', my.target).each(function(i, v) {
			var index = i + 1;
			$(v).toggle(my.current <= index && index < (my.current + my.max_pix));
		});

		var active = my.current <= (my.max_page - my.max_pix);
		$('.slider_right', my.target).toggle(active).parent().toggleClass('active', active);

		active = my.current > 1;
		$('.slider_left', my.target).toggle(active).parent().toggleClass('active', active);
	}
	return self;
};

/**
 * トップバナーを表示します。
 */
function loadTopBanner(auto, callback) {
	var target = $('#center_banner');

	$.get(wordpress_url(), 't=top_banner', function(res) {
		$.each(res, function(i, v) {
			if (v.image) {
				var banner = $('#banner_image_dummy', target).clone()
					.attr('id', 'banner_' + v.id).removeClass('dummy').addClass('b_' + v.id)
					.find('.target').attr('href', v.target).end()
					.find('.image').attr('src', v.image).end();
				$('.banners', target).append(banner);
			} else if (v.swf) {
				var swf = $('#banner_swf_dummy', target).clone()
						.attr('id', 'banner_' + v.id).removeClass('dummy').addClass('b_' + v.id);
				$('.banners', target).append(swf);
				var flparams = {};
				flparams.quality = "high";
				flparams.bgcolor = "#000000";
				swfobject.embedSWF(v.swf, 'banner_' + v.id, '448', '120', '9.0.0',
					base_url('include') + 'js/expressInstall.swf', {}, flparams);
			}

			var button = $('#banner_button_dummy', target).clone()
				.attr('id', 'banner_button_' + v.id).removeClass('dummy').addClass('b_' + v.id).text(i + 1);
			$('.buttons', target).append(button);

			var icon = $('#banner_icon_dummy', target).clone()
				.attr('id', 'banner_icon_' + v.id).removeClass('dummy').addClass('b_' + v.id)
				.find('.icon_image').attr('src', v.icon).end();
			$('.icons', target).append(icon);
		});
		$('.dummy', target).remove();

		// バナーCarousel適用。切り替えはボタン操作としてセット。
		var b_classes = $.map(res, function(v, i) { return '.buttons .b_' + v.id; });
		$('.banners', target).parent().jCarouselLite({
			visible: 1,
			btnGo: b_classes
		});

		$('.icons', target).parent().jCarouselLite({
			visible: 4,
			btnNext: '.selector .right',
			btnPrev: '.selector .left',
			circular: false
		});

		// ボタンがクリックされたらアイコンをselectedにする(& carousel設定によりバナー切り替え)
		var count = 0;
		var selected;
		$('.buttons button', target).click(function() {
			count = 0;
			$('.icons *', target).removeClass('selected');
			selected  = $(this).attr('class').match(/b_\d+/);
			$('.icons .' + selected, target).addClass('selected');
		});

		// アイコンhoverで対応するボタンクリックを実行
		$('.icons .icon', target).hover(function(e) {
			var b_class = $(this).attr('class').match(/b_\d+/);
			$('.buttons .' + b_class, target).click();
		});

		// タイマー制御で順にボタンクリックを実行
		setInterval(function() {
			count += 1000;
			if (auto <= count) {
				var idx = b_classes.indexOf('.buttons .' + selected, target);
				var next = idx + 1 < b_classes.length ? idx + 1 : 0;
				$(b_classes[next]).click();
			}
		}, 1000);

		// 初期選択
		$('.buttons .b_' + res[0].id, target).click();

		if ($.isFunction(callback)) callback();
	}, 'json');
}

/**
 * アイテム紹介を表示します。
 */
function loadTopItem(callback) {
	var target = $('#list_cashitem');

	var max_height = 0;

	$.get(wordpress_url(), 't=top_item', function(res) {
		$.each(res, function(i, v) {
			var line = $('#item_dummy', target).clone()
				.attr('id', 'item_' + v.id)
				.find('.icon').attr('src', v.icon).end()
				.find('.icon').attr('alt', v.name).end();

			$('.items', target).append(line);
			var height = line.height();
			max_height = max_height < height ? height : max_height;
		});
		$('#item_dummy', target).remove();
		$('.items .item').height(max_height);

		if (res.length) {
			$('.items').parent().jCarouselLite({
				btnNext: '#list_cashitem .left',
				btnPrev: '#list_cashitem .right',
				easing: "easeOutBack",
				speed: 700,
				scroll: 1
			});
		}

		if ($.isFunction(callback)) callback();
	}, 'json');
}

/**
 * インフォメーションを表示します。
 */
function loadTopInfo(type, target, callback) {
	$.get(wordpress_url(), 't=' + target, function(res) {
		var m_url = base_url('include');
		var language = m_url.substr(base_url().length);
		var img_url = '';
		language.replace('/\//', '');

		// インフォクリック時の内容表示
		var lineClick = function() {
			if ($(this).next().is(':hidden')) {
				$('#' + type + ' .info_line .body').slideUp('fast');
				$(this).next().slideDown('fast');
			} else {
				window.top.location.href = $(this).next().find('.info_more').attr('href');
			}
		};

 		// ダミー要素を複製してインフォ行を生成
		$.each(res, function(category, infos) {
			var block = $('#' + type + '_dummy').clone()
				.attr('id', type + '_block_' + category).removeClass('dummy')
				.find('.category_more a')
					.attr('href', base_url('include') + 'info/info_list/' + (category == 'all' ? type : category)).end();
			block.find('.category_more a img').rollover();

			$.each(infos, function(i, info) {
		 		img_url = base_url() + 'images/info_' + info.category + '.gif';
		 		if (language.length) {
		 			img_url = base_url() + language + 'images_' + language + 'info_' + info.category + '.gif'
		 		}

				var line = $('#' + type + '_line_dummy', block).clone()
					.attr('id', type + '_' + info.id).removeClass('dummy')
					.find('.category img').attr('src', img_url).end()
					.find('.title').html(info.title).end()
					.find('.date').html(info.date).end()
					.find('.content').html(info.content).end()
					.find('.info_more').attr('href', info.url).end()
					.find('.head').click(lineClick).end()
					.find('a[rel*=wp_lightbox]').lightBox({
						imageLoading:  base_url('include') + 'images/lightbox-ico-loading.gif',
						imageBtnPrev:  base_url('include') + 'images/lightbox-btn-prev.gif',
						imageBtnNext:  base_url('include') + 'images/lightbox-btn-next.gif',
						imageBtnClose: base_url('include') + 'images/lightbox-btn-close.gif',
						imageBlank:    base_url('include') + 'images/lightbox-blank.gif'
					}).end();

				$('.lines', block).append(line);
			});
			$('#' + type + '_line_dummy', block).remove();

			$('#' + type + '_' + category).append(block);
		});

		$('#' + type + '_dummy').remove();

		// 先頭行を展開
		$.each(res, function(category, infos) {
			$('#' + type + '_' + category + ' .info_line:first .body').show();
		});

		if ($.isFunction(callback)) callback();
	}, 'json');

	$('#' + type + ' .tabs .tab a').click(function() {
		$('#' + type + ' .tabs .tab a').each(function(i, v) {
			$($(this).attr('href')).hide();
		});
		$($(this).attr('href')).show();
		return false;
	});
	$('#' + type + ' .tabs .tab a:first').click();
}

/**
 * 数値にカンマを付加します。
 * @param numeric value 数値 or 数値文字列
 * @return string カンマつきの数値文字列
 */
function addComma(value) {
	var s = String(value);
	for(var i = 0; i < s.length / 3; i++) {
		s = s.replace(/^([+-]?\d+)(\d\d\d)/,"$1,$2");
	}
	return s;
}


/*********************************************************************
* カウンターアップ用
**********************************************************************/

function redirect_dl(){
	var ua = window.navigator.userAgent.toLowerCase();
	if (ua.indexOf('msie') != -1 || ua.match(/trident.+rv:11/i)) { // IE
		window.open(download_installer);
		_gaq.push(['_trackEvent','ClientDL','click',download_installer_name, 1]);
	} else {              // その他
		window.open(download_url);
		 _gaq.push(['_trackEvent','ClientDL','click',download_url_name, 1]);
	}
	location.href = "/nolayout/register/download.html";
}
