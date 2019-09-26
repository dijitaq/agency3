<?php
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

<?php 
    $args = array(
        'role' => 'team_member'
    );
?>


<script>
    jQuery('#our-team-content').on('replaced.zf.interchange', function(){
        new Foundation.Accordion(jQuery('#team-accordion'));
    });

    jQuery('#team-tabs').find('.button-trigger').on('click touchstart', function(e) {
        e.preventDefault();

        var id = jQuery(this).attr('href');
        
        if (jQuery(this).hasClass('is-open')) {
            jQuery('#team-accordion').foundation('up', jQuery(id).find('.accordion-content'), true);
            
        } else {
            jQuery('#team-accordion').foundation('up', jQuery(':not(' + id + ')').find('.accordion-content'), true);

            jQuery('#team-accordion').foundation('down', jQuery(id).find('.accordion-content'), true);

            jQuery(this).closest('ul').find('.button-trigger.is-open').removeClass('is-open');
        }

        jQuery(this).toggleClass('is-open');

        if(jQuery(this).closest('ul').find('.tabs-title.focused').length == 3) { 
            jQuery(this).closest('ul').find('.tabs-title').removeClass('focused');

            jQuery(this).parent().addClass('focused');

        } else {
            if (jQuery(this).parent().hasClass('focused')) {
                jQuery(this).closest('ul').find('.tabs-title').addClass('focused');

            } else {
                jQuery(this).closest('ul').find('.tabs-title').removeClass('focused');

                jQuery(this).parent().addClass('focused');
            }
        }
    });
</script>