
$(() => {
	$('.form-field__manualSlug').map(function() {
		var field = $(this);
		var slug = field.find('input:text');
		var btn  = field.find('.form-field__manualSlug__btn');

		var form = slug[0].form;
		var formName = slug[0].id.replace('_slug', '');
		var source = $(form).find('#'+formName+'_'+slug.data('source'));

		var timer = null;

//		source.on('input', translit);
		btn.click(translit);

		function translit(e) {
			e.preventDefault();

			if (e.type == 'input') {
				clearTimeout(timer);
				timer = setTimeout(getTranslit, 250);
			} else {
				getTranslit();
			}
		}

		function getTranslit() {
			field.addClass('loading');
			$.get(btn[0].href, {text: source[0].value}, function(data) {
				slug[0].value = data;
				field.removeClass('loading');
			});
		}
	});
});
