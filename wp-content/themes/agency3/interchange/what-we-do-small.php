<?php
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

<div class="accordion-container">
    <ul id="what-we-do-accordion" class="accordion" data-accordion data-allow-all-closed="true">
        <li class="accordion-item" data-accordion-item>
            <a class="accordion-title">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-strategy.png">

                <span>Strategy</span>
            </a>

            <div class="accordion-content" data-tab-content>
                <div class="box">
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

        <li class="accordion-item" data-accordion-item>
            <a class="accordion-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-creative.png">

                <span>Creative</span>
            </a>

            <div class="accordion-content" data-tab-content>
                <div class="box">
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

        <li class="accordion-item" data-accordion-item>
            <a class="accordion-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-technology.png">

                <span>Technology</span>
            </a>

            <div class="accordion-content" data-tab-content>
                <div class="box">
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

        <li class="accordion-item" data-accordion-item>
            <a class="accordion-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-performance.png">

                <span>Performance</span>
            </a>

            <div class="accordion-content" data-tab-content>
                <div class="box">
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
    jQuery('#our-team-content').on('replaced.zf.interchange', function(){
        new Foundation.Accordion(jQuery('#what-we-do-accordion'));
    });
</script>