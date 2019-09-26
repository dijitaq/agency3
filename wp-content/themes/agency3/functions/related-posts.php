<?php
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts() {
	global $post;
	$tag_arr = '';
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		//echo __( '<h4>Related Posts</h4>', 'jointswp' );
		//echo '<div class="cell">';
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<div class="cell text-center">
					<div class="box">
						<?php the_post_thumbnail('large'); ?>

						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</div>
				</div>
			<?php endforeach; }
			}
	wp_reset_postdata();
	//echo '</div>';
} /* end joints related posts function */