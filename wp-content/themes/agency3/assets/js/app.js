jQuery(document).foundation();

jQuery('[data-toggle="main-navigation"]').on('click', function(e)
{
	e.stopPropagation();

	if (Foundation.MediaQuery.atLeast('large')) {
		if(jQuery('#main-header').hasClass('is-hidden')) {
			jQuery('#main-header').removeClass('is-hidden');

		} else {
			jQuery('#main-header').addClass('is-hidden');
		}
	}

	if(jQuery(this).hasClass('is-activated')) {
		jQuery(this).removeClass('is-activated');

	} else {
		jQuery(this).addClass('is-activated');
	}
});

jQuery('[data-toggle="off-canvas"]').on('click', function(e)
{
	e.stopPropagation();

	if (Foundation.MediaQuery.atLeast('large')) {
		if(jQuery('#main-header').hasClass('is-hidden')) {
			jQuery('#main-header').removeClass('is-hidden');

		} else {
			jQuery('#main-header').addClass('is-hidden');
		}
	}

	if(jQuery(this).hasClass('is-activated')) {
		jQuery('#off-canvas').foundation('close');

		jQuery(this).removeClass('is-activated');

	} else {
		jQuery('#off-canvas').foundation('open');

		jQuery(this).addClass('is-activated');
	}

	/*if(jQuery('#main-navigation-container').hasClass('is-hidden')) {
		jQuery('#main-navigation-container').removeClass('is-hidden');

	} else {
		jQuery('#main-navigation-container').addClass('is-hidden');
	}*/
});
