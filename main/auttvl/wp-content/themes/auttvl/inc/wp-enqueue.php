<?php 
function autt_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'autt-style', get_stylesheet_uri() );

	// Load the stylesheet.
	wp_enqueue_style( 'autt-css-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-font-awesome-min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-line-awesome-min', get_template_directory_uri() . '/assets/css/line-awesome.min.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-animate', get_template_directory_uri() . '/assets/css/animate.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-barfiller', get_template_directory_uri() . '/assets/css/barfiller.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-styles', get_template_directory_uri() . '/assets/css/style.css', array( 'autt-style' ), '20160816' );	
	wp_enqueue_style( 'autt-css-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array( 'autt-style' ), '20160816' );	
	
	// Load the jquery.
	wp_enqueue_script( 'autt-js-jquery-1-12-4-min', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array( 'jquery' ), '1.0');	
	wp_enqueue_script( 'autt-js-popper-min', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0');	
	wp_enqueue_script( 'autt-js-bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-jquery-waypoints-min', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-jquery-counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-isotope-306-min', get_template_directory_uri() . '/assets/js/isotope-3.0.6-min.js', '','',true);	
	wp_enqueue_script( 'autt-js-magnific-popup-min', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', '','',true);	
	wp_enqueue_script( 'autt-js-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', '','',true);	
	wp_enqueue_script( 'autt-js-jquery-barfiller', get_template_directory_uri() . '/assets/js/jquery.barfiller.js', '','',true);	
	wp_enqueue_script( 'autt-js-main', get_template_directory_uri() . '/assets/js/main.js', '','',true);	    
	
    	
}
add_action( 'wp_enqueue_scripts', 'autt_scripts' );


/** Remove Default jquery 
function myphpinformation_scripts() {    
if( !is_admin()){
	 wp_deregister_script('jquery');
	 wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-1.11.3.min.js', false);
	 wp_enqueue_script('jquery');
}
}
add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );**/