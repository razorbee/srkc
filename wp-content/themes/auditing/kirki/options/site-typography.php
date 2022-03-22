<?php
$config = auditing_kirki_config();

# Menu Typography
AUDITING_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => esc_html__( 'Menu', 'auditing' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => esc_html__( 'Customize Menu Typo', 'auditing' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => auditing_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'auditing' ),
			'off' => esc_attr__( 'No', 'auditing' )
		)
	));

	# menu-typo
	AUDITING_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => esc_html__('Settings', 'auditing'),
		'section'  => 'dt_menu_typo_section',
		'output' => array( 
			array( 'element' => '#main-menu > ul.menu > li > a' )
		),
		'default' => auditing_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
AUDITING_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'auditing' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'auditing' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => auditing_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'auditing' ),
			'off' => esc_attr__( 'No', 'auditing' )
		)
	));

	# body-content-typo
	AUDITING_Kirki::add_field( $config ,array(
		'type'     => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'auditing'),
		'section'  => 'dt_body_content_typo_section',
		'output'   => array(
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => auditing_defaults('body-content-typo'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

AUDITING_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'auditing' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );
	# Heading Tags
	for( $i=1; $i<=6; $i++ ) {

		if( $i == 1 ){
			$output = array(
				array( 'element' => 'h1' ),
				array( 
					'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
					'context' => array ('editor')
				)
			);
		}

		$output = array(
			array( 'element' => 'h'.$i ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h'.$i,
				'context' => array ('editor')
			),
		);

		# customize-body-heading-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-body-h'.$i.'-typo',
			'label'    => esc_html__( 'Customize H', 'auditing' ). $i.esc_html__(' Tag', 'auditing'),
			'section'  => 'dt_headings_typo_section',
			'default'  => auditing_defaults( 'customize-body-h'.$i.'-typo' ),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));

		# heading tag typography	
		AUDITING_Kirki::add_field( $config ,array(
			'type'     => 'typography',
			'settings' => 'h'.$i,
			'label'    => esc_html__( 'H', 'auditing' ).$i. ' '.esc_html__('Tag Settings', 'auditing'),
			'section'  => 'dt_headings_typo_section',
			'output'   => $output,
			'default'  => auditing_defaults('h'.$i),
			'choices'  => array(
				'variant' => array(
					'100',
					'100italic',
					'200',
					'200italic',
					'300',
					'300italic',
					'regular',
					'italic',
					'500',
					'500italic',
					'600',
					'600italic',
					'700',
					'700italic',
					'800',
					'800italic',
					'900',
					'900italic'
				),
			),
			'active_callback' => array(
				array( 'setting' => 'customize-body-h'.$i.'-typo', 'operator' => '==', 'value' => '1' )
			)
		));		

		# Divider
		AUDITING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'customize-body-h'.$i.'-typo-divider',
			'section'  => 'dt_headings_typo_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));		
	}