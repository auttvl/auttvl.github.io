<?php
/*
Element Description: Events
*/

 

// Element Class 

class vcEventsDisplay extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {
        add_action( 'init', array( $this, 'vc_eventsdisplay_mapping' ) );
        add_shortcode( 'vc_eventsdisplay', array( $this, 'vc_eventsdisplay_html' ) );

    }

     

    // Element Mapping

    public function vc_eventsdisplay_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Events', 'Auttvl'),
                'class' => '',
                'base' => 'vc_eventsdisplay',
                'description' => __('Display Events', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',            
                'params' => array(   
                    array(
                        //'type' => 'textfield',
                        'holder' => 'h5',
                        'class' => 'text-center',
                        'heading' => __( 'Events Loop', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( 'Displaying Here Theme Settings Page -> Home Page Events Selected Data Only.</br> <a href="'.admin_url('admin.php?page=theme-general-settings').'">Theme Settings Page</a>', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ),  
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_eventsdisplay_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'title'   => '',                    
                ), 
                $atts
            )
        );
        
        

$events_posts = get_field('home_page_events','options');
if( $events_posts ): 
        
        $output .= '<div class="row">';
            foreach( $events_posts as $eventspost ): setup_postdata($eventspost);

            $events_permanlink = get_the_permalink($eventspost->ID);
            $events_title = get_the_title($eventspost->ID);
            $events_author = get_the_author($eventspost->ID);
            $events_date = get_the_date('d M, Y', $eventspost->ID);
            $events_img_url = get_the_post_thumbnail_url($eventspost->ID,'custom_thumbnail');
        
            if ( get_the_post_thumbnail( $eventspost->ID) ) {
               $events_image = $events_img_url;
            } else {
               $events_image = ''.get_template_directory_uri().'/assets/img/noimg.jpg'; 
            }
        

            $output .='<div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-blog-item wow fadeInLeft" data-wow-delay=".4s">';
                            $output .='<div class="blog-bg"><a href="'. $events_permanlink .'">';
                            $output .='<img src="'.$events_image.'">';        
                            /*if ( has_post_thumbnail() ) {
                            $output .='<img src="'.$events_img_url.'" alt="">';
                            } else {
                            $output .='<img src="'.get_template_directory_uri().'/assets/img/noimg.jpg" alt="">';   
                            }*/
                            $output .='</a></div>
                            <div class="blog-content">
                                <p class="blog-meta" style="margin:0; padding:10px 0;"><i class="las la-user-circle"></i>'.$events_author.' | <i class="las la-calendar-check"></i>'.$events_date.'</p>
                                <h5><a href="'. $events_permanlink .'">'. $events_title .'</a>
                                </h5>                               
                            </div>
 					    </div>
                      </div>';       
            endforeach;
        $output .= '</div>';
wp_reset_postdata();
endif;





  return $output;

    }
} // End Element Class

// Element Class Init
new vcEventsDisplay();    
?>