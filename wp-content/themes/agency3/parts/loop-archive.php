<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article class="cell">
	<div class="box">
		<div class="img">
			<?php the_post_thumbnail(); ?>
		</div>

		<h5><?php the_title(); ?></h5>

		<?php the_excerpt(); ?>

		<div class="text-center">
            <a class="button" href="<?php the_permalink() ?>">Read</a>
        </div>
	</div>
</article>