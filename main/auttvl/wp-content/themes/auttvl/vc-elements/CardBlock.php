<?php
/*
Element Description: Card Block
*/

 

// Element Class 

class vcCardBlock extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {

        add_action( 'init', array( $this, 'vc_CardBlock_mapping' ) );
        add_shortcode( 'vc_CardBlock', array( $this, 'vc_CardBlock_html' ) );
    }

     

    // Element Mapping

    public function vc_CardBlock_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Card Block', 'Auttvl'),
                'class' => '',
                'base' => 'vc_CardBlock',
                'description' => __('Display Icon With Title', 'Auttvl'), 
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
                        'heading' => __( 'Heading', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ), 
					/*array(

                        'type' => 'textarea',
                        'holder' => 'p',
                        'class' => 'staff-design',
                        'heading' => __( 'Description', 'Auttvl' ),
                        'param_name' => 'description',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ),*/  
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
    public function vc_CardBlock_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'image_thumb' => 'image_thumb',
                    'title'   => '',
                    //'description' => '',
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


		
		
		//$link_s['url']
        // Fill $html var with data
		vc_icon_element_fonts_enqueue( $linecons_icons );


        $output  = '<div class="single-service wow fadeInLeft" data-wow-delay=".2s">
 						<div class="service-bg bg-cover" style="background-image:url('.$image_src1.')"></div>
 						<div class="service-content">
 							<h3><a href="'.esc_url($link_s['url']).'">'.$title.'</a></h3>
 							<a href="'.esc_url($link_s['url']).'" class="read-more">Read More</a>
 						</div>
 					</div>';      

        return $output;
    }
} // End Element Class

// Element Class Init
new vcCardBlock();    
?>