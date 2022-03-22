<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_hook_top' ) ) {
function auditing_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- auditing_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
			echo do_shortcode( stripslashes($hook) );
		echo '<!-- auditing_hook_top -->';
	endif;	
}
}
add_action( 'auditing_hook_top', 'auditing_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_hook_content_before' ) ) {
function auditing_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- auditing_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
			echo do_shortcode( stripslashes($hook) );
		echo '<!-- auditing_hook_content_before -->';
	endif;
}
}
add_action( 'auditing_hook_content_before', 'auditing_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_hook_content_after' ) ) {
function auditing_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- auditing_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
			echo do_shortcode( stripslashes($hook) );
		echo '<!-- auditing_hook_content_after -->';
	endif;
}
}
add_action( 'auditing_hook_content_after', 'auditing_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
if ( ! function_exists( 'auditing_hook_bottom' ) ) {
function auditing_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- auditing_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
			echo do_shortcode( stripslashes($hook) );
		echo '<!-- auditing_hook_bottom -->';
	endif;
}
}
add_action( 'auditing_hook_bottom', 'auditing_hook_bottom' );?>