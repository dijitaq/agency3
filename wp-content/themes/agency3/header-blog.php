<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>
  <html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

        <div style="width: 100%" data-magellan data-offset="-32">
            <a id="scroll-down-button" href="#intro-2">
                <i class="fas fa-angle-down"></i>
            </a>
        </div>

        <div id="trigger-container">
            <a data-toggle="off-canvas">
                <span></span>
                <span></span>
            </a>
        </div>

		<header id="main-header" class="is-up">
            <div class="grid-container" data-magellan data-offset="-32">
                <div class="grid-x">
                    <div class="cell small-12 large-3 text-center large-text-left">
                        <a href="<?php echo get_home_url(); ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-agency3.svg">
                        </a>
                    </div>

                    <div class="cell large-9 show-for-large">
                    	<ul id="main-navigation">
                            <li>
                                <a href="<?php echo get_home_url(); ?>#why-us">Why Us</a>
                            </li>

                            <li>
                                <a href="<?php echo get_home_url(); ?>#what-we-do">What we do</a>
                            </li>

                            <li>
                                <a href="<?php echo get_home_url(); ?>#our-team">Team</a>
                            </li>

                            <li>
                                <a href="<?php echo get_home_url(); ?>#brands">Brands</a>
                            </li>

                            <li>
                                <a href="<?php echo get_home_url(); ?>#point-of-interest">Blog</a>
                            </li>

                            <li>
                                <a href="<?php echo get_home_url(); ?>#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>