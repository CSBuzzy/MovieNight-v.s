$(document).ready(function(){
	$('.languesContenu').each(function(){
			var langue = $(this).attr('data-language');
			$('.langue').each(function(){
				if ($(this).attr('data-language') == langue) {
					$(this).addClass('langueChoisie');
				}
			});
	})
});