<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'header',
        'title'       => __( 'Header', 'theme-text-domain' )
      ),
      array(
        'id'          => 'content',
        'title'       => __( 'Content', 'theme-text-domain' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer', 'theme-text-domain' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'header_text',
        'label'       => __( 'Header Text', 'theme-text-domain' ),
        'desc'        => 'Header Text Here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'change_logo',
        'label'       => __( 'Logo Upload', 'theme-text-domain' ),
        'desc'        => 'Upload your logo',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'white_text_title',
        'label'       => __( 'White Text Title', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'white_text_left',
        'label'       => __( 'White Text Left', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'white_text_right',
        'label'       => __( 'White Text Right', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
            array(
        'id'          => 'green_box',
        'label'       => __( 'Green Box (Max 3)', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'green_box_image',
            'label'       => __( 'Image', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'upload',
            'section'     => 'content',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'green_box_link',
            'label'       => __( 'Link', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'content',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'green_box_desc',
            'label'       => __( 'Description', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea_simple',
            'section'     => 'content',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
        )
      ),
      array(
        'id'          => 'new_post_title',
        'label'       => __( 'New Post Title', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_middle_title',
        'label'       => __( 'Footer Middle Title', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_middle',
        'label'       => __( 'Footer Middle', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'footer_right_title',
        'label'       => __( 'Footer Right Title', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_right_info',
        'label'       => __( 'Footer Right Info', 'theme-text-domain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'footer_right_icon',
            'label'       => __( 'Font Awesome Icon', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'footer',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'footer_right_content',
            'label'       => __( 'Content', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'section'     => 'footer',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
        )
      ),         
        array(
        'id'          => 'copyright_text',
        'label'       => __( 'Copyright Text', 'theme-text-domain' ),
        'desc'        => 'Copyright Text Here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}