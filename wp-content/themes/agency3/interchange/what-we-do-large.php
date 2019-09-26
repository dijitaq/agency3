<?php
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

<ul class="tabs clearfix" id="what-we-do-tabs">
    <li class="tabs-title">
        <a class="button-trigger" href="#what-we-do-strategy">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-strategy.png">

            <span>Strategy</span>
        </a>
    </li>

    <li class="tabs-title">
        <a class="button-trigger" href="#what-we-do-creative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-creative.png">

            <span>Creative</span>
        </a>
    </li>

    <li class="tabs-title">
        <a class="button-trigger" href="#what-we-do-technology">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-technology.png">

            <span>Technology</span>
        </a>
    </li>

    <li class="tabs-title">
        <a class="button-trigger" href="#what-we-do-performance">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-performance.png">

            <span>Performance</span>
        </a>
    </li>
</ul>

<div class="accordion-container" data-equalizer="what-we-do">
    <ul id="what-we-do-strategy" class="accordion clearfix" data-accordion data-allow-all-closed="true" data-slide-speed="500">
        <li class="accordion-item" data-accordion-item>
            <div class="accordion-content" data-tab-content>
                <div class="box" data-equalizer-watch="what-we-do">
                    <ul>
                        <li>Brand</li>
                        <li>Campaign</li>
                        <li>Retail Path to Purchase</li>
                        <li>Digital Strategy</li>
                        <li>Social Engagement Strategy</li>
                        <li>Customer Insight</li>
                        <li>CRM</li>
                        <li>Customer journeys</li>
                        <li>Planning</li>
                        <li>Content</li>
                        <li>Acquisition and Retention</li>
                        <li>e-commerce</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    
    <ul id="what-we-do-creative" class="accordion clearfix" data-accordion data-allow-all-closed="true" data-slide-speed="500">
        <li class="accordion-item" data-accordion-item>
            <div class="accordion-content" data-tab-content>
                <div class="box" data-equalizer-watch="what-we-do">
                    <ul>
                        <li>Brand Development</li>
                        <li>Marketing Campaign</li>
                        <li>Direct Marketing</li>
                        <li>Digital</li>
                        <li>Social</li>
                        <li>TV</li>
                        <li>Print</li>
                        <li>Outdoor</li>
                        <li>Radio</li>
                        <li>Experiential</li>
                        <li>User Experience</li>
                        <li>B2B/B2C Marketing</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    
    <ul id="what-we-do-technology" class="accordion clearfix" data-accordion data-allow-all-closed="true" data-slide-speed="500">
        <li class="accordion-item" data-accordion-item>
            <div class="accordion-content" data-tab-content>
                <div class="box" data-equalizer-watch="what-we-do">
                    <ul>
                        <li>Web Development</li>
                        <li>App Development</li>
                        <li>Hosting</li>
                        <li>Mobile</li>
                        <li>Technical Innovation</li>
                        <li>Data</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    
    <ul id="what-we-do-performance" class="accordion clearfix" data-accordion data-allow-all-closed="true" data-slide-speed="500">
        <li class="accordion-item" data-accordion-item>
            <div class="accordion-content" data-tab-content>
                <div class="box" data-equalizer-watch="what-we-do">
                    <ul>
                        <li>Analytics</li>
                        <li>CRM Analysis</li>
                        <li>SEO Optimisation</li>
                        <li>Website Analysis</li>
                        <li>Performance Measurement</li>
                        <li>ROI</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</div>

<script>
    var start = false;
        
    jQuery('#what-we-do-content').on('replaced.zf.interchange', function(){
        jQuery('#what-we-do-content').find('.accordion-container').on('postequalized.zf.equalizer', function() {
            jQuery('#what-we-do-content').find('.accordion-container').addClass('is-activated');

            jQuery('#what-we-do-content').find('.accordion').each(function() {
                var id = jQuery(this).attr('id');
                console.log(id);
                new Foundation.Accordion(jQuery('#' + id));
            });

            jQuery('#what-we-do-content').find('.accordion-container').removeAttr('data-equalizer').removeAttr('data-resize').removeAttr('data-mutate');
        });
        
        jQuery('#what-we-do-content').find('.accordion').on('down.zf.accordion', function() {
            console.log("asdasda");

            jQuery('#what-we-do').find('.tab-container').css('height', jQuery('#what-we-do').find('.tab-container').height());  
        });

        if (!start) {
            new Foundation.Equalizer(jQuery('#what-we-do-content').find('.accordion-container'));
        }

        start = true;
    });
        
    jQuery('#what-we-do-content').find('.button-trigger').on('click touchstart', function(e) {
        e.preventDefault();

        var id = jQuery(this).attr('href');
        
        if (jQuery(this).hasClass('is-open')) {
            jQuery('#what-we-do').find('.tab-container').css('height', "auto");
                                    
            jQuery(id).foundation('up', jQuery(id).find('.accordion-content'), true);
            
        } else {
            jQuery(id).foundation('down', jQuery(id).find('.accordion-content'), true);

            jQuery('#what-we-do-content').find('.accordion:not(' + id + ')').foundation('up', jQuery('#what-we-do-content').find('.accordion:not(' + id + ')').find('.accordion-content'));
            
            jQuery(this).closest('ul').find('.button-trigger.is-open').removeClass('is-open');
        }
        
        jQuery(this).toggleClass('is-open');
    });
</script>