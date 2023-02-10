<?php
/*
Element Description: Profile Block
*/

 

// Element Class 

class vcProfileBlock extends WPBakeryShortCode {

     

    // Element Init

    function __construct() {

        add_action( 'init', array( $this, 'vc_ProfileBlock_mapping' ) );
        add_shortcode( 'vc_ProfileBlock', array( $this, 'vc_ProfileBlock_html' ) );
    }

     

    // Element Mapping

    public function vc_ProfileBlock_mapping() {
        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }
        // Map the block with vc_map()
        vc_map( 
            array(
                'name' => __('Profile Block', 'Auttvl'),
                'class' => '',
                'base' => 'vc_ProfileBlock',
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
                        'heading' => __( 'Staff Name', 'Auttvl' ),
                        'param_name' => 'title',
                        'value' => __( '', 'Auttvl' ),
                        'description' => __( '', 'Auttvl' ),
                        'admin_label' => false,
                        'group' => 'Auttvl',
                    ), 
					
					array(

                        'type' => 'textfield',
                        'holder' => 'p',
                        'class' => 'staff-design',
                        'heading' => __( 'Designation', 'Auttvl' ),
                        'param_name' => 'designation',
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
                    array(
					  "type" => "file_picker",
					  "class" => "",
					  "heading" => __( "File Upload", "Auttvl" ),
					  "param_name" => "file_picker",
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
    public function vc_ProfileBlock_html( $atts ) {
        // Params extraction
        extract(
           $a = shortcode_atts(
                array(
                    'image_thumb' => 'image_thumb',
                    'title'   => '',
                    'designation' => '',
					'url' => '',
					'file_picker' => '',
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


        $output  .= '<div class="single-team-member" style="margin-top:0;">'; 
        $output  .= '<div class="team-member-bg" style="background-image:url('.$image_src1.')">'; 
        $output  .= '<div class="team-content">'; 
        $output  .= '<div class="team-title"><a href="#">'.$title.'</a></div>'; 
        $output  .= '<div class="team-subtitle">'; 
        $output  .= '<p>'.$designation.'</p>';    
        
        if($link_s['url']) {
            $output  .= '<a href="'.esc_url($link_s['url']).'" class="viewmore" target="_blank">View More</a>'; 
        } elseif($file_picker) {
            $file = wp_get_attachment_url($file_picker);
            $output  .= '<a href="'.esc_url($file).'" class="viewmore" target="_blank">View Profile</a>'; 
        }
        $output  .= '</div>';                           
        $output  .= '</div>';     
        $output  .= '</div>'; 
        $output  .= '</div>';      
        
        return $output;
    }
} // End Element Class

// Element Class Init
new vcProfileBlock();    
?>