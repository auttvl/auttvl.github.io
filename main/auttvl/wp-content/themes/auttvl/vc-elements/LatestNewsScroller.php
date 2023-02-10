<?php
/*
Element Description: Latest News Marquee
*/

 

// Element Class 

class vcLatestNewsMarquee extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {
        add_action( 'init', array( $this, 'vc_latestnewsmarquee_mapping' ) );
        add_shortcode( 'vc_latestnewsmarquee', array( $this, 'vc_latestnewsmarquee_html' ) );

    }

     

    // Element Mapping

    public function vc_latestnewsmarquee_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Latest News Marquee', 'Auttvl'),
                'class' => '',
                'base' => 'vc_latestnewsmarquee',
                'description' => __('Display Latest News Marquee', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',            
                'params' => array(   
                    array(
                        'type' => 'textfield',
                        'holder' => 'h5',
                        'class' => 'text-center',
                        'heading' => __( 'Heading', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ),  
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_latestnewsmarquee_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'title'   => '',                    
                ), 
                $atts
            )
        );
        
        $sublinks_title = $atts['title'];
        
       
/*$the_date_today = date('r');
$recent_posts = wp_get_recent_posts(array(    
        'numberposts' => 4, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
));*/

$output = "<div class='about-content-wrapper wow fadeInUp' data-wow-delay='.4s'>";

$output .= '<div class="section-title"><h3>'.$sublinks_title.'</h3><hr/></div>';



$output .= '<marquee behavior="scroll" direction="up" height="340px"  scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();" style="margin-top: 20px;">';


$args = array(
'post_type' => 'post', 
//'cat' => 5,
//'tag' => 'tagname',
//'tag_id' => 5, 
'posts_per_page' => -1 
);

// Set today's date
$the_date_today = date('r');
$the_query = new WP_Query( $args );


if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
        
        $each_post_date = get_the_time('r');
        $difference_in_days = round( ( strtotime( $the_date_today ) - strtotime( $each_post_date) ) / ( 24 * 60 * 60 ), 0 );
        

        $permanlink = get_the_permalink($post->ID);
        $thetitle = get_the_title($post->ID);

        $output .= '<div class="offset-top-30 text-justify"><p style="color: black;font-family: Roboto;"><a href="'. $permanlink .'">';
         if ( !$difference_in_days >= 5 ) {
             $output .='<img src="'.get_template_directory_uri().'/assets/img/new-gif.gif" ><strong>'. $thetitle .'</strong>';
         } else {
             $output .='<strong>'. $thetitle .'</strong>';
         }
        $output .='</a></p></div><hr>';

      endwhile;

endif;
wp_reset_postdata();

$output .= '</ul>';

$output .= '</marquee>';




  return $output;

    }
} // End Element Class

// Element Class Init
new vcLatestNewsMarquee();    
?>