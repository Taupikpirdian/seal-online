// JavaScript Document
/* =================================================== */
$(function(){
	var setImg = '#viewer';
	var setText = '#txt_info';
	var fadeSpeed = 1500;
	var switchDelay = 5000;
	
	//**** rotation image ****//

	$(setImg).children('img').css({opacity:'0'});
	$(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

	//**** rotation text ****//
	$(setText).children('span').css({opacity:'0'});
	$(setText + ' span:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

	setInterval(function(){
		$(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
		$(setText + ' :first-child').animate({opacity:'0'},fadeSpeed).next('span').animate({opacity:'1'},fadeSpeed).end().appendTo(setText);
	},switchDelay);

});
/* =================================================== */