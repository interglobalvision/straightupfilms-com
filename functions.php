<?php
function my_scripts_method() {

  $templateuri = get_template_directory_uri() . '/js/';
  $jslib = $templateuri . 'library.js';
  wp_enqueue_script( 'jslib', $jslib,'','',true);
  $myscripts = $templateuri . 'main.min.js';
  wp_enqueue_script( 'myscripts', $myscripts,'','',true);

  // enqueue stylesheet here. file does not exist until stylus file is processed
  wp_enqueue_style( 'site', get_stylesheet_directory_uri() . '/css/site.min.css' );

}
add_action('wp_enqueue_scripts', 'my_scripts_method');

if ( function_exists( 'add_theme_support' ) ) {
  	add_theme_support( 'post-thumbnails' );
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'opengraph', 300, 300, true );
	add_image_size( 'person', 500, 500, true );
	add_image_size( 'team-single', 1600, 800, false );
	add_image_size( 'film-thumb', 700, 400, true );

	add_image_size( 'news', 400, 9999, false );
}

get_template_part( 'lib/post-types' );
get_template_part( 'lib/meta-boxes' );
add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
function cmb_initialize_cmb_meta_boxes() {
	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'lib/metabox/init.php';
}

# excluse cool shit from all but cool shit archive
add_action('pre_get_posts', 'suf_remove_coolshit' );

function suf_remove_coolshit( $wp_query ) {
	if( is_home() || ( is_archive() && !is_category() )) {
		set_query_var('cat', '-16');
	}
}

# Set ratio metadata for vimeos
add_action( 'save_post', 'suf_vimeo_dimentions_meta' );
function suf_vimeo_dimentions_meta( $post_id ) {

	if ( !wp_is_post_revision( $post_id ) ) {
		if (!empty($_POST)) {
			if ( 'film' == $_POST['post_type'] ) {

				$vimeo_id = get_post_meta($post_id, '_cmb_trailer');

				if (!empty($vimeo_id[0])) {

					// create curl resource
					$ch = curl_init();

					// set url
					curl_setopt($ch, CURLOPT_URL, 'http://vimeo.com/api/v2/video/' . $vimeo_id[0] . '.json');

					//return the transfer as a string
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

					// $output contains the output string
					$vimeo_api = json_decode(@curl_exec($ch));

					// close curl resource to free up system resources
					curl_close($ch);

					if ($vimeo_api) {

						$ratio = intval($vimeo_api[0]->height)/intval($vimeo_api[0]->width);

						remove_action('save_post', 'suf_vimeo_dimentions_meta');
						update_post_meta($post_id, 'suf_vimeo_ratio', $ratio );
						add_action('save_post', 'suf_vimeo_dimentions_meta');

					}
				}
			}
		}
	}
}

/* disable that freaking admin bar */
add_filter('show_admin_bar', '__return_false');
/* turn off version in meta */
function no_generator() { return ''; }
add_filter( 'the_generator', 'no_generator' );
?>