<?php
/**
 * Template part for displaying a single post
 */
?>

<section id="post-hero-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
     <div class="container">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell auto">
                    <h1><?php the_title(); ?></h1>

                    <?php get_template_part( 'parts/content', 'byline' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="post-content">
   <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell small-12 large-10">
                <?php the_content(); ?>
            </div>

            <div class="cell small-12 large-10">
                <hr>
            </div>
        </div>
    </div>
</section>

<section id="related-posts">
   <div class="grid-container">
   		<div class="grid-x grid-padding-x align-center">
            <div class="cell small-12 large-10">
		        <div class="grid-x grid-margin-x">
                    <div class="cell large-12">
                        <h3>Related Posts</h3>

                        <div class="grid-x grid-margin-x medium-up-3">
                            <?php joints_related_posts(); ?>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>