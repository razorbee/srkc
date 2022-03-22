<?php
$config = auditing_kirki_config();

AUDITING_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'auditing' ),
	'priority' => 20
) );

	# site-layout
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'default'  => auditing_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  AUDITING_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => AUDITING_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'auditing' ),
			'off' => esc_attr__( 'No', 'auditing' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	AUDITING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'auditing' ),
			'upload' => esc_attr__( 'Set Pattern', 'auditing' ),
			'none' => esc_attr__( 'None', 'auditing' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'auditing' ),
		'description'    => esc_html__( 'Add Background for body', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> AUDITING_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	AUDITING_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'auditing' ),
		'description'    => esc_html__( 'Add Background Image for body', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	AUDITING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => auditing_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	AUDITING_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'auditing' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => auditing_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	