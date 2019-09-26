<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<section id="intro-video" data-magellan-target="intro-video">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-agency3-white.svg">

		<video id="background-video" class="video-js" muted loop preload="auto" autoplay="true">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero-image.mp4" type="video/mp4">
        </video>        

        <div id="text-container">
            <div class="box">
                <p>We build brands to successfully expand into new markets</p>
            </div>
        </div>
    </section>

    <section id="intro-offers" data-magellan-target="intro-offers">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell text-center">
                    <p class="lead">By offering an end to end export &amp; import solution.</p>
                </div>
            </div>

            <div class="grid-x">
                <br>
            </div>

            <div class="grid-x small-up-2 medium-up-7 icons">
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-brand-strategy.svg" class="icon">

                    <p>Brand<br>Strategy</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-creative-strategy.svg" class="icon">

                    <p>Creative<br>Strategy</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-marketing.svg" class="icon">

                    <p>Marketing</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-advertising.svg" class="icon">

                    <p>Advertising</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-media.svg" class="icon">

                    <p>Media</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-distribution-logistics.svg" class="icon">

                    <p>Distribution &amp;<br>Logistics</p>
                </div>
            
                <div class="cell">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-launch.svg" class="icon">

                    <p>Launch</p>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" data-magellan-target="why-us">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>1.</span>
                    </div>
                </div>
            </div>

            <div class="grid-x align-center">
                <div class="cell small-12 large-10">
                    <h1>This is who we are.</h1>

                    <div class="grid-x grid-margin-x icons">
                        <div class="cell small-12 medium-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-actively-different.jpg">

                            <p>Actively Different</p>
                        </div>

                        <div class="cell small-12 medium-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-result-driven.jpg">

                            <p>Results Driven</p>
                        </div>

                        <div class="cell small-12 medium-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-action-oriented.jpg">

                            <p>Action Oriented</p>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-10">
                    <h3>We love the fact we're not your 'normal' advertising agency.</h3>

                    <p>There’s no high ceilings, fancy foyers or bikes hanging on walls. Our office is anywhere and everywhere. We believe in going where the work is, spending time in our clients office, supporting local coffee shops, pop up spaces and existing in the virtual ‘office’ world.</p>

                    <h3>We champion brands with big goals.</h3>

                    <p>By getting back to the basics of what makes a brand great in any market. We approach every brand with a clear understanding of the business problem, what is needed to solve it, and what return on investment is needed for the brand to be a success. Leading with brand strategy, creative and marketing we set the foundations right from the word go, accessorising along the way with the right research, insights and people to make sure your brand is ready for any market, anywhere in the world.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do" data-magellan-target="what-we-do">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>2.</span>
                    </div>
                </div>
            </div>

            <div class="tab-container">
                <div class="grid-x align-center">
                    <div id="what-we-do-content" class="cell" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/interchange/what-we-do-small.php, small],
                    [<?php echo get_stylesheet_directory_uri();?>/interchange/what-we-do-large.php, medium],
                    [<?php echo get_stylesheet_directory_uri();?>/interchange/what-we-do-large.php, large]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-team" data-magellan-target="our-team">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>3.</span>
                    </div>
                </div>
            </div>

            <div class="grid-x align-center">
                <div class="cell large-8">
                    <h3>Our team is like a global community.</h3>

                    <p>A community that allows us to bring in the right specialists for solving whatever project you have. There’s no retro fitting of skills, only experts in their chosen field. And who you meet are the faces you will see from the beginning of a project to the end and hopefully beyond.</p>

                    <p>Our talent is from all over the world. People we’ve worked with, been inspired by and who bring a little pizzaz into the room.</p>
                </div>
            </div>

            <div class="tab-container">
                <div class="grid-x align-center">
                    <div id="our-team-content" class="cell large-10" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/interchange/team-small.php, small],
                    [<?php echo get_stylesheet_directory_uri();?>/interchange/team-large.php, medium],
                    [<?php echo get_stylesheet_directory_uri();?>/interchange/team-large.php, large]">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brands" data-magellan-target="brands">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>4.</span>
                    </div>
                </div>
            </div>

            <div class="grid-x align-center">
                <div class="cell large-8">
                    <h3>Brands we've worked with.</h3>

                    <p>We don’t believe in the old fashioned client agency relationship of us and them.What we do believe in is creating a seamless and collaborative ecosystem where we grow with our partners and champion their brand. Challenging ideas, pulling them apart and questioning their worth to make sure a brand is not just good, it’s brilliant.</p>
                </div>
            </div>

            <div class="grid-x align-center">
                <div class="small-8 medium-10 large-12">
                    <div class="grid-x grid-padding-x medium-up-2 large-up-3 icons">
                        <?php
                            $param = array(
                                'limit' => 0,
                                'orderby' => 'menu_order ASC',
                            );

                            $brands = pods( 'brand', $param );

                            if ( $brands->total() > 0 ) {
                                while ( $brands->fetch() ) {
                                    $img = get_the_post_thumbnail_url( $brands->display( 'ID' ), 'full' );

                                    echo '<div class="cell">';
                                        echo '<img src="' . $img . '">';
                                    echo '</div>';

                                }

                            } else {
                                echo '<p>Unavailable</p>';
                            }
                        ?>

                        <!--<div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-campbells.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-energus.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-hasbro.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mcdonalds.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bublicious.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-the-optical-co.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wundar.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-friesland-campina.svg">
                        </div>

                        <div class="cell">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-dfa.svg">
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="point-of-interest" data-magellan-target="point-of-interest">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>5.</span>
                    </div>

                    <h3>Point of Interest</h3>
                </div>
            </div>

            <div class="grid-x grid-margin-x posts">
                <div class="cell small-12 medium-6">
                    <div class="grid-x">
                        <?php

                            $the_query = new WP_Query( array(
                                'posts_per_page' => 3,
                            ));

                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                <?php get_template_part( 'parts/loop', 'archive' ); ?>

                            <?php endwhile; ?>

                        <?php else : ?>

                            <?php get_template_part( 'parts/content', 'missing' ); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" data-magellan-target="contact">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell">
                    <div class="numeration">
                        <span>6.</span>
                    </div>
                </div>
            </div>

            <div class="grid-x align-center">
                <div class="cell large-10">
                    <h3>Our office.</h3>

                    <p>At Agency 3, we believe in going where the work is. Anywhere we can fit a laptop, a layout pad and packet of sharpie markers is where you’ll find us</p>

                    <p>So why not send us an email or if you want to speak to someone you can call our Creative Founder - Sandy Rudd on 0409019489.</p>

                     <h3>Locations</h3>

                    <div class="grid-x grid-margin-x">
                        <div class="cell small-6 medium-3">
                            <p><strong>Sydney</strong><br><span>45 Lime Street<br>Sydney NSW<br>Australia</span></p>
                        </div>

                        <div class="cell small-6 medium-3">
                            <p><strong>Melbourne</strong><br><span>702, 55 Queens Road<br>Melbourne Victoria<br>Australia</span></p>
                        </div>

                        <div class="cell small-6 medium-3">
                            <p><strong>Singapore</strong><br><span>71 Robinsons Road<br>Singapore</span></p>
                        </div>

                        <div class="cell small-6 medium-3">
                            <p><strong>Indonesia</strong><br><span>Jalan Damar Sari III No.31<br>Pasar Minggu, Jakarta<br>Indonesia</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="form-container">
            <div id="gmap"></div>


            <form method="post" data-abide="ajax" novalidate class="grid-container">
                <input type="hidden" name="action" value="agency3_send_email">

                <div class="grid-x align-center">
                    <div class="cell large-10">
                        <div class="grid-x grid-margin-x">
                            <div class="cell large-6">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>

                            <div class="cell large-6">
                                <input type="text" name="company" placeholder="Company">
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="cell large-6">
                                <input type="text" name="email" placeholder="Email" required>
                            </div>

                            <div class="cell large-6">
                                <input type="text" name="phone" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="cell">
                                <textarea name="message" placeholder="Message" required></textarea>

                                <button id="submit-button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
           </form>
       </div>
    </section>

<?php get_footer(); ?>