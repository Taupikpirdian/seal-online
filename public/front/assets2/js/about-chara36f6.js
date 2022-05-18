// ==================================================================================
// キャラページ：音声ファイルについて
// ==================================================================================
/* 音声ファイルの追加方法 ======================
１）「ion.sound()で呼び出す音声を指定。と ion.sound()で呼び出されたファイルを指定したボタンで再生。」内の
		一番上に追加したい音声ファイル名とボタンのID名を入れたコードを記載。
		※追加するコード
				//「キャラクター名」音声
					ion.sound({
						sounds: [
							{name: "再生した音声のファイル名01"},
							{name: "再生した音声のファイル名02"},
							{name: "再生した音声のファイル名03"}
						],
						path: "sounds/",
						preload: true,
						volume: 1.0
					});
					$("音声を鳴らすボタンのID名").on("click", function(){ ion.sound.play("再生した音声のファイル名01");});
					$("音声を鳴らすボタンのID名").on("click", function(){ ion.sound.play("再生した音声のファイル名02");});
					$("音声を鳴らすボタンのID名").on("click", function(){ ion.sound.play("再生した音声のファイル名03");});

２）「ion.sound.stopで停止する音声を指定。」の中に（１）で追加した音声のファイル名を追加。
		これをしないと同じページいるときは、（１）で追加した音声が鳴り続けます。
========================================== */
$(document).ready(function(){
	// ion.sound.stopで停止する音声を指定。
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
			ion.sound.stop("159"),
			ion.sound.stop("160"),
			ion.sound.stop("161"),
			ion.sound.stop("162"),
			ion.sound.stop("163"),
			ion.sound.stop("164"),
			ion.sound.stop("165"),
			ion.sound.stop("166"),
			ion.sound.stop("167"),
			ion.sound.stop("168"),
			ion.sound.stop("169"),
			ion.sound.stop("170"),
			ion.sound.stop("171"),
			ion.sound.stop("172"),
			ion.sound.stop("173"),
			ion.sound.stop("174"),
			ion.sound.stop("175"),
			ion.sound.stop("176"),
			ion.sound.stop("177"),
			ion.sound.stop("178"),
			ion.sound.stop("179"),
			ion.sound.stop("180"),
			ion.sound.stop("181"),
			ion.sound.stop("182"),
			ion.sound.stop("183"),
			ion.sound.stop("184"),
			ion.sound.stop("185"),
			ion.sound.stop("186"),
			ion.sound.stop("187"),
			ion.sound.stop("188"),
			ion.sound.stop("189"),
			ion.sound.stop("190"),
			ion.sound.stop("191"),
			ion.sound.stop("192"),
			ion.sound.stop("193"),
			ion.sound.stop("194"),
			ion.sound.stop("196"),
			ion.sound.stop("197"),
			ion.sound.stop("198"),
			ion.sound.stop("193_i"),
			ion.sound.stop("194_i"),
			ion.sound.stop("195_i"),
			ion.sound.stop("196_s"),
			ion.sound.stop("197_s"),
			ion.sound.stop("198_s"),
			ion.sound.stop("199_g"),
			ion.sound.stop("200_g"),
			ion.sound.stop("201_g"),
			ion.sound.stop("202_i"),
			ion.sound.stop("203_i"),
			ion.sound.stop("204_i"),
			ion.sound.stop("205"),
			ion.sound.stop("206"),
			ion.sound.stop("207"),
			ion.sound.stop("208"),
			ion.sound.stop("209"),
			ion.sound.stop("210"),
			ion.sound.stop("211"),
			ion.sound.stop("212"),
			ion.sound.stop("213"),
			ion.sound.stop("akane_01"),
			ion.sound.stop("akane_02"),
			ion.sound.stop("akane_03"),
			ion.sound.stop("aoi_01"),
			ion.sound.stop("aoi_02"),
			ion.sound.stop("aoi_03"),
			ion.sound.stop("yorimitsu01"),
			ion.sound.stop("yorimitsu02"),
			ion.sound.stop("yorimitsu01")
		)};
		// 特定ボタンをクリックした時に、音声を停止
			$('.voice [id^="b"], [class^="back_btn_"]').on("click", function(){
				SoundStop();
			});

