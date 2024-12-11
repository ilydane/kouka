<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kouka' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f:2L_b[JPFnklKT+O&SNeFF+|qmiD; wMZ%hIISwgiDJ&4]UPD]h<~wf]SIT]tFK' );
define( 'SECURE_AUTH_KEY',  '9+ qu(FKHM0<=W+Ne%)S#SJ&CDpB[=ZqAP4Z%jiM}M^Ot%ZmaRXK8dX%EF8@QPHq' );
define( 'LOGGED_IN_KEY',    '$[R7<&2[Z9ERC?[| ^`V7Nm2sMM_ec>kC/nzty+e#z>H>@O-n?o}{0LqP^;Z]O,x' );
define( 'NONCE_KEY',        'gsomKWvKcJLnmDcw4IR@=NC-bbB!u6Km.+t]G3khwFaC~0X$<mO2(#` U>c6XgRy' );
define( 'AUTH_SALT',        '%yvybX!/L5xSFwf1V=T2?4gZ%_x@0>@q.L&;L6zpZV$Y(ASxP)!,e];GC/I* dwd' );
define( 'SECURE_AUTH_SALT', 'XTAv0x<v:o;QMZl|t8WlcIaBW+i_Q}%=WtY7&c7h8w%{%NaC=ls.i1|9)n(lxlX{' );
define( 'LOGGED_IN_SALT',   'AA{rGL=>k3OuBSoN6_oWHxPkwb _Yk8GkeO:H:@.{gaYPsIk4gc0-Iva`v6|3`Y?' );
define( 'NONCE_SALT',       '7s{maU&F4W`/b.]V!NeAr*IWxM.I-Fj;/oUjMu}c>NbF_s!#<S}?vQzs+:q6+fLG' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
