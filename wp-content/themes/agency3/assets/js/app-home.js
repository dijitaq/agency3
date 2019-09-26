function initialize_gmap() {
    var syndeyLatlang = new google.maps.LatLng(-33.8378536, 151.2072255);
    
    var sydneyOptions = {
        center: syndeyLatlang,
        zoom: 16,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#e3e3e3"}]},{"featureType":"landscape.natural","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#cccccc"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#FFFFFF"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]}]
        };

    var sydneyMap = new google.maps.Map(document.getElementById("gmap"),  sydneyOptions);
}

jQuery(document).ready(function()
{
    // what we do section
    var scene_1_controller = new ScrollMagic.Controller();
    var scene_1 = new ScrollMagic.Scene({
        triggerElement: '#intro-video',
        //triggerHook: "onEnter",
        duration: "100%"
    })
    //.addIndicators()
    .on("enter", function(){
        jQuery('#scroll-down-button').fadeIn();

        jQuery('#scroll-down-button').attr('href', "#intro-offers");

        jQuery('#main-header').addClass('is-hidden');

        jQuery('#trigger-container').removeClass('is-hidden');
    })
    .addTo(scene_1_controller);

    var scene_2_controller = new ScrollMagic.Controller();
    var scene_2 = new ScrollMagic.Scene({
        triggerElement: '#intro-offers',
        //triggerHook: "onEnter",
        duration: "100%"
    })
    //.addIndicators()
    .on("enter", function() {
        jQuery('#scroll-down-button').fadeOut();

        jQuery('#main-header').removeClass('is-hidden');

        if (Foundation.MediaQuery.atLeast('large')) {
            jQuery('#trigger-container').addClass('is-hidden')
            jQuery('#trigger-container').find('a').removeClass('is-activated');
        }
    })
    .addTo(scene_2_controller);

    //
    var fluid = false;

    if (Foundation.MediaQuery.atLeast('large')) {
        fluid = true;
    }

    var player = videojs('background-video', {
        fluid: fluid
    });

    player.ready(function() {
        var promise = player.play();

        if (promise !== undefined) {
            promise.then(function() {
                // Autoplay started!
                console.log('autoplay start');

            }).catch(function(error) {
                // Autoplay was prevented.
                console.log('autoplay prevented');
            });
        }
    });
});


//
jQuery('form').bind('submit', function(e) {
    e.preventDefault();
    
    var name_rules = {
        required: true,
    }
    
    var email_rules = {
        email: {
            required: true,
            email: true,
        }
    }
    
    var message_rules = {
        required: true,
    }
    
    var name_result = approve.value(jQuery('[name="name"]').val(), name_rules);
    var email_result = approve.value(jQuery('[name="email"]').val(), email_rules);
    var message_result = approve.value(jQuery('[name="message"]').val(), email_rules);
    
    if (name_result.required.approved && email_result.email.approved) {
        jQuery('[name="name"]').removeClass('error-field');
        jQuery('[name="email"]').removeClass('error-field');
        jQuery('[name="message"]').removeClass('error-field');
        
        console.log('valid!');

        thisForm = jQuery(this);
        formData = thisForm.serialize();

        console.log(formData);
        
        thisForm.find('[name="name"]').attr('disabled', true);
        thisForm.find('[name="email"]').attr('disabled', true);
        thisForm.find('[name="phone"]').attr('disabled', true);
        thisForm.find('[name="message"]').attr('disabled', true);
        thisForm.find('button').html('<i class="fa fa-spinner fa-spin"></i> sending inquiry').attr('disabled', true);
        
        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            data: formData,
            url: ajaxobject.ajaxurl,
            success: function(response){
                if (response) {
                    thisForm.find('[name="name"]').removeAttr('disabled').val("").blur();
                    thisForm.find('[name="email"]').removeAttr('disabled').val("").blur();
                    thisForm.find('[name="phone"]').removeAttr('disabled').val("").blur();
                    thisForm.find('[name="message"]').removeAttr('disabled').val("").blur();
                    thisForm.find('button').html('Send form').attr('disabled', true);
                    thisForm.blur();
                    
                    jQuery('#email-status').removeClass('is-hidden').find('p').text(response.message);
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown)
            }
        });
        
    } else {
        if(!name_result.required.approved) {
            jQuery('[name="name"]').addClass('error-field');
        }
        
        if(!email_result.email.approved) {
            jQuery('[name="email"]').addClass('error-field');
        }
        
        if(!message_result.email.approved) {
            jQuery('[name="message"]').addClass('error-field');
        }
    }
});


$(window).on("load", function()
{
    initialize_gmap();
});