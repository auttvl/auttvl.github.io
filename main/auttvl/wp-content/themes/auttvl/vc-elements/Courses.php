<?php
/*
Element Description: Courses
*/

 

// Element Class 

class vcCoursesDisplay extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {
        add_action( 'init', array( $this, 'vc_coursesdisplay_mapping' ) );
        add_shortcode( 'vc_coursesdisplay', array( $this, 'vc_coursesdisplay_html' ) );

    }

     

    // Element Mapping

    public function vc_coursesdisplay_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Courses', 'Auttvl'),
                'class' => '',
                'base' => 'vc_coursesdisplay',
                'description' => __('Display Courses', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',            
                'params' => array(   
                    array(
                        //'type' => 'textfield',
                        'holder' => 'h5',
                        'class' => 'text-center',
                        'heading' => __( 'Courses Loop', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( 'Displaying Here Theme Settings Page -> Home Page Courses Selected Data Only.</br> <a href="'.admin_url('admin.php?page=theme-general-settings').'">Theme Settings Page</a>', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ),  
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_coursesdisplay_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'title'   => '',                    
                ), 
                $atts
            )
        );
        
        

$courses_posts = get_field('home_page_courses','options');
if( $courses_posts ): 
        
        $output .= '<div class="service-slider owl-carousel">';
            foreach( $courses_posts as $coursespost ): setup_postdata($coursespost);

            $courses_permanlink = get_the_permalink($coursespost->ID);
            $courses_title = get_the_title($coursespost->ID);
            $courses_img_url = get_the_post_thumbnail_url($coursespost->ID,'custom_thumbnail');

            if ( get_the_post_thumbnail( $coursespost->ID) ) {
               $courses_image = $courses_img_url;
            } else {
               $courses_image = ''.get_template_directory_uri().'/assets/img/noimg.jpg'; 
            }
        
        
        
            $output .='<div class="single-serv-item">
 							<div class="serv-icon">
 								<a href="'. $courses_permanlink .'">
                                <img src="'.$courses_image.'">
                                </a>
 							</div>
 							<div class="serv-content">
								<a href="'. $courses_permanlink .'" class="read-more">'. $courses_title .'</a> 								
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
new vcCoursesDisplay();    
?>