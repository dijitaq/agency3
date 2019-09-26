jQuery(document).ready(function()
{
    if (jQuery('.blocks-gallery-item').length > 0) {
        jQuery('.blocks-gallery-item').find('a').attr('data-fancybox', "gallery");
    }

    jQuery('[data-fancybox="gallery"]').fancybox({
        infobar: false,
        touch: {
          vertical: false
        },
        buttons: ["close"],
        animationEffect: "fade",
        transitionEffect: "fade",
        preventCaptionOverlap: false,
        idleTime: false,
        gutter: 0,
    });

    if(jQuery('.wp-block-video').length > 0) {
        var counter = 0;
        var player;

        jQuery('.wp-block-video').find('video').each(function(){
            jQuery(this).attr('id', "video-" + counter).addClass("video-js vjs-fluid");

            player = videojs("video-" + counter, {
                fluid: true,
            });

            counter++;
        });
    }
});
