<?php

//установка необходимых плагинов
require_once get_stylesheet_directory() . '/lib/class-tgm-plugin-activation.php';
add_action('tgmpa_register','required_plugins');

//подключение необходимых плагинов из репозитория wordpress.org
function required_plugins() {

	$plugins = array(
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
		),
		array(
			'name' => 'Elementor',
			'slug' => 'elementor',
		),
		array(
			'name' => 'Smart Slider 3',
			'slug' => 'smart-slider-3',
		),
		array(
			'name' => 'Cyr to Lat reloaded ',
			'slug' => 'cyr-and-lat',
		),
	);
	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options', 
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                   
		'is_automatic' => false,                   
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}



// Маска ввода
// 
function maskedInput() {
	wp_enqueue_script('masked-input', get_stylesheet_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery'), '1.1', true);
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
	}
add_action( 'wp_enqueue_scripts', 'maskedInput' );


// Поля для телефонов в шапке
// 
add_action('customize_register', 'header_add_contact_fields');

function header_add_contact_fields($wp_customize) {
    
    $wp_customize->add_section('header', array(
        'title' => 'Контакты в шапке',
        'priority' => 1,
    ));

    //телефон 1 в хедере 
    $setting_name = 'header_phone_one';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
        'type' => 'text',
        'label' => 'Телефон в шапке',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-phone-one',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));
	//телефон 2 в хедере
    $setting_name = 'header_phone_two';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
        'type' => 'text',
        'label' => 'Телефон в шапке',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-phone-two',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));
	//e-mail в хедере
    $setting_name = 'header_email';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
        'type' => 'text',
        'label' => 'E-mail в шапке',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-email',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));	
	
	
	//соцсети
	//
	///vk
    $setting_name = 'header-vk';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
		'type' => 'text',
        'label' => 'VK',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-vk',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));	
	//youtube
	$setting_name = 'header-youtube';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
		'type' => 'text',
        'label' => 'Youtube',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-youtube',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));
	//instagram
	$setting_name = 'header-instagram';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
		'type' => 'text',
        'label' => 'Instagram',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-instagram',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));	
	//facebook
	$setting_name = 'header-facebook';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
		'type' => 'text',
        'label' => 'Facebook',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-facebook',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));	
	//ok
	$setting_name = 'header-odnoklassniki';
    $wp_customize->add_setting($setting_name, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'header',
		'type' => 'text',
        'label' => 'Odnoklassniki',
    ));
	
	$wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.header-odnoklassniki',
        'render_callback' => function() use ($setting_name) {
            return nl2br(get_theme_mod($setting_name));
        }
    ));	
}
