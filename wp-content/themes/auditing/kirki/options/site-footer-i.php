<?php
$config = auditing_kirki_config();

# Footer I Layout
	AUDITING_Kirki::add_section( 'dt_footer_layout', array(
		'title'	=> esc_html__( 'Layout', 'auditing' ),
		'description' => esc_html__('Footer Column Layout Settings','auditing'),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 1	
	) );
	
		# show-footer
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer',
			'label'    => esc_html__( 'Show Footer Columns ?', 'auditing' ),
			'section'  => 'dt_footer_layout',
			'default'  => auditing_defaults('show-footer'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));

		# footer-columns
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-columns',
			'label'    => esc_html__( 'Footer Columns Layout ?', 'auditing' ),
			'section'  => 'dt_footer_layout',
			'transport' => 'refresh',
			'default'  => auditing_defaults('footer-columns'),
			'choices' => array(
				'1' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
				'5' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-fifth-column.png',
				'6' => AUDITING_THEME_URI.'/kirki/assets/images/columns/one-sixth-column.png',

				'12' => AUDITING_THEME_URI.'/kirki/assets/images/columns/onefourth-onefourth-onehalf-column.png',
				'13' => AUDITING_THEME_URI.'/kirki/assets/images/columns/onehalf-onefourth-onefourth-column.png',
				'11' => AUDITING_THEME_URI.'/kirki/assets/images/columns/onefourth-onehalf-onefourth-column.png',

				'7' => AUDITING_THEME_URI.'/kirki/assets/images/columns/onefourth-threefourth-column.png',
				'8' => AUDITING_THEME_URI.'/kirki/assets/images/columns/threefourth-onefourth-column.png',

				'9' => AUDITING_THEME_URI.'/kirki/assets/images/columns/onethird-twothird-column.png',
				'10' => AUDITING_THEME_URI.'/kirki/assets/images/columns/twothird-onethird-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-darkbg
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-footer-darkbg',
			'label'    => esc_html__( 'Enable Footer Dark BG', 'auditing' ),
			'section'  => 'dt_footer_layout',
			'default'  => auditing_defaults('enable-footer-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));		


# Footer 1 Background		
	AUDITING_Kirki::add_section( 'dt_footer_bg', array(
		'title'	=> esc_html__( 'Background', 'auditing' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 2,
	) );

		# customize-footer-bg
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-bg',
			'label'    => esc_html__( 'Customize Background ?', 'auditing' ),
			'section'  => 'dt_footer_bg',
			'default'  => auditing_defaults('customize-footer-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-bg-color',
			'label'    => esc_html__( 'Background Color', 'auditing' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-image
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-bg-image',
			'label'    => esc_html__( 'Background Image', 'auditing' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'auditing' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-position
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'auditing' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-position' )
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => auditing_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-bg-repeat
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'auditing' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => auditing_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer I Typography
	AUDITING_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Typography', 'auditing' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 3,
	) );

		# customize-footer-title-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'default'  => auditing_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-title-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => esc_html__( 'Title Typography', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle' )
			),
			'default' => auditing_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		AUDITING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'default'  => auditing_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-content-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets .widget' )
			),
			'default' => auditing_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => auditing_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'auditing' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => auditing_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));