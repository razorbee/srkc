<?php
$config = auditing_kirki_config();

AUDITING_Kirki::add_section( 'dt_sociable_section', array(
	'title' => esc_html__( 'Site Sociable', 'auditing' ),
	'priority' => 190
) );

	# Delicious
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-delicious',
		'label'	   => esc_html__( 'Delicious', 'auditing' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'	
	));

	# Deviantart 
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-deviantart',
		'label'	   => esc_html__( 'Deviantart', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Digg 
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-digg',
		'label'	   => esc_html__( 'Digg', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Dribbble
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-dribbble',
		'label'	   => esc_html__( 'Dribbble', 'auditing' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Envelope
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-envelope',
		'label'	   => esc_html__( 'Envelope', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));			

	# Facebook
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-facebook',
		'label'	   => esc_html__( 'Facebook', 'auditing' ),
		'section'  => 'dt_sociable_section',
		'default'  => '#'
	));

	# Flickr
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-flickr',
		'label'    => esc_html__( 'Flickr', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Google Plus
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-google-plus',
		'label'	   => esc_html__( 'Google Plus', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# GTalk
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-gtalk',
		'label'	   => esc_html__( 'GTalk', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Instagram
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-instagram',
		'label'	   => esc_html__( 'Instagram', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Lastfm
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-lastfm',
		'label'	   => esc_html__( 'Lastfm', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Linkedin
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-linkedin',
		'label'    => esc_html__( 'Linkedin', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));


	# Pinterest
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-pinterest',
		'label'	   => esc_html__( 'Pinterest', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Reddit
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-reddit',
		'label'	   => esc_html__( 'Reddit', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# RSS
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-rss',
		'label'	   => esc_html__( 'RSS', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Skype
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-skype',
		'label'	   => esc_html__( 'Skype', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Stumbleupon 
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-stumbleupon',
		'label'	   => esc_html__( 'Stumbleupon', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));


	# Tumblr
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-tumblr',
		'label'	   => esc_html__( 'Tumblr', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Twitter 
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-twitter',
		'label'	   => esc_html__( 'Twitter', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Viadeo
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-viadeo',
		'label'	   => esc_html__( 'Viadeo', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Vimeo
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-vimeo',
		'label'	   => esc_html__( 'Vimeo', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Yahoo
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-yahoo',
		'label'	   => esc_html__( 'Yahoo', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));

	# Youtube
	AUDITING_Kirki::add_field( $config, array(
		'type'     => 'text',
		'settings' => 'social-youtube',
		'label'	   => esc_html__( 'Youtube', 'auditing' ),
		'section'  => 'dt_sociable_section',
	));