$(function(){

	// make cell clickable
	$('.cell').not('.free-space').click(function(){
		$(this).toggleClass('clicked');
	});

});