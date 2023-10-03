<?php
function avadanta_finance_sections_settings( $wp_customize ) {
    $wp_customize->remove_setting( 'avadanta_menubar_bg_color' );
     $wp_customize->remove_setting( 'avadanta_menu_item_color' );
      $wp_customize->remove_setting( 'avadanta_menu_item_hover_color' );
       $wp_customize->remove_setting( 'avadanta_submenu_item_hover_color' );
       $wp_customize->remove_section( 'avadanta_site_settings' );
       $wp_customize->remove_section( 'avadanta_navigation_settings' );
        $wp_customize->remove_control('blogdescription');



     $wp_customize->add_section('avadanta_top_header_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Top Header Options', 'avadanta-finance'),
            'description' => '',
            'panel'       => 'section_settings',
            'priority'    => 1,
        )
    );


     $wp_customize->add_setting('avadanta_top_header_enable',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_top_header_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Header Top Section?', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'description' => esc_html__('Check this box to Enable Top Header section.', 'avadanta-finance'),
        )
    );


    $wp_customize->add_setting('avadanta_header_social_url',   
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_social_url',
        array(
            'label'       => esc_html__('Facebook url', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'url',
        )
    );
       $wp_customize->add_setting('avadanta_header_insta_social_url',   
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_insta_social_url',
        array(
            'label'       => esc_html__('Instagram url', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'url',
        )
    );
        $wp_customize->add_setting('avadanta_header_twitter_social_url',   
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_twitter_social_url',
        array(
            'label'       => esc_html__('Twitter url', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'url',
        )
    );

        $wp_customize->add_setting('avadanta_header_youtube_social_url',   
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_youtube_social_url',
        array(
            'label'       => esc_html__('Youtube url', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'url',
        )
    );

    $wp_customize->add_setting('avadanta_header_phone',   
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_phone',
        array(
            'label'       => esc_html__('Phone No.', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'text',
        )
    );  



        $wp_customize->add_setting('avadanta_header_email',   
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_header_email',
        array(
            'label'       => esc_html__('Email', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'text',
        )
    );  

        $wp_customize->add_setting('avadanta_header_address',   
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           =>'',
            ));

    $wp_customize->add_control('avadanta_header_address',
        array(
            'label'       => esc_html__('Address', 'avadanta-finance'),
            'section'     => 'avadanta_top_header_settings',
            'type'        => 'text',
        )
    ); 

        // Excerpt Length
    $wp_customize->add_setting ( 'avadanta_excerpt_length', array(
        'default'           => __( '15', 'avadanta-finance' ),
        'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control ( 'avadanta_excerpt_length', array(
        'label'    => __( 'Post Excerpt Length', 'avadanta-finance' ),
        'description' => __( 'Change Excerpt Length From Here', 'avadanta-finance' ),
        'section'  => 'avadanta_post_settings',
        'priority' => 2,
        'type'     => 'number',
    ) ); 

            $wp_customize->add_setting('avadanta_theme_color_scheme',array(
        'default' => esc_html__('#5538f4','avadanta-finance'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','avadanta-finance'),           
            'description' => esc_html__('Change Theme Color','avadanta-finance'),
            'section' => 'colors',
            'settings' => 'avadanta_theme_color_scheme'
        ))
    );

     $wp_customize->add_section('avadanta_notfound_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('404 Page Setting', 'avadanta-finance'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


        $wp_customize->add_setting('avadanta_notfound_color_scheme',array(
        'default' => esc_html__('#5538f4','avadanta-finance'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_notfound_color_scheme',array(
            'label' => esc_html__('Background Color','avadanta-finance'),           
            'description' => esc_html__('Change Footer Background Color','avadanta-finance'),
            'section' => 'avadanta_notfound_settings',
            'settings' => 'avadanta_notfound_color_scheme'
        ))
    );  

}
add_action( 'customize_register', 'avadanta_finance_sections_settings', 30);