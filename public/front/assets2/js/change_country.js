function country_clear(){ //リセット
	$("#nav_country ul").find('li').removeClass("active");
	$("#maintenance dl").find('dd').css({ display: "none"});
	//$.cookie("wp_cs_region","",{expires:-1,path:"/"});
}
function country_eu(){ //EU選択
	country_clear();
	$("#nav_country ul li.eu").addClass("active");
	$("#maintenance dl dd.us").css({ display: "none"});
	$("#maintenance dl dd.eu").css({ display: "block"});
	$.cookie("wp_cs_region","eu",{expires:999, path: '/'});
	$(".change_country .contents p span").html("Europe"); //ポップアップ内の表記を変更
//	alert("cookieEU");
}
function country_us(){ //US選択
	country_clear();
	$("#nav_country ul li.us").addClass("active");
	$("#maintenance dl dd.eu").css({ display: "none"});
	$("#maintenance dl dd.us").css({ display: "block"});
	$.cookie("wp_cs_region","us",{expires:999, path: '/'});
	$(".change_country .contents p span").html("USA"); //ポップアップ内の表記を変更
//	alert("cookieUS");
}

function country_select_s(){//サイドナビゲーション
	$('#nav_country ul li').click(function(){ //国を選んだらスイッチが切り替わる
		callback = new Function('return ' + 'country_' + $(this).attr('class') + '();');
		callback();
	});
}
function country_select_p(){//ポップアップ
	$(".change_country ul li").find('a').on('click', function() { //国を選んだらスイッチが切り替わる
		callback = new Function('return ' + 'country_' + $(this).attr('class') + '();');
		callback();
		location.reload();
		closeModel();
	});
}

function popupModal(){// Model開く動作
	if($("#modal-overlay")[0]) return false ;//新しくモーダルウィンドウを起動しない
	$("body").append('<div id="modal-overlay"></div>');//オーバーレイ用のHTMLコードを、[body]内の最後に生成する
	$("#modal-overlay").fadeIn("slow");//[$modal-overlay]をフェードインさせる
	function centeringModalSyncer(){//センタリングをする関数
		var w = $(window).width();//画面(ウィンドウ)の幅を取得し、変数[w]に格納
		var h = $(window).height();//画面(ウィンドウ)の高さを取得し、変数[h]に格納
		var cw = $("#modal-content").outerWidth({margin:true});//コンテンツ(#modal-content)の幅を取得し、変数[cw]に格納
		var ch = $("#modal-content").outerHeight({margin:true});//コンテンツ(#modal-content)の高さを取得し、変数[ch]に格納
		var pxleft = ((w - cw)/2);//コンテンツ(#modal-content)を真ん中に配置するのに、左端から何ピクセル離せばいいか？を計算して、変数[pxleft]に格納
		var pxtop = ((h - ch)/2);//コンテンツ(#modal-content)を真ん中に配置するのに、上部から何ピクセル離せばいいか？を計算して、変数[pxtop]に格納
		$("#modal-content").css({"left": pxleft + "px"});//[#modal-content]のCSSに[left]の値(pxleft)を設定
		$("#modal-content").css({"top": pxtop + "px"});//[#modal-content]のCSSに[top]の値(pxtop)を設定
	}
	centeringModalSyncer();//センタリングをする関数を呼び出す
	$(window).resize(centeringModalSyncer);//リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
}
function closeModel(){ // Model閉じる動作
	$("#modal-content,#modal-overlay").fadeOut("slow",function(){
		$("#modal-overlay").remove();//フェードアウト後、[#modal-overlay]をHTML(DOM)上から削除
	});
}

$(function() {
	if ($("html").hasClass("region_off")){ //国分けしない場合
		$('#nav_country').remove();
		$("#maintenance dl dd.eu").css({ display: "none"});
		$("#maintenance dl dd.us").css({ display: "block"});
	} else { //国分けする場合
		myCountry = $.cookie("wp_cs_region");
		if (! (myCountry == null || myCountry == 'default') ){						//mycountryがnullかdefault値以外のとき
			callback = new Function('return ' + 'country_' + myCountry + '();');	//mycountryによってサブ関数を動的に切り替え
			callback();																//実行
		} else { //国が選択されていない場合POPUP起動
			popupModal();
			country_select_p(); //ポップアップ内の挙動
			$("#modal-overlay,#modal-close").unbind().click(function(){		//[#modal-overlay]、または[#modal-close]をクリックしたら起こる処理
				closeModel();												//[#modal-overlay]と[#modal-close]をフェードアウトする
			});
		}
		country_select_s(); //home上のナビゲーション
	}

});
