<?php

// Add Brands custom post type
function agency3_brands_init() {
    $args = array(
      'label' => 'Brands',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'brands'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => array(
            'title',
            'page-attributes',
            'thumbnail')
        );
    register_post_type( 'brands', $args );
}
add_action( 'init', 'agency3_brands_init' );


// Add Team Member role
add_role(
	'team_member',
	__( 'Team Member' ),
	array(
		'delete_posts' => true,
		'delete_published_posts' => true,
		'edit_posts' => true,
		'edit_published_posts' => true,
		'publish_posts' => true,
		'read' => true,
		'upload_files' => true,
	)
);

// Remove profile picture field
add_filter( 'option_show_avatars', '__return_false' );

// Add TinyMCE to Biographical Info
function biographical_info_tinymce() {
    if ( basename($_SERVER['PHP_SELF']) == 'profile.php' || basename($_SERVER['PHP_SELF']) == 'user-edit.php' && function_exists('wp_tiny_mce') ) {
        echo "<script>jQuery(document).ready(function($){ $('#description').remove();});</script>";
        $settings = array(
            'tinymce' => array(
                'toolbar1' => 'bold,italic,bullist,numlist,link,unlink',
                'toolbar2' => '',
                'toolbar3' => '',
                'toolbar4' => '',
            ),
            'wpautop' => true,
            'media_buttons' => false,
            'quicktags' => false,
        );
        $description = get_user_meta( $user->ID, 'description', true);
        wp_editor( $description, 'description', $settings );
    }
}
add_action('admin_head', 'biographical_info_tinymce');
remove_filter('pre_user_description', 'wp_filter_kses');
add_filter( 'pre_user_description', 'wp_filter_post_kses' );