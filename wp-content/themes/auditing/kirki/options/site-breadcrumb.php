<?php
$config = auditing_kirki_config();

# Breadcrumb Settings
AUDITING_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'auditing' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 1,	
) );

	# show-breadcrumb
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'show-breadcrumb',
		'label'    => esc_html__( 'Show Breadcrumb', 'auditing' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'auditing' ),
			'off' => esc_attr__( 'No', 'auditing' )
		)
	));

	# breadcrumb-delimiter	
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-delimiter',
		'label'    => esc_html__( 'Breadcrumb Delimiter', 'auditing' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => auditing_defaults( 'breadcrumb-delimiter' ),
		'choices'  => array(
			"fa default" => esc_attr__('Default','auditing'),
			"fa fa-angle-double-right" => esc_attr__('Double Angle Right','auditing'),
			"fa fa-sort" => esc_attr__('Sort','auditing'),
			"fa fa-arrow-circle-right" => esc_attr__('Arrow Circle Right','auditing'),
			"fa fa-angle-right" => esc_attr__('Angle Right','auditing'),
			"fa fa-caret-right" => esc_attr__('Caret Right','auditing'),
			"fa fa-arrow-right" => esc_attr__('Arrow Right','auditing'),
			"fa fa-chevron-right" => esc_attr__('Chevron Right','auditing'),
			"fa fa-hand-o-right" => esc_attr__('Hand Right','auditing'),
			"fa fa-plus" => esc_attr__('Plus','auditing'),
			"fa fa-remove" => esc_attr__('Remove','auditing'),
			"fa fa-glass" => esc_attr__('Glass','auditing'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

	# breadcrumb-style	
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'select',
		'settings' => 'breadcrumb-style',
		'label'    => esc_html__( 'Breadcrumb Style', 'auditing' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => auditing_defaults( 'breadcrumb-style' ),
		'choices'  => array(
			"default"	=> esc_attr__('Default','auditing'),
			"aligncenter"	=> esc_attr__('Align Center','auditing'),
			"alignright"	=> esc_attr__('Align Right','auditing'),
			"breadcrumb-left"	=> esc_attr__('Left Side Breadcrumb','auditing'),
			"breadcrumb-right"	=> esc_attr__('Right Side Breadcrumb','auditing'),
			"breadcrumb-top-right-title-center"	=> esc_attr__('Top Right Title Center','auditing'),
			"breadcrumb-top-left-title-center"	=> esc_attr__('Top Left Title Center','auditing'),				
		),
		'active_callback' => array(
			array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
		)			
	));

# Breadcrumb Background Settings
AUDITING_Kirki::add_section( 'dt_site_breadcrumb_bg_section', array(
	'title' => esc_html__( 'Background', 'auditing' ),
	'panel' => 'dt_site_breadcrumb_panel',
	'priority' => 2,	
) );
		# customize-breadcrumb-bg
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-bg',
			'label'    => esc_html__( 'Customize Background ?', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'default'  => auditing_defaults('customize-breadcrumb-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'breadcrumb-bg-color',
			'label'    => esc_html__( 'Background Color', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-image
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'breadcrumb-bg-image',
			'label'    => esc_html__( 'Background Image', 'auditing' ),
			'description'    => esc_html__( 'Add Background Image for breadcrumb', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# breadcrumb-bg-position
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => auditing_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# breadcrumb-bg-repeat
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'breadcrumb-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_bg_section',
			'output' => array(
				array( 'element' => '.main-title-section-wrapper:before' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => auditing_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'breadcrumb-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Breadcrumb Typography
	AUDITING_Kirki::add_section( 'dt_site_breadcrumb_typo', array(
		'title'	=> esc_html__( 'Typography', 'auditing' ),
		'panel' => 'dt_site_breadcrumb_panel',
		'priority' => 3,
	) );

		# customize-breadcrumb-title-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => auditing_defaults('customize-breadcrumb-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-title-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-title-typo',
			'label'    => esc_html__( 'Title Typography', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => '.main-title-section h1, h1.simple-title' )
			),
			'default' => auditing_defaults( 'breadcrumb-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		

		# customize-breadcrumb-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-breadcrumb-typo',
			'label'    => esc_html__( 'Customize Link ?', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'default'  => auditing_defaults('customize-breadcrumb-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' )
			)			
		));

		# breadcrumb-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'breadcrumb-typo',
			'label'    => esc_html__( 'Link Typography', 'auditing' ),
			'section'  => 'dt_site_breadcrumb_typo',
			'output' => array(
				array( 'element' => 'div.breadcrumb a' )
			),
			'default' => auditing_defaults( 'breadcrumb-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-breadcrumb', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
			)		
		));