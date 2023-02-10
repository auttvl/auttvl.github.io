<?php
/*
Element Description: Heading
*/

 

// Element Class 

class vcHeading extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {

        add_action( 'init', array( $this, 'vc_Heading_mapping' ) );
        add_shortcode( 'vc_Heading', array( $this, 'vc_Heading_html' ) );
    }

     

    // Element Mapping

    public function vc_Heading_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Heading', 'Auttvl'),
                'class' => '',
                'base' => 'vc_Heading',
                'description' => __('Display Section Heading', 'Auttvl'), 
                'category' => __('Auttvl', 'js_composer'),   
                'icon' => get_template_directory_uri().'/assets/img/favicon.png',           
                'params' => array(   
				
                    array(
                        'type' => 'textfield',
                        'holder' => '',
                        'class' => '',
                        'heading' => __( 'Heading', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        
                    ), 					
				
                    array(
                        'type' => 'textfield',
                        'holder' => '',
                        'class' => '',
                        'heading' => __( 'Caption', 'Auttvl' ),
                        'param_name' => 'caption',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        
                    ), 					
					
				
                    array(
                        'type' => 'dropdown',
                        'holder' => '',
                        'class' => '',
                        'heading' => __( 'Text Postion', 'Auttvl' ),
                        'param_name' => 'textposition',
                        'value' => array(
                            __( 'Left',  "Auttvl"  ) => 'text-left',
                            __( 'Center',  "Auttvl"  ) => 'text-center',
                            __( 'Right',  "Auttvl"  ) => 'text-right',
                          ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        
                    ), 					
					
					
                 ),
            )
        );       
    }

    // Element HTML
    public function vc_Heading_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'title'   => '',                    
                    'caption'   => '',                    
                    'textposition'   => '',                    
                ), 
                $atts
            )
        );
       
        $output  = '<div class="section-title '.$textposition.'">
 						<h6>'.$caption.'</h6>
 						<h2>'.$title.'</h2>
 					</div>';      

        return $output;
    }
} // End Element Class

// Element Class Init
new vcHeading();    
?>