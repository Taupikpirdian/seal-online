function findstyle_for_crossbrowser(styleObject,styleArgs)
{
	var i ;
	for( i in styleArgs)
	{
        if (typeof styleObject[styleArgs[i]] != 'undefined') 
        	return styleArgs[i];
	}

	styleObject[styleArgs[i]] = '';
    return styleArgs[i];
}

(function ($) {

	if ( $.cssHooks )
	{
		//new jquery
		$.cssHooks.rotate = {
			get: function(elem, computed, extra)
			{
				return $(elem).rotate();
			},
			set: function(elem, value)
			{
				$(elem).rotate(value);
				return value;
			}
		};
		$.cssHooks.scale = {
			get: function(elem, computed, extra)
			{
				return $(elem).scale();
			},
			set: function(elem, value)
			{
				$(elem).scale(value);
				return value;
			}
		};
		$.cssHooks.transform = {
			get: function(elem, computed, extra)
			{
				name = findstyle_for_crossbrowser( elem.style , 
					['WebkitTransform', 'MozTransform', 'OTransform' , 'msTransform' , 'transform'] );
				return elem.style[name];
			},
			set: function(elem, value)
			{
				name = findstyle_for_crossbrowser( elem.style , 
					['WebkitTransform', 'MozTransform', 'OTransform' , 'msTransform' , 'transform'] );
				elem.style[name] = value;
				return value;
			}
		};
	}
	else
	{
		//old jquery
		var jquery_fix_orignal_style = $.style;
		var jquery_fix_orignal_curCSS = $.curCSS;

		jQuery.extend({
			style:	function( elem, name, value )
			{
				switch(name)
				{
				case 'rotate':
					$(elem).rotate(value);
					return value;
				case 'scale':
					$(elem).scale(value);
					return value;

				case 'transform':
					name = findstyle_for_crossbrowser( elem.style || elem , 
						['WebkitTransform', 'MozTransform', 'OTransform' , 'msTransform', 'transform'] );
					break;
				}
				return jquery_fix_orignal_style.apply(this, [elem, name, value] );
			}
			,
			curCSS:	function( elem, name, force )
			{
				switch(name)
				{
				case 'rotate':
					return $(elem).rotate();
				case 'scale':
					return $(elem).scale();

				case 'transform':
					name = findstyle_for_crossbrowser( elem.style || elem , 
						['WebkitTransform', 'MozTransform', 'OTransform' , 'msTransform', 'transform'] );
					break;
				}
				return jquery_fix_orignal_curCSS.apply(this, [elem, name, force] );
			}
		});
	}

	jQuery.fn.rotate  = function(val) 
	{
		if (typeof val == 'undefined')
		{
			if (jQuery.browser.opera)
			{
				//opera only 'rad'
				var r = this.css('transform').match(/rotate\((.*?)\)/);
				return  ( r && r[1])	?
					Math.round(parseFloat(r[1]) * 180 / Math.PI)		:		0;
			}
			else
			{
				var r = this.css('transform').match(/rotate\((.*?)\)/);
				return  ( r && r[1])	?	parseInt(r[1])	:	0;
			}
		}

		this.css('transform', 
			this.css('transform').replace(/none|rotate\(.*?\)/, '') + 'rotate(' + parseInt(val) + 'deg)');
		return this;
	};

	jQuery.fn.scale  = function(val) 
	{
		if (typeof val == 'undefined')
		{
			var r = this.css('transform').match(/scale\((.*?)\)/);
			return  ( r && r[1])	?	parseFloat(r[1])	:	1;
		}

		this.css('transform',
			this.css('transform').replace(/none|scale\(.*?\)/, '') + 'scale(' + parseFloat(val) + ')');
		return this;
	};

	jQuery.fx.step.rotate  = function(fx) {
		if ( fx.state == 0 ) {
			fx.start = $(fx.elem).rotate();
//			fx.end =   fx.end;
			fx.now = fx.start;
		}
		$(fx.elem).rotate(fx.now);
	};
	jQuery.fx.step.scale  = function(fx) {
		if ( fx.state == 0 ) {
			fx.start = $(fx.elem).scale();
//			fx.end =   fx.end;
			fx.now = fx.start;
		}
		$(fx.elem).scale(fx.now);
	};

})(jQuery);


