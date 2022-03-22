<?php
$config = auditing_kirki_config();

# Main menu
	AUDITING_Kirki::add_section( 'dt_site_navigation_section', array(
		'title' => esc_html__( 'Main Menu', 'auditing' ),
		'panel' => 'dt_site_menu_panel',
		'priority' => 1
	) );

		# menu-active-style
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'menu-active-style',
			'label'    => esc_html__( 'Menu Active Style', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => '',
			'choices'  => array(
				"menu-default" => esc_attr__( 'Default','auditing'),
				"menu-active-with-icon menu-active-highlight" => esc_attr__( 'Highlight with Plus Icon','auditing'),
				"menu-active-highlight" => esc_attr__( 'Highlight','auditing'),
				"menu-active-highlight-grey" => esc_attr__( 'Highlight Grey','auditing'),
				"menu-active-highlight-with-arrow" => esc_attr__( 'Highlight with Arrow','auditing'),
				"menu-active-with-two-border" => esc_attr__( 'Two Border','auditing'),
				"menu-active-with-double-border" => esc_attr__( 'Double Border','auditing'),
				"menu-active-border-with-arrow" => esc_attr__( 'Border with Arrow','auditing'),
				"menu-with-slanting-splitter" => esc_attr__( 'Slanting Splitter','auditing'),
			)
		));

		# Divider
		AUDITING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'menu-bg-color-divider',
			'section'  => 'dt_site_navigation_section',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'customize-menu-bg-color', 'operator' => '==', 'value' => '1' ),
			)			
		));

		# customize-menu-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-menu-bg-color',
			'label'    => esc_html__( 'Customize Menu BG ?', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => auditing_defaults('customize-menu-bg-color'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));		

		# menu-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-bg-color',
			'label'    => esc_html__( 'Background Color', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '.menu-wrapper, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-bg-color', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# Divider
		AUDITING_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'menu-link-color-divider',
			'section'  => 'dt_site_navigation_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

		# customize-menu-link
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-menu-link',
			'label'    => esc_html__( 'Customize Menu Link Colors ?', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => auditing_defaults('customize-menu-link'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));

		# menu-a-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-color',
			'label'    => esc_html__( 'Menu link Color', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu ul.menu > li > a' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-hover-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-hover-color',
			'label'    => esc_html__( 'Menu link hover Color', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu ul.menu > li > a:hover, #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, #main-menu ul.menu > li.menu-item-simple-parent:hover > a' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-active-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-active-color',
			'label'    => esc_html__( 'Active Menu Color', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '.menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before, 

					.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:after, 

					.menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:before,  .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:after, 

					.menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:after' , 'property' => 'background-color' ),

				array( 'element' => '.menu-active-with-double-border #main-menu > ul.menu > li.current_page_item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'border-color' ),

				array( 'element' => '.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before' , 'property' => 'border-bottom-color' ),

				array( 'element' => '#main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu ul.menu > li.current-menu-ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, .left-header #main-menu > ul.menu > li.current_page_item > a,.left-header #main-menu > ul.menu > li.current_page_ancestor > a,.left-header #main-menu > ul.menu > li.current-menu-item > a, .left-header #main-menu > ul.menu > li.current-menu-ancestor > a, 

					.menu-active-highlight #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'color' ),

			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-active-bg-color
		AUDITING_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-active-bg-color',
			'label'    => esc_html__( 'Active Menu BG Color', 'auditing' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu > ul.menu > li.current-menu-ancestor > a,  .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor, 

					.menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'background-color' ),

				array( 'element' => '.menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before' , 'property' => 'border-top-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

# Sub menu
	AUDITING_Kirki::add_section( 'dt_site_sub_menu_section', array(
		'title' => esc_html__( 'Sub Menu', 'auditing' ),
		'panel' => 'dt_site_menu_panel',
		'priority' => 2
	) );

		# menu-hover-animation-style
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'menu-hover-style',
			'label'    => esc_html__( 'Sub Menu Wrapper Animation', 'auditing' ),
			'section'  => 'dt_site_sub_menu_section',
			'default'  => '',
			'choices'  => auditing_animations()
		));

		# customize-sub-menu-wrapper
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-sub-menu-wrapper',
				'label'    => esc_html__( 'Customize Sub Menu Wrapper ?', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'auditing' ),
					'off' => esc_attr__( 'No', 'auditing' )
				)
			));

			# Sub Menu Wrapper Background Color
			
				# allow-sub-menu-bg-color
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-bg-color',
					'label'    => esc_html__( 'Custom BG - Sub Menu Wrapper', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-bg-color-type
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-bg-color-type',
					'label'    => esc_html__( 'BG Color Type', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'simple',
					'choices'  => array(
						'simple' => esc_html__('Simple','auditing'),
						'gradient' => esc_html__('Gradient','auditing')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-bg-color
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color',
					'label'    => esc_html__( 'BG Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'simple' ),
					)
				));			

				# sub-menu-bg-color-1
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color-1',
					'label'    => esc_html__( 'Gradient BG 1', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
					)				
				));

				# sub-menu-bg-color-1-stop
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bg-color-1-stop',
					'label'    => esc_html__( 'Gradient BG 1 Stop (in %)', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'	=> 30,
					'choices'     => array( 'min'  => '0', 'max'  => '100', 'step' => '1' ),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-1', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' )
					)			
				));

				# sub-menu-bg-color-2
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color-2',
					'label'    => esc_html__( 'Gradient BG 2', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
					)				
				));

				# sub-menu-bg-color-2-stop
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bg-color-2-stop',
					'label'    => esc_html__( 'Gradient BG 2 Stop (in %)', 'auditing' ),
					'default'	=> 50,
					'choices'     => array( 'min'  => '0', 'max'  => '100', 'step' => '1' ),
					'section'  => 'dt_site_sub_menu_section',			
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-2', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' )
					)			
				));

				# sub-menu-bg-color-direction
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-bg-color-direction',
					'label'    => esc_html__( 'Gradient Direction', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'to top',
					'choices'  => array(
						'to top' => esc_html__('Bottom to Top','auditing'),
						'to bottom' => esc_html__('Top to Bottom','auditing'),
						'to right' => esc_html__('Left to Right','auditing'),
						'to left' => esc_html__('Right to Left','auditing'),
						'to top left' => esc_html__('Bottom Right to Top Left','auditing'),
						'to top right' => esc_html__('Bottom Left to Right Top','auditing'),
						'to bottom right' => esc_html__('Left Top to Bottom Right','auditing'),
						'to bottom left' => esc_html__('Right Top to Bottom Left','auditing'),
					),			
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
						array( 'setting' => 'sub-menu-bg-color-1', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-2', 'operator' => '!==', 'value' => '' ),
					)			
				));
			# Sub Menu Wrapper Background Color
			
			# Sub Menu Wrapper Border
				# allow-sub-menu-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-border',
					'label'    => esc_html__( 'Sub Menu Wrapper Border?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' )					
					)
				));

				# sub-menu-border-style
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-border-style',
					'label'    => esc_html__( 'Sub-Menu Wrapper Border Style', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-style')
					),
					'default'  => 'solid',
					'choices'  => auditing_border_styles(),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));
			
				# sub-menu-top-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-top-border',
					'label'    => esc_html__( 'Top Border', 'auditing' ),
					'description'    => esc_html__( 'sub menu top border value in px', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-right-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-right-border',
					'label'    => esc_html__( 'Right Border', 'auditing' ),
					'description'    => esc_html__( 'sub menu right border value in px', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-right-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-bottom-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bottom-border',
					'label'    => esc_html__( 'Bottom Border', 'auditing' ),
					'description'    => esc_html__( 'sub menu bottom border value in px', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-left-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-left-border',
					'label'    => esc_html__( 'Left Border', 'auditing' ),
					'description'    => esc_html__( 'sub menu left border value in px', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-left-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));	

				# sub-menu-border-color
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-border-color',
					'label'    => esc_html__( 'Sub-Menu Wrapper Border Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)				
				));	
			# Sub Menu Wrapper Border

			# Sub Menu Wrapper Border Radius
			
				# allow-sub-menu-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-radius',
					'label'    => esc_html__( 'Sub Menu Wrapper Radius?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
					)
				));		

				# sub-menu-top-left-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-top-left-radius',
					'label'    => esc_html__( 'Top Left Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-top-right-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-top-right-radius',
					'label'    => esc_html__( 'Top Right Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# sub-menu-bottom-right-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-bottom-right-radius',
					'label'    => esc_html__( 'Bottom Right Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# sub-menu-bottom-left-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-bottom-left-radius',
					'label'    => esc_html__( 'Bottom Left Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));
			# Sub Menu Wrapper Border Radius

			# Sub Menu Wrapper Box Shadow	
			
				# allow-sub-menu-box-shadow
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-box-shadow',
					'label'    => esc_html__( 'Sub Menu Wrapper Shadow?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
					)				
				));

				# sub-menu-box-h-shadow
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-h-shadow',
					'label'    => esc_html__( 'H Shadow', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'default'  => auditing_defaults('sub-menu-box-h-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-v-shadow
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-v-shadow',
					'label'    => esc_html__( 'V Shadow', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => auditing_defaults('sub-menu-box-v-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-blur-shadow
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-blur-shadow',
					'label'    => esc_html__( 'Blur Shadow', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => auditing_defaults('sub-menu-box-blur-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-spread-shadow
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-spread-shadow',
					'label'    => esc_html__( 'Spread Shadow', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => auditing_defaults('sub-menu-box-spread-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-shadow-color
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'color',
					'settings' => 'sub-menu-box-shadow-color',
					'label'    => esc_html__( 'Shadow Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-shadow-inset
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'sub-menu-box-shadow-inset',
					'label'    => esc_html__( 'Box Shadow Inset?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)			
				));					
			# Sub Menu Wrapper Box Shadow	
		# customize-sub-menu-wrapper

		# customize-sub-menu-links
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-sub-menu-links',
			'label'    => esc_html__( 'Customize Sub Menu links ?', 'auditing' ),
			'section'  => 'dt_site_sub_menu_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'auditing' ),
				'off' => esc_attr__( 'No', 'auditing' )
			)
		));
		# customize-sub-menu-links		

		# Sub Menu Link BG Settings
			# customize-sub-menu-links
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-sub-menu-link-colors',
				'label'    => esc_html__( 'Custom Colors - Sub Menu Links', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'auditing' ),
					'off' => esc_attr__( 'No', 'auditing' )
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));

			# sub-menu-a-color
			AUDITING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-color',
				'label'    => esc_html__( 'Sub Menu Link Color', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));

			# sub-menu-a-bg-color
			AUDITING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-bg-color',
				'label'    => esc_html__( 'Sub Menu Link BG Color', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));			

			# sub-menu-a-active-color
			AUDITING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-active-color',
				'label'    => esc_html__( 'Sub Menu Link Active Color', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover, #main-menu ul.menu li.menu-item-simple-parent ul li:hover > a, 

						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, 

						#main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a' , 'property' => 'color' ),				
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));

			# sub-menu-a-active-bg-color
			AUDITING_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-active-bg-color',
				'label'    => esc_html__( 'Sub Menu Link Active BG Color', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover, 
						#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-ancestor > a' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));				 
		# Sub Menu Link BG Settings	
		
		# Sub Menu Link Border Style
			# sub-menu-link-border-style
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'select',
				'settings' => 'sub-menu-link-border-style',
				'label'    => esc_html__( 'Sub Menu Link Border', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'-'	=> esc_html__('None','auditing'),
					'with-border'	=> esc_html__('With Border','auditing'),
					'with-hover-border'	=> esc_html__('With Hover Border','auditing'),
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));

				# sub-menu-link-border-style  = with-hover-border
					# sub-menu-h-border-style
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'select',
						'settings' => 'sub-menu-h-border-style',
						'label'    => esc_html__( 'Sub Menu Link Hover Border Style', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'default'  => 'solid',
						'choices' => auditing_border_styles(),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-style'),
						),				
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' )
						)
					));

					# sub-menu-h-top-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-top-border',
						'label'    => esc_html__( 'Top Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-top-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-right-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-right-border',
						'label'    => esc_html__( 'Right Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-right-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-bottom-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-bottom-border',
						'label'    => esc_html__( 'Bottom Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-bottom-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-left-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-left-border',
						'label'    => esc_html__( 'Left Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-left-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-border-color
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'color',
						'settings' => 'sub-menu-h-color',
						'label'    => esc_html__( 'Sub Menu Link Hover Border Color', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices' => array( 'alpha' => true ),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-color'),					
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' )
						)
					));

				# sub-menu-link-border-style  = with-border
					# sub-menu-d-border-style
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'select',
						'settings' => 'sub-menu-d-border-style',
						'label'    => esc_html__( 'Sub Menu Link Border Style', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'default'  => 'solid',
						'choices' => auditing_border_styles(),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-style'),
						),				
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' )
						)
					));

					# sub-menu-d-top-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-top-border',
						'label'    => esc_html__( 'Top Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-top-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-right-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-right-border',
						'label'    => esc_html__( 'Right Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-right-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-bottom-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-bottom-border',
						'label'    => esc_html__( 'Bottom Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-bottom-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-left-border
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-left-border',
						'label'    => esc_html__( 'Left Border', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-left-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));	

					# sub-menu-d-border-color
					AUDITING_Kirki::add_field( $config, array(
						'type'     => 'color',
						'settings' => 'sub-menu-d-color',
						'label'    => esc_html__( 'Sub Menu Link Border Color ', 'auditing' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices' => array( 'alpha' => true ),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-color'),					
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' )
						)
					));
		# Sub Menu Link Border Style

		# Sub Menu Link Border Radius
			# allow-sub-menu-link-radius
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'allow-sub-menu-link-radius',
				'label'    => esc_html__( 'Allow Sub Menu Link Radius?', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'auditing' ),
					'off' => esc_attr__( 'No', 'auditing' )
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));		

			# sub-menu-link-top-left-radius
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-top-left-radius',
				'label'    => esc_html__( 'Top Left Radius', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-top-left-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)
			));

			# sub-menu-link-top-right-radius
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-top-right-radius',
				'label'    => esc_html__( 'Top Right Radius', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-top-right-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));

			# sub-menu-link-bottom-right-radius
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-bottom-right-radius',
				'label'    => esc_html__( 'Bottom Right Radius', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-bottom-right-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));

			# sub-menu-link-bottom-left-radius
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-bottom-left-radius',
				'label'    => esc_html__( 'Bottom Left Radius', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-bottom-left-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));
		# Sub Menu Link Border Radius

		# Sub Menu Link Icon Style
		AUDITING_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'sub-menu-style',
			'label'    => esc_html__( 'Sub Menu Link Icon Style', 'auditing' ),
			'section'  => 'dt_site_sub_menu_section',
			'default'  => '',
			'choices'  => array(
				''	=> esc_html__('None','auditing'),
				' menu-links-with-arrow single'	=> esc_html__('Single','auditing'),
				' menu-links-with-arrow double'	=> esc_html__('Double','auditing'),
				' menu-links-with-arrow disc'	=> esc_html__('Disc','auditing'),
			),
			'active_callback' => array(
				array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
			)				
		));
		# Sub Menu Link Icon Style

		# Mega Menu	
			# customize-mega-menu-title
			AUDITING_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-mega-menu-title',
				'label'    => esc_html__( 'Customize Mega Menu title ?', 'auditing' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'auditing' ),
					'off' => esc_attr__( 'No', 'auditing' )
				)
			));
			# customize-mega-menu-title
			
			# Mega Menu Title Color
				# customize-mega-menu-title-color
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'customize-mega-menu-title-color',
					'label'    => esc_html__( 'Custom Colors - Mega Menu Title', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# customize-mega-menu-title-color
				
				# mega-menu-title-color 			
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'mega-menu-title-color',
					'label'    => esc_html__( 'Mega Menu Title Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array(
						array( 'element' => '#main-menu .megamenu-child-container > ul.sub-menu > li > a, #main-menu .megamenu-child-container > ul.sub-menu > li > .nolink-menu' , 'property' => 'color' )
					),
					'choices' => array( 'alpha' => true ),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-color', 'operator' => '==', 'value' => '1' ),
					)		
				));
				# mega-menu-title-color 			

				# mega-menu-title-bg-color 			
				AUDITING_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'mega-menu-title-bg-color',
					'label'    => esc_html__( 'Mega Menu Title BG Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu' , 'property' => 'background-color' )
					),
					'choices' => array( 'alpha' => true ),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-color', 'operator' => '==', 'value' => '1' ),
					)		
				));
				# mega-menu-title-bg-color
			# Mega Menu Title Color
			
			# Mega Menu Title Radius
				# customize-mega-menu-title-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'customize-mega-menu-title-radius',
					'label'    => esc_html__( 'Allow Mega Menu Title Radius?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# customize-mega-menu-title-radius

				# mega-menu-title-top-left-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-top-left-radius',
					'label'    => esc_html__( 'Top Left Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)
				));

				# mega-menu-title-top-right-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-top-right-radius',
					'label'    => esc_html__( 'Top Right Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# mega-menu-title-bottom-right-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-bottom-right-radius',
					'label'    => esc_html__( 'Bottom Right Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# mega-menu-title-bottom-left-radius
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-bottom-left-radius',
					'label'    => esc_html__( 'Bottom Left Radius', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));				
			# Mega Menu Title Radius
			
			# Mega Menu Title Border 
				# allow-mega-menu-title-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-mega-menu-title-border',
					'label'    => esc_html__( 'Apply Mega Menu Title Border?', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'auditing' ),
						'off' => esc_attr__( 'No', 'auditing' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# allow-mega-menu-title-border

				# mega-menu-title-border-style
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'mega-menu-title-border-style',
					'label'    => esc_html__( 'Mega Menu Title Border Style', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'solid',
					'choices' => auditing_border_styles(),
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-style'),
					),				
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' )
					)
				));

				# mega-menu-title-top-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-top-border',
					'label'    => esc_html__( 'Top Border', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-right-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-right-border',
					'label'    => esc_html__( 'Right Border', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-right-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-bottom-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-bottom-border',
					'label'    => esc_html__( 'Bottom Border', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-left-border
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-left-border',
					'label'    => esc_html__( 'Left Border', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-left-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));			

				# mega-menu-title-border-color
				AUDITING_Kirki::add_field( $config, array(
					'type'     => 'color',
					'settings' => 'mega-menu-title-border-color',
					'label'    => esc_html__( 'Mega Menu Title Border Color', 'auditing' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-color'),					
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' )
					)
				));					
			# Mega Menu Title Border
		# Mega Menu