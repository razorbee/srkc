<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'WP_HOME', 'http://localhost:8888/srkc' );
define( 'WP_SITEURL', 'http://localhost:8888/srkc/' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'srkc' );

/** MySQL database username */
define( 'DB_USER', 'wolfe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wolfe@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oHxC|i,rzWoQ$w;kL5`:J[)@Ah]y_~p3t=IQ<WH`j)f)fG`wYXl[$.0d*sAV+.lt' );
define( 'SECURE_AUTH_KEY',  'hzu{((IM<f7/G+2lXgX(0!MD3Yl&hi@KG94]l9t*n]}^Z!4|NkjX>MOwLvmU)C9}' );
define( 'LOGGED_IN_KEY',    'i7[9DP<+0d,!+{Zt~)G3u9Wa3Bn2):zs%Q/e]=qW6fDL$6j*~F-^0h1nd7: NLl}' );
define( 'NONCE_KEY',        ';)8bWb3CRM%a|kfm]3}Eo=#OTeF.7^<J(+/4,XVw;PGC;zH)27swWp8,kloYhI_q' );
define( 'AUTH_SALT',        'Q+eNl6Ns`U,`f`scr2Aj!$|+|;_1ko!2kR3xH.KVec<BA9a2X/HmlWKEelUaT6R5' );
define( 'SECURE_AUTH_SALT', '7M&yR~iSe>4P=yC!J[i35QXk/v?)gv|5gKpscy&pp;]c1K-7agMvy:X%SwacQ4A:' );
define( 'LOGGED_IN_SALT',   'O4M=.jTfP#8c`I~`;{wkmE;?et}|-V=Ya:gT]W<#/0SqlC#Smx>3iYvS`hCK>jG)' );
define( 'NONCE_SALT',       'it1sK/%aiT?Zn9O:NdG@@o0([G7&bX~J$xXIH~+WT8!qS [2$pg*$/Y+1CR!X.}!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct'); 



