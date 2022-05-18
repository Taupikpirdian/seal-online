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

//showHide()
function showHide (id,ident,tot_id) {
	for (i=1;i<=tot_id;i++) {
		document.getElementById(id + i).style.display = 'none';
	}
	document.getElementById(id + ident).style.display = '';
}

function hide( targetId ){
 	 if (document.getElementById){
  		target = document.getElementById( targetId );
  				target.style.visibility = "hidden";
  			}
  		}

function show( targetId ){
 	 if (document.getElementById){
  		target = document.getElementById( targetId );
  				target.style.visibility = "visible";
  			}
  		}

function turnOn( targetId ){
 	 if (document.getElementById){
  		target = document.getElementById( targetId );
  		if (target.style.display =="block") {
  			target.style.display = "none";
  		}
  		else {
			target.style.display = "block";
		}
	}
}

function turnOnBtskill( targetId ){
 	 if (document.getElementById){
  		target = document.getElementById( targetId );
  		if (target.style.display =="block") {
  			target.style.display = "none";
  		}
  		else {
			target.style.display = "block";
		}
		a = document.getElementById("btskill");
		if(a.style.backgroundImage != "url(/images/panduan/profesi/bt_skill_on.gif)"){
			a.style.backgroundImage = "url(/images/panduan/profesi/bt_skill_on.gif)";
			
		}
		else {
			a.style.backgroundImage = "url(/images/panduan/profesi/bt_skill_off.gif)";
		}
		//a.style.backgroundImage = "url(/images/panduan/profesi/bt_skill_on.gif)";
	}
}

function turnOnBtST( targetId ){
 	 if (document.getElementById){
  		target = document.getElementById( targetId );
  		if (target.style.display =="block") {
  			target.style.display = "none";
  		}
  		else {
			target.style.display = "block";
		}
	}
}

/*function changebt( targetId ) {
	if (document.getElementById){
  		target = document.getElementById( targetId );
  		if (target.style.background-image =="url(../images/panduan/profesi/bt_skill_off.gif)") {
  			target.style.background-image ="url(../images/panduan/profesi/bt_skill_on.gif)";
  		}
  		else {
			target.style.background-image ="url(../images/panduan/profesi/bt_skill_off.gif)"
		}
	}
}*/

//cchanger
function cchanger(id,ident,tot_cla) {
	for (i=1;i<=tot_cla;i++) {
		changec(id + i, id + i + '_off');
	}
	changec(id + ident, id + ident + '_on');
}

function mcchanger(id,ident,tot_cla) {
	for (i=2;i<=tot_cla;i++) {
		changec(id + i, id + i + '_off');
	}
	changec(id + ident, id + ident + '_on');
}


//changec
function changec(id, newClass) {
	identity=document.getElementById(id);
	identity.className=newClass;
}



// opera to counter -30 #cal #face margin
var detect = navigator.userAgent.toLowerCase();
var face,total,thestring;

if (checkIt('opera')) {
	document.write("<link REL='stylesheet' HREF='/css/opera.css' TYPE='text/css'>");
}


function checkIt(string) {
	place = detect.indexOf(string) + 1;
	thestring = string;
	return place;
}




function rndquote() {
	var text_st = new Array(

"Game Master tidak akan pernah menanyakan password kamu.",
"Simpanlah kerahasiaan data kamu dengan baik.",
"Isilah data-data ID kamu dengan benar.",
"Kode PIN harus diingat baik-baik.",
"Ingatlah dengan baik password Bank Seal kamu.",
"Jangan berbagi ID dengan orang lain."

	);
	
	var l = text_st.length;
	
	var rnd_no = Math.round((l-1)*Math.random());
	document.write(text_st[rnd_no]);
}

//BUKA WIN
function bukawin(bookURL,j_width,j_height,j_scroll, j_name){
    var winTop,winLeft;
    if (j_name=="" || j_name==null){
        j_name='b';
    }
	if(j_scroll=="" || j_scroll==null){
		j_scroll="yes";
	}
	if(j_width>screen.width){
		winLeft=0;
	}else{
		winLeft=(screen.width-j_width)/2;
	}
	if(j_height>screen.height){
		winTop=0;
	}else{
		winTop=(screen.height-j_height)/2;
	}
	var winFeat = "menubar=no,scrollbars="+j_scroll+",status=no,toolbar=no,height="+j_height+",width="+j_width;
	winFeat = winFeat+",top="+winTop+",left="+winLeft;
	var newWin = window.open(bookURL,j_name,winFeat);
	newWin.focus()
}

// IMG POP

PositionX = 100;
PositionY = 100;

defaultWidth  = 500;
defaultHeight = 500;

var AutoClose = true;

if (parseInt(navigator.appVersion.charAt(0))>=4){
var isNN=(navigator.appName=="Netscape")?1:0;
var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
var optNN2='scrollbars=yes,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE2='scrollbars=yes,width=150,height=100,left='+PositionX+',top='+PositionY;

function popImage(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN);}
if (isIE){imgWin=window.open('about:blank','',optIE);}

