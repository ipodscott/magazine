<?php function add_scipts() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', '', true, '3.1.x');
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'fontawesomejs', '//use.fontawesome.com/0a1b8c9dce.js', array('jquery'), '3.3.4', true );
		wp_enqueue_script( 'audioplayer', get_template_directory_uri() . '/js/audioplayer.min.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'actionsjs', get_template_directory_uri() . '/js/actions.js', array('jquery'), '1.0', true );
	}
}
add_action('init', 'add_scipts');

function prefix_add_footer_styles() {
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css',true,'1.1','all');
    wp_enqueue_style( 'audioplayer', '//dieselpunkindustries.com/libs/audioplayer/css/audioplayer.css',true,'1.1','all');
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css',true,'1.1','all');
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Montserrat:400,700|Teko:300,400,500,600,700',true,'1.1','all');
};
add_action( 'get_footer', 'prefix_add_footer_styles' );


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
?>