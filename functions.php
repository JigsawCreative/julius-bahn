<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/* ----------------------- */
/* --- THEME FUNCTIONS --- */
/* ----------------------- */


/* --- CUSTOMISE WP_LOGIN LOGIN PAGE --- */

/* Changes the Wordpress logo to custom logo */
function custom_login_logo() {
	echo '<style type="text/css">
	 .login h1 a { background-image:url('.get_bloginfo('template_directory').'/img/julius-bahn-logo_login.gif) !important;
     background-size: 140px 46px !important;
     width: 140px !important;
     height: 46px !important;
     margin-top: 20px;
   }
	</style>';
}

add_action('login_head', 'custom_login_logo');

/* Changes the URL of the image link to blog homepage */
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


/* Changes the title attribute of image to name of blog */
function change_wp_login_title() {
	return get_option('blogname');
}
add_filter('login_headertext', 'change_wp_login_title');

/* --- END OF CUSTOMISE WP_LOGIN LOGIN PAGE --- */


/* --- Adding Theme Options to Wordpress Admin Bar --- */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'General Site Content',
		'menu_title'	=> 'General Site Content',
		'menu_slug' 	=> 'theme-general-content',
		'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-admin-appearance',
    'position' => 61,
    'redirect'		=> false
	));

}
/* --- End of Adding Theme Options to Wordpress Admin Bar --- */


/* --- GRAVITY FORMS --- */

// add label hidden filter for Forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// filter the Gravity Forms button type
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn btn-lg btn-green' id='gform_submit_button_{$form['id']}'>Send Request</button>";
}

/* --- End of GRAVITY FORMS --- */


/* --- SECURITY --- */

/* --- Remove Wordpress Version Information --- */
remove_action('wp_head', 'wp_generator');

/* --- Hides if username is correct in failed password attempt message --- */
add_filter('login_errors','login_error_message');
function login_error_message($error){
	//check if that's the error you are looking for

	//its the right error so you can overwrite it
	$error = sprintf(__("Oops sorry login failed, please try again."),get_bloginfo('url'));

	return $error;
}

/* --- End of SECURITY --- */