// ==================================================================================
// ion.sound()で呼び出す音声を指定。と ion.sound()で呼び出されたファイルを指定したボタンで再生。
// ==================================================================================
//「 三蔵法師 」音声
		ion.sound({
			sounds: [
				{name: "112"},
				{name: "113"},
				{name: "114"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b112").on("click", function(){ ion.sound.play("112");});
		$("#b113").on("click", function(){ ion.sound.play("113");});
		$("#b114").on("click", function(){ ion.sound.play("114");});

//「 天邪鬼 」音声
		ion.sound({
			sounds: [
				{name: "115"},
				{name: "116"},
				{name: "117"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b115").on("click", function(){ ion.sound.play("115");});
		$("#b116").on("click", function(){ ion.sound.play("116");});
		$("#b117").on("click", function(){ ion.sound.play("117");});

//「 アスカ 」音声
		ion.sound({
			sounds: [
				{name: "118"},
				{name: "119"},
				{name: "120"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b118").on("click", function(){ ion.sound.play("118");});
		$("#b119").on("click", function(){ ion.sound.play("119");});
		$("#b120").on("click", function(){ ion.sound.play("120");});

//「 チヒロ 」音声
		ion.sound({
			sounds: [
				{name: "121"},
				{name: "122"},
				{name: "123"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b121").on("click", function(){ ion.sound.play("121");});
		$("#b122").on("click", function(){ ion.sound.play("122");});
		$("#b123").on("click", function(){ ion.sound.play("123");});

//「 マトイ 」音声
		ion.sound({
			sounds: [
				{name: "124"},
				{name: "125"},
				{name: "126"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b124").on("click", function(){ ion.sound.play("124");});
		$("#b125").on("click", function(){ ion.sound.play("125");});
		$("#b126").on("click", function(){ ion.sound.play("126");});

//「 ガナハウンド 」音声
		ion.sound({
			sounds: [
				{name: "127"},
				{name: "128"},
				{name: "129"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b127").on("click", function(){ ion.sound.play("127");});
		$("#b128").on("click", function(){ ion.sound.play("128");});
		$("#b129").on("click", function(){ ion.sound.play("129");});

//「 パル・ガーゴイル 」音声
		ion.sound({
			sounds: [
				{name: "130"},
				{name: "131"},
				{name: "132"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b130").on("click", function(){ ion.sound.play("130");});
		$("#b131").on("click", function(){ ion.sound.play("131");});
		$("#b132").on("click", function(){ ion.sound.play("132");});

//「 ガウェイン 」音声
		ion.sound({
			sounds: [
				{name: "133"},
				{name: "134"},
				{name: "135"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b133").on("click", function(){ ion.sound.play("133");});
		$("#b134").on("click", function(){ ion.sound.play("134");});
		$("#b135").on("click", function(){ ion.sound.play("135");});

//「 トリスタン 」音声
		ion.sound({
			sounds: [
				{name: "136"},
				{name: "137"},
				{name: "138"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b136").on("click", function(){ ion.sound.play("136");});
		$("#b137").on("click", function(){ ion.sound.play("137");});
		$("#b138").on("click", function(){ ion.sound.play("138");});

//「 サタン 」音声
		ion.sound({
			sounds: [
				{name: "139"},
				{name: "140"},
				{name: "141"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b139").on("click", function(){ ion.sound.play("139");});
		$("#b140").on("click", function(){ ion.sound.play("140");});
		$("#b141").on("click", function(){ ion.sound.play("141");});

//「 リク 」音声
		ion.sound({
			sounds: [
				{name: "142"},
				{name: "143"},
				{name: "144"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b142").on("click", function(){ ion.sound.play("142");});
		$("#b143").on("click", function(){ ion.sound.play("143");});
		$("#b144").on("click", function(){ ion.sound.play("144");});

//「 ツクモ 」音声
		ion.sound({
			sounds: [
				{name: "145"},
				{name: "146"},
				{name: "147"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b145").on("click", function(){ ion.sound.play("145");});
		$("#b146").on("click", function(){ ion.sound.play("146");});
		$("#b147").on("click", function(){ ion.sound.play("147");});

//「 豊織田信長 お忍び 」音声
		ion.sound({
			sounds: [
				{name: "148"},
				{name: "149"},
				{name: "150"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b148").on("click", function(){ ion.sound.play("148");});
		$("#b149").on("click", function(){ ion.sound.play("149");});
		$("#b150").on("click", function(){ ion.sound.play("150");});

//「 豊臣秀吉 」音声
		ion.sound({
			sounds: [
				{name: "151"},
				{name: "152"},
				{name: "153"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b151").on("click", function(){ ion.sound.play("151");});
		$("#b152").on("click", function(){ ion.sound.play("152");});
		$("#b153").on("click", function(){ ion.sound.play("153");});

	//「 ランスロット 秋麗 」音声
			ion.sound({
				sounds: [
					{name: "154"},
					{name: "155"},
					{name: "156"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b154").on("click", function(){ ion.sound.play("154");});
			$("#b155").on("click", function(){ ion.sound.play("155");});
			$("#b156").on("click", function(){ ion.sound.play("156");});

	//「 柴田勝家 」音声
			ion.sound({
				sounds: [
					{name: "157"},
					{name: "158"},
					{name: "159"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b157").on("click", function(){ ion.sound.play("157");});
			$("#b158").on("click", function(){ ion.sound.play("158");});
			$("#b159").on("click", function(){ ion.sound.play("159");});

	//「 佐々木小次郎 飛燕 」音声
			ion.sound({
				sounds: [
					{name: "160"},
					{name: "161"},
					{name: "162"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b160").on("click", function(){ ion.sound.play("160");});
			$("#b161").on("click", function(){ ion.sound.play("161");});
			$("#b162").on("click", function(){ ion.sound.play("162");});

	//「 静御前 メイド 」音声
			ion.sound({
				sounds: [
					{name: "163"},
					{name: "164"},
					{name: "165"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b163").on("click", function(){ ion.sound.play("163");});
			$("#b164").on("click", function(){ ion.sound.play("164");});
			$("#b165").on("click", function(){ ion.sound.play("165");});

	//「 ミロク 執事 」音声
			ion.sound({
				sounds: [
					{name: "166"},
					{name: "167"},
					{name: "168"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b166").on("click", function(){ ion.sound.play("166");});
			$("#b167").on("click", function(){ ion.sound.play("167");});
			$("#b168").on("click", function(){ ion.sound.play("168");});

	//「 宮本武蔵 桜芽 」音声
			ion.sound({
				sounds: [
					{name: "169"},
					{name: "170"},
					{name: "171"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b169").on("click", function(){ ion.sound.play("169");});
			$("#b170").on("click", function(){ ion.sound.play("170");});
			$("#b171").on("click", function(){ ion.sound.play("171");});

	//「 前田利家／犬千代 」音声
			ion.sound({
				sounds: [
					{name: "172"},
					{name: "173"},
					{name: "174"},
					{name: "175"},
					{name: "176"},
					{name: "177"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b172").on("click", function(){ ion.sound.play("172");});
			$("#b173").on("click", function(){ ion.sound.play("173");});
			$("#b174").on("click", function(){ ion.sound.play("174");});
			$("#b175").on("click", function(){ ion.sound.play("175");});
			$("#b176").on("click", function(){ ion.sound.play("176");});
			$("#b177").on("click", function(){ ion.sound.play("177");});

//「 上杉謙信 新春 」音声
		ion.sound({
			sounds: [
				{name: "178"},
				{name: "179"},
				{name: "180"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b178").on("click", function(){ ion.sound.play("178");});
		$("#b179").on("click", function(){ ion.sound.play("179");});
		$("#b180").on("click", function(){ ion.sound.play("180");});

//「 ガウェイン 新春 」音声
		ion.sound({
			sounds: [
				{name: "181"},
				{name: "182"},
				{name: "183"}
			],
			path: "sounds/",
			preload: true,
			volume: 1.0
		});
		$("#b181").on("click", function(){ ion.sound.play("181");});
		$("#b182").on("click", function(){ ion.sound.play("182");});
		$("#b183").on("click", function(){ ion.sound.play("183");});


	//「 坂田金時 可憐 」音声
			ion.sound({
				sounds: [
					{name: "184"},
					{name: "185"},
					{name: "186"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b184").on("click", function(){ ion.sound.play("184");});
			$("#b185").on("click", function(){ ion.sound.play("185");});
			$("#b186").on("click", function(){ ion.sound.play("186");});

	//「 小野小町 」音声
			ion.sound({
				sounds: [
					{name: "187"},
					{name: "188"},
					{name: "189"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b187").on("click", function(){ ion.sound.play("187");});
			$("#b188").on("click", function(){ ion.sound.play("188");});
			$("#b189").on("click", function(){ ion.sound.play("189");});

	//「 東北きりたん 」音声
			ion.sound({
				sounds: [
					{name: "190"},
					{name: "191"},
					{name: "192"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b190").on("click", function(){ ion.sound.play("190");});
			$("#b191").on("click", function(){ ion.sound.play("191");});
			$("#b192").on("click", function(){ ion.sound.play("192");});

	//「東北ずん子」音声
			ion.sound({
				sounds: [
					{name: "193"},
					{name: "194"},
					{name: "195"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b193").on("click", function(){ ion.sound.play("193");});
			$("#b194").on("click", function(){ ion.sound.play("194");});
			$("#b195").on("click", function(){ ion.sound.play("195");});

	//「犬千代_封呪」音声
			ion.sound({
				sounds: [
					{name: "193_i"},
					{name: "194_i"},
					{name: "195_i"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b193_i").on("click", function(){ ion.sound.play("193_i");});
			$("#b194_i").on("click", function(){ ion.sound.play("194_i");});
			$("#b195_i").on("click", function(){ ion.sound.play("195_i");});

	//「猿飛佐助_水兵」音声
			ion.sound({
				sounds: [
					{name: "196_s"},
					{name: "197_s"},
					{name: "198_s"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b196_s").on("click", function(){ ion.sound.play("196_s");});
			$("#b197_s").on("click", function(){ ion.sound.play("197_s");});
			$("#b198_s").on("click", function(){ ion.sound.play("198_s");});

		//「玄武」音声
			ion.sound({
				sounds: [
					{name: "199_g"},
					{name: "200_g"},
					{name: "201_g"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b199_g").on("click", function(){ ion.sound.play("199_g");});
			$("#b200_g").on("click", function(){ ion.sound.play("200_g");});
			$("#b201_g").on("click", function(){ ion.sound.play("201_g");});

	//「茨木童子_夏空」音声
			ion.sound({
				sounds: [
					{name: "202_i"},
					{name: "203_i"},
					{name: "204_i"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b202_i").on("click", function(){ ion.sound.play("202_i");});
			$("#b203_i").on("click", function(){ ion.sound.play("203_i");});
			$("#b204_i").on("click", function(){ ion.sound.play("204_i");});


	//「エル」音声
			ion.sound({
				sounds: [
					{name: "205"},
					{name: "206"},
					{name: "207"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b205").on("click", function(){ ion.sound.play("205");});
			$("#b206").on("click", function(){ ion.sound.play("206");});
			$("#b207").on("click", function(){ ion.sound.play("207");});

	//「ルミ」音声
			ion.sound({
				sounds: [
					{name: "208"},
					{name: "209"},
					{name: "210"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b208").on("click", function(){ ion.sound.play("208");});
			$("#b209").on("click", function(){ ion.sound.play("209");});
			$("#b210").on("click", function(){ ion.sound.play("210");});

	//「東北イタコ」音声
			ion.sound({
				sounds: [
					{name: "211"},
					{name: "212"},
					{name: "213"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b211").on("click", function(){ ion.sound.play("211");});
			$("#b212").on("click", function(){ ion.sound.play("212");});
			$("#b213").on("click", function(){ ion.sound.play("213");});

	//「琴葉茜」音声
			ion.sound({
				sounds: [
					{name: "akane_01"},
					{name: "akane_02"},
					{name: "akane_03"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b214").on("click", function(){ion.sound.play("akane_01");});
			$("#b215").on("click", function(){ion.sound.play("akane_02");});
			$("#b216").on("click", function(){ion.sound.play("akane_03");});

	//「琴葉葵」音声
			ion.sound({
				sounds: [
					{name: "aoi_01"},
					{name: "aoi_02"},
					{name: "aoi_03"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b217").on("click", function(){ion.sound.play("aoi_01");});
			$("#b218").on("click", function(){ion.sound.play("aoi_02");});
			$("#b219").on("click", function(){ion.sound.play("aoi_03");});


	//「琴葉葵」音声
			ion.sound({
				sounds: [
					{name: "yorimitsu01"},
					{name: "yorimitsu02"},
					{name: "yorimitsu03"}
				],
				path: "sounds/",
				preload: true,
				volume: 1.0
			});
			$("#b220").on("click", function(){ion.sound.play("yorimitsu01");});
			$("#b221").on("click", function(){ion.sound.play("yorimitsu02");});
			$("#b222").on("click", function(){ion.sound.play("yorimitsu03");});



// end ---------------
}); // 閉じタグ
