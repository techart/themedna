$(function() {
	$('.filter-select').each(function() {
		var wasOpened = false;
		var $field = $(this);
		var $header = $('.header', $field);
		var $items = $('.items', $field);
		var $inputContainer = $('.input', $field);
		var $input = $('.input input', $field);
		var $informer = $('.input span', $field);
		$header.click(function() {
			if ($field.hasClass('closed')) {
				open();
			} else {
				close();
			}
		});
		
		$inputContainer.click(open);
		
		$('.item', $items).click(function() {
			if ($(this).hasClass('selected')) {
				$(this).removeClass('selected');
				var id = '';
				var text = '';
			} else {
				$('.item', $items).removeClass('selected');
				$(this).addClass('selected');
				var id = $(this).attr('data-id');
				var text = $(this).html();
				$inputContainer.show();
			}
			$informer.empty().append(text).show();
			$input.attr('value', id);
			close();
		});
		
		
		function open() {
			$inputContainer.hide();
			$field.removeClass('closed').addClass('opened');
			if (!wasOpened) {
				$('.item.selected', $items).each(function() {
					var h = $(this).position().top;
					$('.simplebar-content', $items).scrollTop(h);
					console.log(h);
				});
			}
			wasOpened = true;
		}
		
		function close() {
			$field.removeClass('opened').addClass('closed');
		}
		
	});
});