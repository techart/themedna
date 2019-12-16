$(function() {
	$('.filter-multilink').each(function() {
		var $field = $(this);
		var $header = $('.header', $field);
		$header.click(function() {
			if ($field.hasClass('closed')) {
				$field.removeClass('closed').addClass('opened');
			} else {
				$field.removeClass('opened').addClass('closed');
			}
		});
	});
});