<?php
$config = auditing_kirki_config();

# Footer Copyright
	AUDITING_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> esc_html__( 'Copyright', 'auditing' ),
		'description' => esc_html__('Footer Copyright Settings','auditing'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => esc_html__( 'Show Copyright Text ?', 'auditing' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  auditing_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		) );

		# copyright-text
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => esc_html__( 'Add Content', 'auditing' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  auditing_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => esc_html__( 'Enable Copyright Dark BG ?', 'auditing' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  auditing_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		) );		

		# copyright-next
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => esc_html__( 'Show Sociable / menu ?', 'auditing' ),
			'description'    => esc_html__( 'Add description here.', 'auditing' ),
			'section'  => 'dt_footer_copyright',
			'default'  => auditing_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'auditing' ),
				'disable'  => esc_attr__( 'Disable', 'auditing' ),
				'sociable' => esc_attr__( 'Show sociable', 'auditing' ),
				'footer-menu' => esc_attr__( 'Show menu', 'auditing' ),
			)
		) );

# Footer Social
	AUDITING_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> esc_html__( 'Social', 'auditing' ),
		'description' => esc_html__('Footer Social Icons Settings','auditing'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => esc_html__( 'Social Icons Order', 'auditing' ),
			'section'  => 'dt_footer_social',
			'default'  => auditing_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'auditing' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'auditing' ),
				"digg"			=>	esc_attr__( 'Digg', 'auditing' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'auditing' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'auditing' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'auditing' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'auditing' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'auditing' ),
				"comment"		=>	esc_attr__( 'GTalk', 'auditing' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'auditing' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'auditing' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'auditing' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'auditing' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'auditing' ),
				"rss"			=>	esc_attr__( 'RSS', 'auditing' ),
				"skype"			=>	esc_attr__( 'Skype', 'auditing' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'auditing' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'auditing' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'auditing' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'auditing' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'auditing' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'auditing' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'auditing' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	AUDITING_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> esc_html__( 'Background', 'auditing' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => esc_html__( 'Customize Background ?', 'auditing' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => auditing_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => esc_html__( 'Background Color', 'auditing' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => esc_html__( 'Background Image', 'auditing' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'auditing' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'auditing' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => auditing_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'auditing' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => auditing_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	AUDITING_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> esc_html__( 'Typography', 'auditing' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => esc_html__( 'Customize Copyright Text ?', 'auditing' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => auditing_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => esc_html__( 'Text Typography', 'auditing' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => auditing_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		AUDITING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => esc_html__( 'Customize Footer Menu ?', 'auditing' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => auditing_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => esc_html__( 'Menu Typography', 'auditing' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => auditing_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		