//IE
if (jQuery.browser.msie && parseInt(jQuery.browser.version) <= 9)
{
	function GetAbsoluteXY(element)
	{
		var pnode = element;
		var x = pnode.offsetLeft;
		var y = pnode.offsetTop;
		
		while ( pnode.offsetParent )
		{
			pnode = pnode.offsetParent;
			if (pnode != document.body && pnode.currentStyle['position'] != 'static')
			{
				break;
			}
			if (pnode != document.body && pnode != document.documentElement)
			{
				x -= pnode.scrollLeft;
				y -= pnode.scrollTop;
			}
			x += pnode.offsetLeft;
			y += pnode.offsetTop;
		}
		
		return {
			x: x,
			y: y
		};
	}
	
	function StaticToAbsolute(element)
	{
		if ( element.currentStyle['position'] != 'static')
		{
			return ;
		}

		var yohakuDiv = document.createElement('div');
		yohakuDiv.style.left  = element.style.left;		yohakuDiv.style.left = element.style.left;
		yohakuDiv.style.width = element.style.width;	yohakuDiv.style.height = element.style.height;
		element.parentNode.appendChild(yohakuDiv);

		var xy = GetAbsoluteXY(element);
		element.style.position = 'absolute' ;
		element.style.left = xy.x + 'px';
		element.style.top = xy.y + 'px';
	}

	function IETransform(element,transform){
		var r,rx,ry;
		
		var m11 = 1;
		var m12 = 1;
		var m21 = 1;
		var m22 = 1;

		//IE9pp6 support msTransform.
		if (typeof element.style['msTransform'] != 'undefined')
		{
			return true;
		}

		StaticToAbsolute(element);

		r = transform.match(/rotate\((.*?)\)/);
		var rotate =  ( r && r[1])	?	parseInt(r[1])	:	0;

		rotate = rotate % 360;
		if (rotate < 0) rotate = 360 + rotate;

		var radian= rotate * Math.PI / 180;
		var cosX =Math.cos(radian);
		var sinY =Math.sin(radian);

		m11 *= cosX;
		m12 *= -sinY;
		m21 *= sinY;
		m22 *= cosX;

		//skew
		r = transform.match(/skewX\((.*?)\)/);
		var skewX =  ( r && r[1])	?	parseFloat(r[1])	:	0;
		r = transform.match(/skewY\((.*?)\)/);
		var skewY =  ( r && r[1])	?	parseFloat(r[1])	:	0;
		r = transform.match(/skew\((.*?)(?:,(.*?))?\)/);
		if (r)
		{
			skewX =  (r[1])	?	parseFloat(r[1])	:	0;
			skewY =  (r[2])	?	parseFloat(r[2])	:	0;
		}

		//0 ～ 360
		skewX = skewX % 360;
		if (skewX < 0) skewX = 360 + skewX;

		skewY = skewY % 360;
		if (skewY < 0) skewY = 360 + skewY;


//		m11 = m11;
		m12 = m12 + Math.tan(skewX * Math.PI / 180);
		m21 = m21 + Math.tan(skewY * Math.PI / 180);
//		m22 = m22;


		//scale
		r = transform.match(/scaleX\((.*?)\)/);
		rx =  ( r && r[1])	?	parseFloat(r[1])	:	undefined;
		r = transform.match(/scaleY\((.*?)\)/);
		ry =  ( r && r[1])	?	parseFloat(r[1])	:	undefined;
		r = transform.match(/scale\((.*?)(?:,(.*?))?\)/);
		var scaleX =  ( r && r[1])	?	parseFloat(r[1])	:	(typeof rx != 'undefined' ? rx : 1);
		var scaleY =  ( r && r[2])	?	parseFloat(r[2])	:	(typeof ry != 'undefined' ? ry : scaleX);

		m11 *= scaleX;
		m12 *= scaleX;
		m21 *= scaleY;
		m22 *= scaleY;

		element.style.filter =  (element.style.filter || '').replace(/progid:DXImageTransform\.Microsoft\.Matrix\([^)]*\)/, "" ) +
			("progid:DXImageTransform.Microsoft.Matrix(" + 
				 "M11=" + m11 + 
				",M12=" + m12 + 
				",M21=" + m21 + 
				",M22=" + m22 + 
				",FilterType='bilinear',sizingMethod='auto expand')") 
			;

  		var w = parseInt(element.offsetWidth);
  		var h = parseInt(element.offsetHeight);

  		ow = parseInt(element.style.width || element.width || 0 );
  		oh = parseInt(element.style.height ||element.height || 0  );

		var radian = rotate * Math.PI / 180;
		var absCosX =Math.abs(Math.cos(radian));
		var absSinY =Math.abs(Math.sin(radian));

		var dx = (ow - (ow * absCosX + oh * absSinY)) / 2;
		var dy = (oh - (ow * absSinY + oh * absCosX)) / 2;

		dx = dx - ow/2 * Math.tan(skewX * Math.PI / 180);
		dy = dy - oh/2 * Math.tan(skewY * Math.PI / 180);

		dx = dx - (((ow*scaleX) - ow) / 2);
		dy = dy - (((oh*scaleY) - oh) / 2);

		element.style.marginLeft = Math.floor(dx) + "px";
		element.style.marginTop  = Math.floor(dy) + "px";

		return(true);
	}
	if ( $.cssHooks )
	{
		var jquery_iebug_fix_orignal_set = $.cssHooks.transform.set;

		//new jquery
		$.cssHooks.transform.set = function(elem, value)
		{
				jquery_iebug_fix_orignal_set.apply(this, [elem, value] );
				IETransform(elem,value);
				return value;
		};
	}
	else
	{
		var jquery_iebug_fix_orignal_style = $.style;
		jQuery.extend({
			style:	function( elem, name, value )
			{
				var r = jquery_iebug_fix_orignal_style.apply(this, [elem, name, value] );
				switch(name)
				{
				case 'transform':
					IETransform(elem,value);
					break;
				}
				return r;
			}
		});
	}
}
