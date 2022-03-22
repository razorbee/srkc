<?php
function auditing_kirki_config() {
	return 'auditing_kirki_config';
}

function auditing_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = AUDITING_THEME_URI.'/images/logo.png';
	$defaults['custom-dark-logo'] = AUDITING_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = AUDITING_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';
	$defaults['custom-title-color'] = '#ffffff';

	# site skin
	$defaults['use-predefined-skin'] = '0';
	$defaults['predefined-skin']     = 'turquoise';
	$defaults['primary-color']       = '#54E7B3';
	$defaults['secondary-color']     = '#24B6A8';
	$defaults['tertiary-color']      = '#4ED8A8';
	$defaults['body-bg-color']       = '#ffffff';
	$defaults['body-content-color']  = '#5c6265';
	$defaults['body-a-color']        = '#54E7B3';
	$defaults['body-a-hover-color']  = '#24B6A8';

	$defaults['customize-breadcrumb-bg'] = '1';

	# site breadcrumb
	$defaults['show-breadcrumb']                 = '1';
	$defaults['breadcrumb-delimiter']            = 'fa default';
	$defaults['breadcrumb-style']                = 'default';
	$defaults['breadcrumb-bg-position']          = 'center center';
	$defaults['breadcrumb-bg-repeat']            = 'repeat';
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo']           = array( 'font-family' => 'Raleway',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '30px',
		'line-height'    => '30px',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none' );
	$defaults['customize-breadcrumb-typo'] = '0';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Raleway',
		'variant'        => 'regular',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '16px',
		'line-height'    => '30px',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none' );

	# site header
	$defaults['header-type']            = 'fullwidth-header';
	$defaults['enable-sticy-nav']       = '1';
	$defaults['header-position']        = 'above slider';
	$defaults['header-transparency']    = 'default';
	$defaults['enable-header-darkbg']   = '0';
	$defaults['menu-search-icon']       = '1';
	$defaults['search-box-type']        = 'type2';
	$defaults['menu-cart-icon']         = '0';
	$defaults['enable-top-bar-content'] = '0';

	# site menu
	$defaults['menu-active-style'] = 'menu-default';
	$defaults['menu-hover-style']  =  '';

	# site footer
	$defaults['show-footer']                 = '1';
	$defaults['footer-columns']              = '4';
	$defaults['enable-footer-darkbg']        = '1';
	$defaults['customize-footer-bg']         = '1';
	$defaults['footer-bg-color']             = '#181818';
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Montserrat',
		'variant'        => '700',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '14px',
		'line-height'    => '30px',
		'letter-spacing' => '0.075em',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'uppercase' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Raleway',
		'variant'        => '400',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '16px',
		'line-height'    => '24px',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'none' );
	$defaults['footer-content-a-color'] = '#FFFFFF';
	$defaults['footer-content-a-hover-color'] = '#54E7B3';	

	# site copyright
	$defaults['show-copyright-text'] = '1';
	$defaults['copyright-text'] = '&copy; 2017 Auditing. All rights reserved. Design by <a title="DesignThemes" href="http://themeforest.net/user/designthemes">DesignThemes</a>';
	$defaults['enable-copyright-darkbg']              = '1';
	$defaults['copyright-next']                       = 'footer-menu';
	$defaults['customize-footer-copyright-bg']        = '1';
	$defaults['footer-copyright-bg-color']            = '#202020';
	$defaults['customize-footer-copyright-text-typo'] = '0';
	$defaults['customize-footer-menu-typo'] 		  = '0';

	# site social
	$defaults['social-facebook']    = '#';
	$defaults['social-twitter']     = '#';
	$defaults['social-google-plus'] = '#';
	$defaults['social-instagram']   = '#';
	
	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '32px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '30px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '24px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '20px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '18px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family'    => 'PT Serif',
		'variant'        => '400',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '',
		'color'          => '#191919',
		'text-align'     => 'initial',
		'text-transform' => 'none'
	);

	$defaults['customize-menu-typo'] = '1';
	$defaults['menu-typo'] = array(
		'font-family'    => 'Raleway',
		'font-size'      => '16px',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '#000000',
		'text-transform' => 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family'    => 'Raleway',
		'variant'        => '400',
		'font-size'      => '16px',
		'line-height'    => '30px',
		'letter-spacing' => '',
		'color'          => '#5c6265'
	);

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function auditing_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','auditing'),
		"top center"    => esc_attr__('Top Center','auditing'),
		"top right"     => esc_attr__('Top Right','auditing'),
		"center left"   => esc_attr__('Center Left','auditing'),
		"center center" => esc_attr__('Center Center','auditing'),
		"center right"  => esc_attr__('Center Right','auditing'),
		"bottom left"   => esc_attr__('Bottom Left','auditing'),
		"bottom center" => esc_attr__('Bottom Center','auditing'),
		"bottom right"  => esc_attr__('Bottom Right','auditing'),
	);

	return $positions;
}

