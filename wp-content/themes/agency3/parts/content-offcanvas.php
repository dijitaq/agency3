<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	<?php //joints_off_canvas_nav(); ?>

	<ul id="off-canvas-navigation" data-magellan>
        <li>
            <a href="#why-us">Why Us</a>
        </li>

        <li>
            <a href="#what-we-do">What we do</a>
        </li>

        <li>
            <a href="#our-team">Team</a>
        </li>

        <li>
            <a href="#brands">Brands</a>
        </li>

        <li>
            <a href="#point-of-interest">Blog</a>
        </li>

        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