with (imgWin.document) {
	writeln('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">');
	writeln('<html>');
	writeln('<head>');
	writeln('<title>SEAL Online Indonesia</title>');
	writeln('<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">');
	writeln('<sc'+'ript type="text/javasc'+'ript">');
	writeln('<!--');
	writeln('// Shape me');
	writeln('var isNN,isIE;');
	writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
	writeln('	isNN=(navigator.appName=="Netscape")?1:0;');
	writeln('	isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
	writeln('function reSizeToImage()');
	writeln('{');
	writeln('	if (isIE)');
	writeln('	{');
	writeln('		window.resizeTo(100,100);');
	writeln('		width=100-(document.body.clientWidth-document.images[0].width);');
	writeln('		height=100-(document.body.clientHeight-document.images[0].height);');
	writeln('		window.resizeTo(width,height);');
	writeln('	}');
	writeln('	if (isNN)');
	writeln('	{');
	writeln('		window.innerWidth=document.images["Seal"].width;');
	writeln('		window.innerHeight=document.images["Seal"].height;');
	writeln('	}');
	writeln('}');
	writeln('function doTitle(){document.title="'+imageTitle+'";');
	writeln('}');
	writeln('// Close me');
	writeln('function IE(e) ');
	writeln('{');
	writeln('     if (isIE && (event.button == 2 || event.button == 3))');
	writeln('     {');
	writeln('          self.close();');
	writeln('          return false;');
	writeln('     }');
	writeln('}');
	writeln('function NS(e) ');
	writeln('{');
	writeln('     if (document.layers || (document.getElementById && !document.all))');
	writeln('     {');
	writeln('          if (e.which==2 || e.which==3)');
	writeln('          {');
	writeln('               self.close();');
	writeln('               return false;');
	writeln('          }');
	writeln('     }');
	writeln('}');
	writeln('document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("self.close();");');
	writeln('-->');	
	writeln('</sc'+'ript>');
	writeln('</head>');
	writeln('<body style="margin: 0;" onload="reSizeToImage(); doTitle(); self.focus()">');
	writeln('<a href="j#" onclick="javascript: onclick=self.close();return false;"><img name="Seal" src='+imageURL+' style="display:block;border:0"></a>');
	writeln('</body>');
	writeln('</html>');
	close();		
	}
}

function popImage2(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN2);}
if (isIE){imgWin=window.open('about:blank','',optIE2);}

with (imgWin.document) {
	writeln('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">');
	writeln('<html>');
	writeln('<head>');
	writeln('<title>SEAL Online Indonesia</title>');
	writeln('<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">');
	writeln('<sc'+'ript type="text/javasc'+'ript">');
	writeln('<!--');
	writeln('// Shape me');
	writeln('var isNN,isIE;');
	writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
	writeln('	isNN=(navigator.appName=="Netscape")?1:0;');
	writeln('	isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
	writeln('function reSizeToImage()');
	writeln('{');
	writeln('	if (isIE)');
	writeln('	{');
	writeln('		window.resizeTo(100,100);');
	writeln('		width=100-(document.body.clientWidth-document.images[0].width);');
	writeln('		height=100-(document.body.clientHeight-document.images[0].height);');
	writeln('		window.resizeTo(width,height);');
	writeln('	}');
	writeln('	if (isNN)');
	writeln('	{');
	writeln('		window.innerWidth=document.images["Seal"].width;');
	writeln('		window.innerHeight=document.images["Seal"].height;');
	writeln('	}');
	writeln('}');
	writeln('function doTitle(){document.title="'+imageTitle+'";');
	writeln('}');
	writeln('// Close me');
	writeln('function IE(e) ');
	writeln('{');
	writeln('     if (isIE && (event.button == 2 || event.button == 3))');
	writeln('     {');
	writeln('          self.close();');
	writeln('          return false;');
	writeln('     }');
	writeln('}');
	writeln('function NS(e) ');
	writeln('{');
	writeln('     if (document.layers || (document.getElementById && !document.all))');
	writeln('     {');
	writeln('          if (e.which==2 || e.which==3)');
	writeln('          {');
	writeln('               self.close();');
	writeln('               return false;');
	writeln('          }');
	writeln('     }');
	writeln('}');
	writeln('document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("self.close();");');
	writeln('-->');	
	writeln('</sc'+'ript>');
	writeln('</head>');
	writeln('<body style="margin: 0;" onload="reSizeToImage(); doTitle(); self.focus()">');
	writeln('<a href="j#" onclick="javascript: onclick=self.close();return false;"><img name="Seal" src='+imageURL+' style="display:block;border:0"></a>');
	writeln('</body>');
	writeln('</html>');
	close();		
	}
}

function turnBanner( targetId, targetId2 ){
 	 if (document.getElementById){
		for (i=1;i<=5;i++) {
			document.getElementById("item" + i).style.backgroundImage="url(../images/depan/bg-item"+i+".jpg)";
			document.getElementById("banner" + i).style.display = "none";
		}
		target = document.getElementById( targetId );
		target2 = document.getElementById( targetId2 );
		target.style.display = "block";
		target2.style.backgroundImage="url(../images/depan/bg-"+targetId2+"h.jpg)";
	}
}






}