function auditing_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','auditing'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','auditing'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','auditing'),
		"no-repeat" => esc_attr__('No Repeat','auditing')
	);

	return $image_repeats;
}

function auditing_border_styles() {

	$image_repeats = array(
		"none" 	 => esc_attr__('None','auditing'),	
		"dotted" => esc_attr__('Dotted','auditing'),
		"dashed" => esc_attr__('Dashed','auditing'),
		"solid"	 => esc_attr__('Solid','auditing'),
		"double" => esc_attr__('Double','auditing'),
		"groove" => esc_attr__('Groove','auditing'),
		"ridge"	 => esc_attr__('Ridge','auditing'),
	);

	return $image_repeats;
}

function auditing_animations() {

	$animations = array(
		'' 					 =>  esc_attr__('Default','auditing'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'auditing'),
        "bounce"             =>  esc_attr__("bounce",'auditing'),
        "bounceIn"           =>  esc_attr__("bounceIn",'auditing'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'auditing'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'auditing'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'auditing'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'auditing'),
        "bounceOut"          =>  esc_attr__("bounceOut",'auditing'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'auditing'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'auditing'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'auditing'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'auditing'),
        "expandOpen"         =>  esc_attr__("expandOpen",'auditing'),
        "expandUp"           =>  esc_attr__("expandUp",'auditing'),
        "fadeIn"             =>  esc_attr__("fadeIn",'auditing'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'auditing'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'auditing'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'auditing'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'auditing'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'auditing'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'auditing'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'auditing'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'auditing'),
        "fadeOut"            =>  esc_attr__("fadeOut",'auditing'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'auditing'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'auditing'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'auditing'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'auditing'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'auditing'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'auditing'),
        "flash"              =>  esc_attr__("flash",'auditing'),
        "flip"               =>  esc_attr__("flip",'auditing'),
        "flipInX"            =>  esc_attr__("flipInX",'auditing'),
        "flipInY"            =>  esc_attr__("flipInY",'auditing'),
        "flipOutX"           =>  esc_attr__("flipOutX",'auditing'),
        "flipOutY"           =>  esc_attr__("flipOutY",'auditing'),
        "floating"           =>  esc_attr__("floating",'auditing'),
        "hatch"              =>  esc_attr__("hatch",'auditing'),
        "hinge"              =>  esc_attr__("hinge",'auditing'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'auditing'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'auditing'),
        "pullDown"           =>  esc_attr__("pullDown",'auditing'),
        "pullUp"             =>  esc_attr__("pullUp",'auditing'),
        "pulse"              =>  esc_attr__("pulse",'auditing'),
        "rollIn"             =>  esc_attr__("rollIn",'auditing'),
        "rollOut"            =>  esc_attr__("rollOut",'auditing'),
        "rotateIn"           =>  esc_attr__("rotateIn",'auditing'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'auditing'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'auditing'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'auditing'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'auditing'),
        "rotateOut"          =>  esc_attr__("rotateOut",'auditing'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'auditing'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'auditing'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'auditing'),
        "shake"              =>  esc_attr__("shake",'auditing'),
        "slideDown"          =>  esc_attr__("slideDown",'auditing'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'auditing'),
        "slideLeft"          =>  esc_attr__("slideLeft",'auditing'),
        "slideRight"         =>  esc_attr__("slideRight",'auditing'),
        "slideUp"            =>  esc_attr__("slideUp",'auditing'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'auditing'),
        "stretchRight"       =>  esc_attr__("stretchRight",'auditing'),
        "swing"              =>  esc_attr__("swing",'auditing'),
        "tada"               =>  esc_attr__("tada",'auditing'),
        "tossing"            =>  esc_attr__("tossing",'auditing'),
        "wobble"             =>  esc_attr__("wobble",'auditing'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'auditing'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'auditing'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'auditing')
    );

	return $animations;
}