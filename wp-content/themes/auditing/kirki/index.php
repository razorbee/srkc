<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = auditing_kirki_config();

add_action('customize_register', 'auditing_customize_register');
function auditing_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'auditing_enqueue_customizer_stylesheet' );
function auditing_enqueue_customizer_stylesheet() {
	wp_register_style( 'auditing-customizer-css', AUDITING_THEME_URI.'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'auditing-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'auditing_enqueue_customizer_script' );
function auditing_enqueue_customizer_script() {
	wp_register_script( 'auditing-customizer-js', AUDITING_THEME_URI.'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'auditing-customizer-js' );
}

# Theme Customizer Begins
AUDITING_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => esc_html__( 'Logo ?', 'auditing' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => auditing_defaults('use-custom-logo'),
			'description' => esc_html__('Switch to Site title or Logo','auditing'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'auditing' ),
				'off' => esc_attr__( 'Site Title', 'auditing' )
			)			
		) );

		# custom-logo
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => esc_html__( 'Logo', 'auditing' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => auditing_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => esc_html__( 'Dark Logo', 'auditing' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => auditing_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# site-loader
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'switch',
			'settings' => 'use-site-loader',
			'label'    => esc_html__( 'Use Site Loader?', 'auditing' ),
			'section'  => 'title_tagline',
			'priority' => 100,
			'default' => auditing_defaults( 'use-site-loader' )
		));

		# site-title-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'custom-title',
			'label'    => esc_html__( 'Site Title Color', 'auditing' ),
			'section'  => 'title_tagline',
			'priority' => 4,
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '!=', 'value' => '1' )
			),
			'output' => array(
				array( 'element' => '#logo .logo-title > h1 a, #logo .logo-title h2' , 'property' => 'color', 'suffix' => ' !important' )
			),
			'choices' => array( 'alpha' => true ),
		));
        

	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	AUDITING_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => esc_html__( 'Site Breadcrumb', 'auditing' ),
		'description' => esc_html__('Site Breadcrumb','auditing'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	AUDITING_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => esc_html__( 'Site Header', 'auditing' ),
		'description' => esc_html__('Site Header','auditing'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	AUDITING_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => esc_html__( 'Site Menu', 'auditing' ),
		'description' => esc_html__('Site Menu','auditing'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		AUDITING_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => esc_html__( 'Site Footer I', 'auditing' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	AUDITING_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => esc_html__( 'Site Footer II', 'auditing' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	AUDITING_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => esc_html__( 'Site Copyright', 'auditing' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Site Sociable
	require_once get_template_directory() . '/kirki/options/site-sociable.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	AUDITING_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => esc_html__( 'Typography', 'auditing' ),
		'description' => esc_html__('Typography Settings','auditing'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends