<?php

function sayed_customizar_register($wp_customize){

    //Header Area Function
    $wp_customize->add_section('sayed_header_area', array(
        'title' =>__('Header Area', 'abusayed'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('sayed_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'sayed_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to update your header area, you can do it here.',
        'setting' => 'sayed_logo',
        'section' => 'sayed_header_area',
    ) ));

    //Menu Position Option
    $wp_customize->add_section('sayed_menu_option', array(
        'title' => __('Menu Position Option', 'abusayed'),
        'description' => 'If you interested to change your menu position you can do it.'
      ));
    
      $wp_customize->add_setting('sayed_menu_position', array(
        'default' => 'right_menu',
      ));
    
      $wp_customize-> add_control('sayed_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'sayed_menu_position',
        'section' => 'sayed_menu_option',
        'type' => 'radio',
        'choices' => array(
          'left_menu' => 'Left Menu',
          'right_menu' => 'Right Menu',
          'center_menu' => 'Center Menu',
        ),
    ));

    //Footer Option
    $wp_customize->add_section('sayed_footer_option', array(
        'title' => __('Footer Option', 'abusayed'),
        'description' => 'If you interested to update your Footer text.'
      ));
    
      $wp_customize->add_setting('sayed_footer_section', array(
        'default' => '&copy; Copyright-2022 | Abusayed BD',
      ));
    
      $wp_customize-> add_control('sayed_footer_section', array(
        'label' => 'Copyright Text',
        'description' => 'If need you can update your copyright text',
        'setting' => 'sayed_footer_section',
        'section' => 'sayed_footer_option',
       
    ));

}

add_action('customize_register', 'sayed_customizar_register');