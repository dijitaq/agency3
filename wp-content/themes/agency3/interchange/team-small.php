<?php
    require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
?>

<?php 
    $param = array(
        'limit' => 0,
        'orderby' => 'menu_order ASC',
    );

    $team_member_accordion = pods( 'team_member', $param );

    if ( $team_member_accordion->total() > 0 ) {
    	echo '<div class="accordion-container">';
    		echo '<ul id="team-accordion" class="accordion" data-accordion data-allow-all-closed="true">';

    			while ( $team_member_accordion->fetch() ) {
	    			echo '<li class="accordion-item" data-accordion-item>';
	    				echo '<a class="accordion-title">';
	    					echo '<div class="img">';
	    						$img = get_the_post_thumbnail_url( $team_member_accordion->display( 'ID' ), 'full' );
	    						echo '<img src="' . $img . '">';
				            echo '</div>';

				            echo '<span>' . $team_member_accordion->display( 'post_title' ) . '<br /><span>' . $team_member_accordion->display( 'position' ) . '</span></span>';
						echo '</a>';

						echo '<div class="accordion-content" data-tab-content>';
							echo $team_member_accordion->display( 'post_content' );
						echo '</div>';
					echo '</li>';
				}

			echo '</ul>';
		echo '</div>';

    } else {
        echo '<p>Unavailable</p>';
    }
?>

<script>
    jQuery('#our-team-content').on('replaced.zf.interchange', function(){
        new Foundation.Accordion(jQuery('#team-accordion'));
    });
</script>