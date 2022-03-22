<?php
/* ---------------------------------------------------------------------------
 * Load default theme options
 * - To return default options to store in database.
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_show_footer_widgetarea' ) ) {
function auditing_show_footer_widgetarea( $count ) {
	$classes = array (
		"1" => "dt-sc-full-width",
		"dt-sc-one-half",
		"dt-sc-one-third",
		"dt-sc-one-fourth",
		"dt-sc-one-fifth",
		"dt-sc-one-sixth",
		"1-2" => "dt-sc-one-half",
		"1-3" => "dt-sc-one-third",
		"1-4" => "dt-sc-one-fourth",
		"3-4" => "dt-sc-three-fourth",
		"2-3" => "dt-sc-two-third" );

	if ($count <= 6) :
		for($i = 1; $i <= $count; $i ++) :

			$class = $classes [$count];
			$class = esc_attr( $class );

			$first = ($i == 1) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$i}" )) : endif;
			echo "</div>";
		endfor;
	elseif ($count == 12 || $count == 13) :

		$a = array (
			"1-4",
			"1-4",
			"1-2" );

		$a = ($count == 12) ? $a : array_reverse ( $a );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) : endif;
			echo "</div>";
		endforeach;
	elseif ($count == 7 || $count == 8) :
		$a = array (
			"1-4",
			"3-4");

		$a = ($count == 7) ? $a : array_reverse ( $a );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );


			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) :endif;
			echo "</div>";
		endforeach;
	elseif ($count == 9 || $count == 10) :
		$a = array ( 
			"1-3",
			"2-3" );
		$a = ($count == 9) ? $a : array_reverse ( $a );

		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) :endif;
			echo "</div>";
		endforeach;
	elseif ($count == 11 ) :
		$a = array ( "1-4", "1-2", "1-4" );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );
			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );
			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) : endif;
			echo "</div>";
		endforeach;
	endif;
}
}
/* ---------------------------------------------------------------------------
 * Check footer sidebar is active
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_is_active_sidebar_footer' ) ) {
	function auditing_is_active_sidebar_footer() {
		global $wp_registered_sidebars;
		$found = false;
		foreach($wp_registered_sidebars as $id => $sidebars):
			$pos = strpos($id, 'footer-sidebar');
			if( $pos === 0 && is_active_sidebar($id) ){
				$found = true;
			}
		endforeach;
		
		return $found;
	} 
}

if( !function_exists('auditing_skins') ){

	function auditing_skins( $skin ) {
		
		$skins['blue']        = array( 'primary-color' => '#008bd3', 'secondary-color' => '#0081c2', 'tertiary-color' => '#22b4ff' );
		$skins['brown']       = array( 'primary-color' => '#795548', 'secondary-color' => '#573a30', 'tertiary-color' => '#8d6a5e' );
		$skins['cadetblue']   = array( 'primary-color' => '#3c939d', 'secondary-color' => '#34818a', 'tertiary-color' => '#5db6c0' );
		$skins['chilipepper'] = array( 'primary-color' => '#c10841', 'secondary-color' => '#9d0836', 'tertiary-color' => '#e31655' );
		$skins['cyan']        = array( 'primary-color' => '#00bcd4', 'secondary-color' => '#00a0b4', 'tertiary-color' => '#00cee8' );
		$skins['darkgolden']  = array( 'primary-color' => '#b48b3c', 'secondary-color' => '#a17b35', 'tertiary-color' => '#cca55b' );
		$skins['deeporange']  = array( 'primary-color' => '#ff5722', 'secondary-color' => '#db4211', 'tertiary-color' => '#ff774b' );
		$skins['deeppurple']  = array( 'primary-color' => '#673ab7', 'secondary-color' => '#532b99', 'tertiary-color' => '#8152d4' );
		$skins['green']       = array( 'primary-color' => '#60ae0d', 'secondary-color' => '#54990b', 'tertiary-color' => '#76ca1c' );
		$skins['lime']        = array( 'primary-color' => '#cddc39', 'secondary-color' => '#b1bf27', 'tertiary-color' => '#dfef45' );
		$skins['magenta']     = array( 'primary-color' => '#cb506d', 'secondary-color' => '#ae3753', 'tertiary-color' => '#eb738f' );
		$skins['orange']      = array( 'primary-color' => '#ff9800', 'secondary-color' => '#da8200', 'tertiary-color' => '#ffb343' );
		$skins['pink']        = array( 'primary-color' => '#fd6ca3', 'secondary-color' => '#e86496', 'tertiary-color' => '#ff90ba' );
		$skins['purple']      = array( 'primary-color' => '#9c27b0', 'secondary-color' => '#7c1b8c', 'tertiary-color' => '#c145d6' );
		$skins['red']         = array( 'primary-color' => '#da0000', 'secondary-color' => '#c50000', 'tertiary-color' => '#ff2828' );
		$skins['skyblue']     = array( 'primary-color' => '#0eb2e7', 'secondary-color' => '#0da2d4', 'tertiary-color' => '#24caff' );
		$skins['teal']        = array( 'primary-color' => '#009688', 'secondary-color' => '#007f73', 'tertiary-color' => '#00b4a3' );
		$skins['turquoise']   = array( 'primary-color' => '#32ccbd', 'secondary-color' => '#24b6a8', 'tertiary-color' => '#40e3d3' );
		$skins['wisteria']    = array( 'primary-color' => '#9b59b6', 'secondary-color' => '#7c4094', 'tertiary-color' => '#bc77d8' );
		$skins['yellow']      = array( 'primary-color' => '#ffe401', 'secondary-color' => '#ebd302', 'tertiary-color' => '#fff074' );

		return $skins[ $skin ];
	}
}?>