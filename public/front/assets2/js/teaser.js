$(function() {
	$('.game_start_btn').click(gameStart);
	$('.game_start_btn_login').click(gameStart_login);
	$('#user_id').keydown(keydownUserid);
	$('#password').keydown(keydownPassword);

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

var childWin = "";

function gameStart() {
	if (childWin != null && childWin.closed == false) {
		childWin.close();
	}

	if ($('#start_form').find("input[name=user_id]").val() == '') {
		alert('please input user id');
		return false;
	}

	if ($('#start_form').find("input[name=password]").val() == '') {
		alert('please input password');
		return false;
	}

	var param = $('#start_form').serialize();

	var url = $('#start_form').attr('action');
	$.post(url, param, function(added){

		if (added.data.success == true) {
			var url = "./";
			if (typeof(_base_urls) != "undefined" && _base_urls['base'] != null) {
				// urlが設定されている場合
				url = _base_urls['base'];
			}
			var game_id = $('#game_id').val();

			childWin = window.open(url + 'start/get_param/u/' + game_id,'game','scrollbars=0,width=800,height=600,location=0');

			if (childWin != null) {
				childWin.focus();
			}
		} else {
			var url = "./";
			if (typeof(_base_urls) != "undefined" && _base_urls['base'] != null) {
				// urlが設定されている場合
				url = _base_urls['base'];
			}

			var error_string = "game_start_error";
			if (typeof(added.data.error) != "undefined" && added.data.error != null) {
				error_string = added.data.error;
			}
			childWin = window.open(url + 'start/error/' + error_string,'game','scrollbars=0,width=510,height=230,location=0');

			if (childWin != null) {
				childWin.focus();
			}
		}
	}, 'json');
	return false;
}

function gameStart_login() {
	if (childWin != null && childWin.closed == false) {
		childWin.close();
	}

	var cc_url = "./";
	if (typeof(_base_urls) != "undefined" && _base_urls['base'] != null) {
		// urlが設定されている場合
		cc_url = _base_urls['base'];
	}

	var game_id = $('#game_id').val();

	childWin = window.open(cc_url + 'start/get_param/l/cb','game','scrollbars=0,width=800,height=600,location=0');
	if (childWin != null) {
		childWin.focus();
	}
}

function _popup_iframe(url) {
	$('div.avatar_skin').css('display', 'none');
	$('#' + gaRegisterPopupuID).empty().dialog('open');
	$('#' + gaRegisterPopupuID).empty().bind( "dialogclose", function(event, ui) {
		$('div.avatar_skin').css('display', 'block');
	});
	setTimeout(function() {
		var iframe = document.createElement('iframe');
		iframe.frameBorder = 0;
		iframe.width = 810;
//		iframe.height = 610;
		iframe.height = 730;
		iframe.src = url;
		$('#' + gaRegisterPopupuID).empty().append(iframe);
	}, 700);
}

function keydownUserid(e) {
	if(e.keyCode=='13'){
		$('#password').focus();
		return false;
	}
}

function keydownPassword(e) {
	if(e.keyCode=='13'){
		gameStart();
		return false;
	}
}
