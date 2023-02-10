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
					),*/	
					
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
                    ), */
                    
                    array(
                      'type' => 'param_group',
                      'value' => '',
                      'param_name' => 'courses_off',
                        'group' => 'Auttvl',
                      // Note params is mapped inside param-group:
                      'params' => array(
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
                            'type' => 'file_picker',
                            'holder' => 'p',
                            'class' => 'staff-design',
                            'heading' => __( 'Syllabi', 'Auttvl' ),
                            'param_name' => 'syllabi',
                            'value' => __( '', 'Auttvl' ),
                            'description' => __( '', 'Auttvl' ),
                            'admin_label' => false,
                            'group' => 'Auttvl',
                         ),
                         array(
                            'type' => 'file_picker',
                            'holder' => 'p',
                            'class' => 'staff-design',
                            'heading' => __( 'Regulation', 'Auttvl' ),
                            'param_name' => 'regulation',
                            'value' => __( '', 'Auttvl' ),
                            'description' => __( '', 'Auttvl' ),
                            'admin_label' => false,
                            'group' => 'Auttvl',
                         ),
                         array(
                            'type' => 'file_picker',
                            'holder' => 'p',
                            'class' => 'staff-design',
                            'heading' => __( 'Full Time', 'Auttvl' ),
                            'param_name' => 'full_time',
                            'value' => __( '', 'Auttvl' ),
                            'description' => __( '', 'Auttvl' ),
                            'admin_label' => false,
                            'group' => 'Auttvl',
                         ),
                      )
                    )
					
					
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
                    'courses_off' =>'', 
                ), 
                $atts
            )
        );

      ob_start();         

      $heading = $atts['title'];  
      $items = vc_param_group_parse_atts($atts['courses_off']);
        
        ?>
		<div class="single-feature-item">
            <div class="num"><i class="las la-university"></i></div>
            <div class="feature-content">
                <?php  echo (!empty($title))? '<h5>'.$title.'</h5>': ''; ?>
                <?php if($items) { ?>
                    <?php  foreach ($items as  $item) { ?>
                        <ul class="mt-1 course_off">
                            <li>
                            <div><?php echo $item['description']; ?></div>                            
                            <div>
                            <?php if(wp_get_attachment_url($item['syllabi'])) { ?>
                                <a href="<?php echo wp_get_attachment_url($item['syllabi']); ?>">Syllabi</a> 
                            <?php } ?>
                            <?php if(wp_get_attachment_url($item['regulation'])) { ?>
                            <a href="<?php echo wp_get_attachment_url($item['regulation']); ?>">Regulation</a>
                            <?php } ?>
                            <?php if(wp_get_attachment_url($item['full_time'])) { ?>
                            <a href="<?php echo wp_get_attachment_url($item['full_time']); ?>">Full Time</a>
                            <?php } ?>
                            </div>    
                           </li>     
                        </ul>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>    
          <?php

        $result = ob_get_clean();
      return $result;
?>  
		
        <!--// Fill $html var with data
        

        $output  = '<div class="single-feature-item">'.
 		$output  = '<div class="num"><i class="las la-university"></i></div>'.
 		$output  = '<div class="feature-content">'.
 		$output  = '<h5>'.$title.'</h5>'.
        
                        foreach ($items as  $item) {

                            $output  = '<p class="mt-1">'.$item['description'].'</p>';

                        } 
                                
                            //}
                            
 		 $output  = '</div></div>';      

        return $output;-->
    <?php }
} // End Element Class

// Element Class Init
new vcSingleFeatureItem();    


function file_picker_settings_field( $settings, $value ) {
    $select_file_class = '';
    $remove_file_class = ' hidden';
    $attachment_url = wp_get_attachment_url( $value );

    if ( $attachment_url ) {
        $select_file_class = ' hidden';
        $remove_file_class = '';
    }
    ob_start();
    ?>
     <div class="file_picker_block">
                <div class="<?php esc_attr_e( $settings['type'] )?>_display"><?=$attachment_url?></div>
                <input type="hidden" name="<?php esc_attr_e( $settings['param_name'] ); ?>"
                       class="wpb_vc_param_value wpb-textinput <?php esc_attr_e( $settings['param_name'],' ' ); ?>
        <?php esc_attr_e( $settings['type'] )?>_field" value="<?php esc_attr_e( $value ); ?>" />
                <button class="button file-picker-button">Select File</button>
                <button class="button file-remover-button">Remove File</button>
      </div>

    <script>
        !function($) {
            var _custom_media = true,
                _orig_send_attachment = wp.media.editor.send.attachment

          //  $(document).on('click','#vc_ui-panel-edit-element .file-picker-button'

            $('#vc_ui-panel-edit-element .file-picker-button').on('click', function( e ) {
                var send_attachment_bkp = wp.media.editor.send.attachment,
                    file_picker_button = $( this ),
                    file_remover_button = $( this ).parent().find( '.file-remover-button' ),
                    input = $( this ).parent().find( '.file_picker_field' ),
                    display = $( this ).parent().find( '.file_picker_display' );

                _custom_media = true;
                wp.media.editor.send.attachment = function( props, attachment ) {
                    if ( _custom_media ) {
                        display.html( attachment.url );
                        input.val( attachment.id );
                        file_picker_button.addClass( 'hidden' );
                        file_remover_button.removeClass( 'hidden' );
                    } else {
                        return _orig_send_attachment.apply( this, [props, attachment] );
                    };
                }

                wp.media.editor.open( file_picker_button );
                return false;
            });

            $('#vc_ui-panel-edit-element .file-remover-button').on('click', function( e ) {
        
                var file_picker_button = $( this ).parent().find( '.file-picker-button' ),
                    file_remover_button = $( this ),
                    input = $( this ).parent().find( '.file_picker_field' ),
                    display = $( this ).parent().find( '.file_picker_display' );

                display.html( '' );
                input.val( '' );
                file_picker_button.removeClass( 'hidden' );
                file_remover_button.addClass( 'hidden' );
            });

      
            $( '.add_media' ).on( 'click', function() {
                _custom_media = false;
            } );

        }(window.jQuery);
    </script>
<?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
vc_add_shortcode_param( 'file_picker', 'file_picker_settings_field');
?>