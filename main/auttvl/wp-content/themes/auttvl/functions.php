<?php
if ( !function_exists( 'auttvl_setup' ) ) {
    function auttvl_setup() {
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'auttvl_setup' );
}

// hide update notifications
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes


// Disable Gutenberg Editor //
add_filter( 'use_block_editor_for_post', '__return_false' );


require_once( 'inc/wp-enqueue.php' );
//require_once( 'inc/acf_fields.php' );
require_once( 'wp_bootstrap_navwalker.php' );




register_nav_menu( 'primary', __( 'Primary Menu', 'heritage' ) );
register_nav_menu( 'second', __( 'Secondary Menu', 'heritage' ) );
register_nav_menu( 'footer', __( 'Footer', 'heritage' ) );


add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array( 350, 240 ) ); // Other resolutions
add_image_size( 'custom_thumbnail', 348, 232, true );


add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
// This will remove the default image sizes and the medium_large size. 
function prefix_remove_default_images( $sizes ) {
 unset( $sizes['small']); // 150px
 unset( $sizes['thumbnail']); // 150px
 unset( $sizes['medium']); // 300px
 unset( $sizes['large']); // 1024px
 unset( $sizes['medium_large']); // 768px
 return $sizes;
}




if(current_user_can('administrator')) {
if ( function_exists( 'acf_add_options_page' ) ) {
  acf_add_options_page( array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false

  ) );
}
}

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function easy_excerpt( $limit ) {
  $excerpt = explode( ' ', get_the_excerpt(), $limit );
  if ( count( $excerpt ) >= $limit ) {
    array_pop( $excerpt );
    $excerpt = implode( " ", $excerpt );
  } else {
    $excerpt = implode( " ", $excerpt );
  }
  $excerpt = preg_replace( '`[[^]]*]`', '', $excerpt );
  return $excerpt;
}




function autt_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Footer 1', 'autt' ),
    'id' => 'footer',
    'before_widget' => '<div class="col-lg-6 col-md-6">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ) );
  /*register_sidebar( array(
    'name' => __( 'Footer 2', 'autt' ),
    'id' => 'footer-two',
    'before_widget' => '<div class="col-lg-3 col-md-6 com-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ) );*/
  register_sidebar( array(
    'name' => __( 'Footer 3', 'autt' ),
    'id' => 'footer-three',
    'before_widget' => '<div class="col-lg-3 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ) );
  /*register_sidebar( array(
    'name' => __( 'Footer 4', 'autt' ),
    'id' => 'footer-four',
    'before_widget' => '<div class="col-lg-2 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ) );*/
}

add_action( 'widgets_init', 'autt_widgets_init' );




//Breadcrumb
function the_breadcrumb() {
  global $post;
  echo '<ul>';
  if ( !is_home() ) {
    echo '<li class="breadcrumb-item"><a href="';
    echo get_option( 'home' );
    echo '">';
    echo $home_title = get_the_title( get_option( 'page_on_front' ) );
    echo '</a></li>';
    if ( is_category() || is_single() ) {
      /*echo '<li>';
            the_category();
			echo '</li>';*/
      if ( is_single() ) {
        echo '<li  class="breadcrumb-item active">';
        the_title();
        echo '</li>';
      }
    } elseif ( is_page() ) {
      if ( $post->post_parent ) {
        $anc = get_post_ancestors( $post->ID );
        $title = get_the_title();
        foreach ( $anc as $ancestor ) {
          //$output = '<li >'.get_the_title($ancestor).'</li>';
        }
        echo $output;
        echo '<li title="' . $title . '"   class="breadcrumb-item active">' . $title . '</li>';
      } else {
        echo '<li  class="breadcrumb-item active">' . get_the_title() . '</li>';
      }
    }
  } elseif ( is_tag() ) {
    single_tag_title();
  }
  elseif ( is_day() ) {
    echo "Archive for ";
    the_time( 'F jS, Y' );
    echo '';
  }
  elseif ( is_month() ) {
    echo "Archive for ";
    the_time( 'F, Y' );
    echo '';
  }
  elseif ( is_year() ) {
    echo "Archive for ";
    the_time( 'Y' );
    echo '';
  }
  elseif ( is_author() ) {
    echo "Author Archive";
    echo '';
  }
  elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {
    echo "Blog Archives";
    echo '';
  }
  elseif ( is_search() ) {
    echo "Search Results";
    echo '';
  }
  echo '</ul>';
}






// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
function vc_before_init_actions() {
  // Require new custom Element
  require_once( get_template_directory().'/vc-elements/Heading.php' ); 
  require_once( get_template_directory().'/vc-elements/LatestNewsScroller.php' ); 
  require_once( get_template_directory().'/vc-elements/Courses.php' ); 
  require_once( get_template_directory().'/vc-elements/Events.php' ); 
  require_once( get_template_directory().'/vc-elements/ProfileBlock.php' ); 
  require_once( get_template_directory().'/vc-elements/ProfileBlockTwo.php' ); 
  require_once( get_template_directory().'/vc-elements/SingleFeatureItem.php' ); 
  require_once( get_template_directory().'/vc-elements/CardBlock.php' ); 
}





add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    h4.wpb_element_title{
     height:40px;
     clear:both;
    }
  
    .staff-pic{
        display: inline-block;
        max-width: 100%;
        height:100px;
        object-fit:contain;
    }
    .staff-name,
    .staff-name p{
        margin:0;
    }
    .staff-design,
    .staff-design p{
        margin:0;
    }
  </style>';
}
