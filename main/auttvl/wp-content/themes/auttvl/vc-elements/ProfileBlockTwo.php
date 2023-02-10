<?php
/*
Element Description: Profile Block Two
*/

 

// Element Class 

class vcProfileBlockTwo extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {

        add_action( 'init', array( $this, 'vc_ProfileBlockTwo_mapping' ) );
        add_shortcode( 'vc_ProfileBlockTwo', array( $this, 'vc_ProfileBlockTwo_html' ) );
    }

     

    // Element Mapping

    public function vc_ProfileBlockTwo_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Profile Block Two', 'Auttvl'),
                'class' => '',
                'base' => 'vc_ProfileBlockTwo',
                'description' => __('Display Image With Title', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',           
                'params' => array(   
					array(
						"type" => "attach_image",
						"heading" => __("Image", "Auttvl"),
						"holder" => "img",
						"class" => "staff-pic",
						"param_name" => "image_thumb",
						"description" => __("", "Auttvl"),
						'admin_label' => false,
                        'group' => 'Auttvl',
					),	
					
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'staff-name',
                        'heading' => __( 'Staff Name', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ), 
					
					array(

                        'type' => 'textarea',
                        'holder' => 'p',
                        'class' => 'staff-design',
                        'heading' => __( 'Description', 'Auttvl' ),
                        'param_name' => 'description',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ),  
					array(
					  "type" => "vc_link",
					  "class" => "",
					  "heading" => __( "Page Link", "Auttvl" ),
					  "param_name" => "url",
					  "value" => '', 
					  "description" => __( "", "Auttvl" ),
					  "admin_label" => false,
					  "group" => "Auttvl",
					),   
					
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_ProfileBlockTwo_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'image_thumb' => 'image_thumb',
                    'title'   => '',
                    'description' => '',
					'url' => '',
                ), 
                $atts
            )
        );

        

        // Link data
		$link_s = vc_build_link( $url );	

        // Image data
		$img1 = wp_get_attachment_image_src($a["image_thumb"], "large");		
		$image_src1 = $img1['0'];


		
		
        // Fill $html var with data


        $output  = '<div class="single-team-member" style="margin-top:0;">
                      <div class="team-member-bg" style="background-image:url('.$image_src1.')">
                        <div class="team-content">
                          <div class="team-title"><a href="#">'.$title.'</a></div>
                          <div class="team-subtitle">
                            <p>'.$description.'</p>     
                            <a href="'.esc_url($link_s['url']).'" class="viewmore" target="_blank">View More</a>
                          </div>                          
                        </div>    
                      </div>
                    </div>';      

        return $output;
    }
} // End Element Class

// Element Class Init
new vcProfileBlockTwo();    
?>