/*
$(function(){
	if($.cookie("footer_pop") == '1') {
	} else {
		setTimeout("footer_pop_component()", 5000);
	}
});
*/

function footer_pop_component(){

	footer_pop_slide_in();

	/*$('#footer_pop_box_check').click(function(){
		var footer_pop_check_status = $('#footer_pop_checked').is(':checked');
		if(footer_pop_check_status == true){
			$.cookie('footer_pop', '1' ,{expires: 365});
		} else {
			$.cookie('footer_pop', '0');
		}
	})*/
	$('#footer_pop_box_off').click(function(){
		var footer_pop_check_status = $('#footer_pop_checked').is(':checked');
		if(footer_pop_check_status == true){
			footer_pop_slide_del();
		} else {
			footer_pop_slide_out();
		}
	})
	$('#footer_show').click(function(){
		footer_pop_slide_in();
	});
}

function footer_pop_slide_out(){
	$('#footer_pop_box_off_btn').css( 'opacity','0');
	$('#footer_pop').animate({ 'width': "0px", opacity: 1},700,'easeOutCubic');
	$('#footer_pop_box').animate({ opacity: 0},700,'easeOutCubic');


	setTimeout(function() {
		$('#footer_show').animate({ 'right': "-30px", opacity: 1},200,'easeOutCubic');
		$('#footer_pop_area').css( 'display','none');
	}, 700);
}

function footer_pop_slide_del(){
	$('#footer_pop').animate({ 'width': "0px", opacity: 0},700,'easeOutCubic');
}

function footer_pop_slide_in(){
	$('#footer_pop').css( 'display','block').animate({ 'width':'100%', opacity: 1},700,'easeOutCubic');
	$('#footer_pop_box').animate({ opacity: 1},700,'easeOutCubic');
	$('#footer_show').css( 'opacity','0').css( 'right','0');
	$('#footer_pop_area').css( 'display','block');
	setTimeout(function() {
		$('#footer_pop_box_off_btn').animate({ opacity: 1},700,'easeOutCubic');

	}, 700);
}
