<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('AUDITING_THEME_NAME').' '.esc_html__('Options', 'auditing'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => sprintf( esc_html__('Designthemes Framework %sby Designthemes%s', 'auditing'), '<small>', '</small>' )
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'auditing'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'auditing' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'auditing'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'auditing'),
	  'default'  => true
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'auditing'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'auditing')
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'auditing'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'auditing')
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'auditing'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'auditing').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'auditing'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'auditing').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'auditing'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'auditing'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'auditing' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'auditing'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'auditing')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'auditing'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'auditing')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'auditing'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'auditing'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'auditing' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'auditing'),
			'options'    => array(
			  'content-full-width'   => AUDITING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AUDITING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'auditing'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'auditing'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'auditing' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'auditing'),
			'options'      => array(
			  'one-column' 		  => AUDITING_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => AUDITING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => AUDITING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'auditing'),
			'info'		 => esc_html__('YES! to allow excerpt', 'auditing'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'auditing'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'auditing').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'auditing'),
			'info'		 => esc_html__('YES! to enable read more button', 'auditing'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'auditing'),
			'info'		 => esc_html__('Paste any button shortcode here', 'auditing'),
			'default'	 => '[dt_sc_button style="filled" title="Continue Reading" target="_blank" /]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'auditing' ),
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'auditing'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'auditing'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'auditing'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'auditing'),
			  'blog-medium-style'       => esc_html__('Medium', 'auditing'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'auditing'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'auditing'),
			),
			'class'        => 'chosen',
			'default'      => 'blog-default-style',
			'info'         => esc_html__('Choose post style to display single blog posts and archives.', 'auditing'),
		  ),
		  
		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post category information', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'auditing' ),
			'info'	  => esc_html__('YES! to show post tag information', 'auditing'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'auditing'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'auditing' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'auditing' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'auditing'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'auditing'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'auditing'),
			  'type2'      => esc_html__('Classic', 'auditing'),
			  'type4'  	   => esc_html__('Diamond', 'auditing'),
			  'type5'      => esc_html__('Shadow', 'auditing'),
			  'type6'      => esc_html__('Diamond Alt', 'auditing'),
			  'type7'  	   => esc_html__('Stack', 'auditing'),
			  'type8'  	   => esc_html__('Minimal', 'auditing'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'auditing')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'auditing' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'auditing')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'auditing'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'auditing'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'auditing')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'auditing' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'auditing')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'auditing'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'auditing')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'auditing'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'auditing' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'auditing' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'auditing')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'auditing'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'auditing'),
			  'type2'      => esc_html__('Teaser', 'auditing'),
			  'type3'  	   => esc_html__('Minimal', 'auditing'),
			  'type4'      => esc_html__('Counter Only', 'auditing'),
			  'type5'      => esc_html__('Belt', 'auditing'),
			  'type6'  	   => esc_html__('Classic', 'auditing'),
			  'type7'  	   => esc_html__('Boxed', 'auditing')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'auditing'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'auditing' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'auditing')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'auditing'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'auditing'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'auditing')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'auditing' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'auditing'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'auditing'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'auditing').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'auditing'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'auditing'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'auditing')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'auditing'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'auditing'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'auditing'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'auditing' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'auditing'),
		'options'      => array(
			'default' => esc_html__('Choose any type', 'auditing'),
			'type1'   => esc_html__('Double Border', 'auditing'),
			'type2'   => esc_html__('Tooltip', 'auditing'),
			'type3'   => esc_html__('Title Top Border', 'auditing'),
			'type4'   => esc_html__('Left Border & Pattren', 'auditing'),
			'type5'   => esc_html__('Bottom Border', 'auditing'),
			'type6'   => esc_html__('Tooltip Border', 'auditing'),
			'type7'   => esc_html__('Boxed Modern', 'auditing'),
			'type8'   => esc_html__('Elegant Border', 'auditing'),
			'type9'   => esc_html__('Needle', 'auditing'),
			'type10'  => esc_html__('Ribbon', 'auditing'),
			'type11'  => esc_html__('Content Background', 'auditing'),
			'type12'  => esc_html__('Classic BG', 'auditing'),
			'type13'  => esc_html__('Tiny Boders', 'auditing'),
			'type14'  => esc_html__('BG & Border', 'auditing'),
			'type15'  => esc_html__('Classic BG Alt', 'auditing'),
			'type16'  => esc_html__('Left Border & BG', 'auditing'),
			'type17'  => esc_html__('Basic', 'auditing'),
			'type18'  => esc_html__('BG & Pattern', 'auditing'),
		),
		'class'   => 'chosen',
		'default' =>  'default',
		'info'    => esc_html__('Choose the style of sidebar widget title.', 'auditing')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'auditing'),
		'button_title'    => esc_html__('Add New', 'auditing'),
		'accordion_title' => esc_html__('Add New Widget Area', 'auditing'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'auditing'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'auditing'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'auditing' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'auditing'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'auditing').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'auditing'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'auditing'),
			  'type2'      => esc_html__('Pattern Overlay', 'auditing'),
			  'type3'  	   => esc_html__('Thin Border', 'auditing'),
			  'type4'      => esc_html__('Diamond Icons', 'auditing'),
			  'type5'      => esc_html__('Girly', 'auditing'),
			  'type6'  	   => esc_html__('Push Animation', 'auditing'),
			  'type7' 	   => esc_html__('Dual Color BG', 'auditing'),
			  'type8' 	   => esc_html__('Modern', 'auditing'),
			  'type9' 	   => esc_html__('Diamond & Border', 'auditing'),
			  'type10' 	   => esc_html__('Easing', 'auditing'),
			  'type11' 	   => esc_html__('Boxed', 'auditing'),
			  'type12' 	   => esc_html__('Easing Alt', 'auditing'),
			  'type13' 	   => esc_html__('Parallel', 'auditing'),
			  'type14' 	   => esc_html__('Pointer', 'auditing'),
			  'type15' 	   => esc_html__('Diamond Flip', 'auditing'),
			  'type16' 	   => esc_html__('Stack', 'auditing'),
			  'type17' 	   => esc_html__('Bouncy', 'auditing'),
			  'type18' 	   => esc_html__('Hexagon', 'auditing'),
			  'type19' 	   => esc_html__('Masked Diamond', 'auditing'),
			  'type20' 	   => esc_html__('Masked Circle', 'auditing'),
			  'type21' 	   => esc_html__('Classic', 'auditing'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type1',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'auditing')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'auditing'),
			'options'    => array(
			  'one-half-column'     => AUDITING_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => AUDITING_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => AUDITING_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'auditing' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'auditing'),
			'options'      => array(
			  'content-full-width'   => AUDITING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AUDITING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'auditing'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'auditing'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'auditing'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'auditing')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'auditing' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'auditing'),
			'options'      => array(
			  'content-full-width'   => AUDITING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AUDITING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'auditing'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'auditing'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'auditing' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'auditing'),
			'options'      => array(
			  'content-full-width'   => AUDITING_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => AUDITING_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => AUDITING_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'auditing'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'auditing'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
	'name'        => 'sociable_options',
	'title'       => esc_html__('Sociable', 'auditing'),
	'icon'        => 'fa fa-share-alt-square',
  
	'fields'      => array(
  
		array(
		  'type'    => 'subheading',
		  'content' => esc_html__( "Sociable", 'auditing' ),
		),
  
		array(
		  'id'              => 'sociable_fields',
		  'type'            => 'group',
		  'title'           => esc_html__('Sociable', 'auditing'),
		  'info'            => esc_html__('Click button to add type of social & url.', 'auditing'),
		  'button_title'    => esc_html__('Add New Social', 'auditing'),
		  'accordion_title' => esc_html__('Adding New Social Field', 'auditing'),
		  'fields'          => array(
			array(
			  'id'          => 'sociable_fields_type',
			  'type'        => 'select',
			  'title'       => esc_html__('Select Social', 'auditing'),
			  'options'      => array(
				'delicious' 	 => esc_html__('Delicious', 'auditing'),
				'deviantart' 	 => esc_html__('Deviantart', 'auditing'),
				'digg' 	  	 => esc_html__('Digg', 'auditing'),
				'dribbble' 	 => esc_html__('Dribbble', 'auditing'),
				'envelope' 	 => esc_html__('Envelope', 'auditing'),
				'facebook' 	 => esc_html__('Facebook', 'auditing'),
				'flickr' 		 => esc_html__('Flickr', 'auditing'),
				'google-plus'  => esc_html__('Google Plus', 'auditing'),
				'gtalk'  		 => esc_html__('GTalk', 'auditing'),
				'instagram'	 => esc_html__('Instagram', 'auditing'),
				'lastfm'	 	 => esc_html__('Lastfm', 'auditing'),
				'linkedin'	 => esc_html__('Linkedin', 'auditing'),
				'pinterest'	 => esc_html__('Pinterest', 'auditing'),
				'reddit'		 => esc_html__('Reddit', 'auditing'),
				'rss'		 	 => esc_html__('RSS', 'auditing'),
				'skype'		 => esc_html__('Skype', 'auditing'),
				'stumbleupon'	 => esc_html__('Stumbleupon', 'auditing'),
				'tumblr'		 => esc_html__('Tumblr', 'auditing'),
				'twitter'		 => esc_html__('Twitter', 'auditing'),
				'viadeo'		 => esc_html__('Viadeo', 'auditing'),
				'vimeo'		 => esc_html__('Vimeo', 'auditing'),
				'yahoo'		 => esc_html__('Yahoo', 'auditing'),
				'youtube'		 => esc_html__('Youtube', 'auditing'),
			  ),
			  'class'        => 'chosen',
			  'default'      => 'delicious',
			),
  
			array(
			  'id'          => 'sociable_fields_url',
			  'type'        => 'text',
			  'title'       => esc_html__('Enter URL', 'auditing')
			),
		  )
		),
  
	 ),
  );

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'auditing'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'auditing' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'auditing'),
		'info'	=> esc_html__("YES! to enable top hook.", 'auditing')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'auditing'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'auditing')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'auditing' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'auditing'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'auditing')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'auditing'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'auditing')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'auditing' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'auditing'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'auditing')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'auditing'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'auditing')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'auditing' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'auditing'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'auditing')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'auditing'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'auditing')
	  ),

 array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'auditing'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'auditing')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'auditing'),
		'info'		 => esc_html__('Enter your Google tracking id (UA-XXXXX-X) here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'auditing')
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'auditing'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'auditing')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('AUDITING_THEME_NAME').esc_html__(' Log', 'auditing'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('AUDITING_THEME_NAME').esc_html__(' Theme Change Log', 'auditing')
    ),
    array(
      'type'    => 'content',
	  'content' => '<pre>

2020.02.06 - version 2.0

* Updated : All premium plugins	  

2020.01.30 - version 1.9

* Compatible with wordpress 5.3.2
* Updated: All premium plugins
* Updated: All wordpress theme standards
* Updated: Privacy and Cookies concept
* Updated: Gutenberg editor support for custom post types

* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Privacy Button Issue
* Fixed: Gutenberg check for old wordpress version

* Improved: Tags taxonomy added for portfolio
* Improved: Single product breadcrumb section
* Improved: Revisions options added for all custom posts

2019.11.14 - version 1.8
* Compatible with wordpress 5.2.4
* Updated: All wordpress theme standards
* Updated: All premium plugins	  
2019.07.26 - version 1.7
* Compatible with wordpress 5.2.2
* Updated: All premium plugins
* Updated: Revisions added to all custom post types
* Updated: Gutenberg editor support for custom post types
* Updated: Link for phone number module
* Updated: Online documentation link, check readme file

* Fixed: Customizer logo option
* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Gutenberg check for old wordpress version
* Fixed: Edit with Visual Composer for portfolio
* Fixed: Site title color
* Fixed: Privacy popup bg color
* Fixed: 404 page scrolling issue
* Fixed: Style Picker issue

* Improved: Single product breadcrumb section
* Improved: Tags taxonomy added for portfolio
* Improved: Woocommerce cart module added with custom class option

* New: Whatsapp Shortcode

2019.06.14 - version 1.6
* Gutenberg Latest update compatible
* Portfolio Video option
* Coming Soon page fix
* Mega menu image fix
* wpml xml file updated
* GDPR product single page fix
* Codestar framework update
* Updated latest version of all third party plugins
* Image Caption mudule link
* Some design tweaks

2018.11.10 - version 1.5
 * Gutenberg plugin compatible
 * Latest wordpress version 4.9.8 compatible
 * Updated latest version of all third party plugins
 * Updated documentation

2018.08.04 - version 1.4
* GDPR Compliant update in comment form, mailchimp form etc.
* Compatible with wordpress 4.9.8
* Google Map Api Key Fix

2018.07.20 - version 1.3
* Compatible with wordpress version 4.9.7
* Fix - Bulk plugins install issue
* Fix - Woocommerce outdated files
* Fix - Iphone sidebar issue
* Fix - Add target attribute for social media
* Fix - Sociable option 
* Fix - Option for change the site title color
* Fix - Nav Menu Role Plugin compatible.
* Fix - Added the smile fonts folder
* Fix - Woocommerce custom sidebar issue
* Updated documentation
* Updated language files
* Updated all third party plugins
* Fix - Event Category added
* Fix - Buddypress issue
* Fix - youtube and vimeo video issue in https
* Fix - Twitter feeds links issue
* Fix - Shop page breadcrumb displays
* Updated demo contents
* Fix - All theme functions updated for child theme support
* Fix - Sociable icon link issue

2017.08.02 - version 1.2
 * Updated all third parthy plugins
 * Kirki typography font variations issue fixed
 * Few pages custom css replaced with stylesheet

2017.06.29 - version 1.1
 * Optimized Demo content Included

2017.06.09 - version 1.0
 * First release!  </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'auditing'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );