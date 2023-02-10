<?php
/*
Element Description: Single Feature Item Block
*/

 

// Element Class 

class vcSingleFeatureItem extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {

        add_action( 'init', array( $this, 'vc_SingleFeatureItem_mapping' ) );
        add_shortcode( 'vc_SingleFeatureItem', array( $this, 'vc_SingleFeatureItem_html' ) );
    }

     

    // Element Mapping

    public function vc_SingleFeatureItem_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Single Feature Item', 'Auttvl'),
                'class' => '',
                'base' => 'vc_SingleFeatureItem',
                'description' => __('Display Icon With Title', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',           
                'params' => array(   
					/*array(
						"type" => "attach_image",
						"heading" => __("Image", "Auttvl"),
						"holder" => "img",
						"class" => "staff-pic",
						"param_name" => "image_thumb",
						"description" => __("", "Auttvl"),
						'admin_label' => false,
                        'group' => 'Auttvl',
					),	*/
					
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'staff-name',
                        'heading' => __( 'Heading', 'Auttvl' ),
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
					
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_SingleFeatureItem_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    //'image_thumb' => 'image_thumb',
                    'title'   => '',
                    'description' => '',
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


        $output  = '<div class="single-feature-item">
 						<div class="num"><i class="las la-university"></i></div>
 						<div class="feature-content">
 							<h5>'.$title.'</h5>
 							<p class="mt-1">'.$description.'</p>
 						</div>
 					</div>';      

        return $output;
    }
} // End Element Class

// Element Class Init
new vcSingleFeatureItem();    
?>