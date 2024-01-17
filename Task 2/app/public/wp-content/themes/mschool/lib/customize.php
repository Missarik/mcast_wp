<?php 

function custom_customize_register($wp_customize){
    $wp_customize->add_section('custom_footer_options', array(
        'title'=> 'Footer Options',
        'description'=> 'You can change footer here'
    ));

    $wp_customize->add_setting('custom_footer_bg', array(
        'default'=>'dark',
        'sanitize_callback'=>'sanitize_text_field'
    ));

    $wp_customize->add_control('custom_footer_bg', array(
        'type'=>'select',
        'label'=>'Background Color',
        'choices'=> array(
            'light'=>'Light',
            'dark'=>'Dark'
        ),
        'section'=> 'custom_footer_options'
    ));

    $wp_customize->add_setting('custom_theme_footer_bg', array(
        'default' => '#000000',
    ));

    $wp_customize->add_setting('custom_theme_footer_text', array(
        'default' => '#000000',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'custom_theme_footer_bg', array(
            'label'=>'Choose Background Color',
            'section'=>'custom_footer_options',
            'settings'=>'custom_theme_footer_bg'
        ))
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'custom_theme_footer_text', array(
            'label'=>'Choose Text Colour',
            'section'=>'custom_footer_options',
            'settings'=>'custom_theme_footer_text'
        ))
    );

    
    $wp_customize->add_setting('custom_footer_widget_count',array(
        'default'=>'2',
        'sanitize_callback'=>'sanitize_text_field',
    ));

    $wp_customize->add_control('custom_footer_widget_count',array(
        'type'=>'select',
        'label'=>'Footer Widget Count',
        'choices'=>array(
            '1'=>'1 Widget',
            '2'=>'2 Widgets',
            '3'=>'3 Widgets',
            '4'=>'4 Widgets'
        ),
        'section'=>'custom_footer_options'
    ));




    $wp_customize->add_section('custom_carousel_images', array(
        'title' => 'Carousel Settings',
        'description' => 'You can change the card options here'

    ));

    $wp_customize->add_setting(
        'custom_image_1',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'custom_image_1',
            array(
                'label' => 'Upload Image 1',
                'priority' => 20,
                'section' => 'custom_carousel_images',
                'button_labels' => array( // All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                )
            )
        )
    );

    $wp_customize->add_setting(
        'custom_image_2',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'custom_image_2',
            array(
                'label' => 'Upload Image 2',
                'priority' => 20,
                'section' => 'custom_carousel_images',
                'button_labels' => array( // All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                )
            )
        )
    );
    $wp_customize->add_setting(
        'custom_image_3',
        array(
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'custom_image_3',
            array(
                'label' => 'Upload Image 3',
                'priority' => 20,
                'section' => 'custom_carousel_images',
                'button_labels' => array( // All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                )
            )
        )
    );
    $wp_customize->add_section('custom_dark_mode', array(
        'title'=> 'Dark Mode',
        'description'=> 'You can switch between light mode and dark mode here'
    ));

    $wp_customize->add_setting('custom_dark_mode_setting', array(
        'default'=>'light',
        'sanitize_callback'=>'sanitize_text_field'
    ));

    $wp_customize->add_control('custom_dark_mode_setting', array(
        'type'=>'select',
        'label'=>'Dark Mode Setting',
        'choices'=> array(
            'light'=>'Light',
            'dark'=>'Dark'
        ),
        'section'=> 'custom_dark_mode'
    ));
}



add_action("customize_register","custom_customize_register");

?>