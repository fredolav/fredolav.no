<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line


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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/5/t/tribeofthinkers/www/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('DB_NAME', 'tribeofthinker01');

/** MySQL database username */
define('DB_USER', 'tribeofthinker01');

/** MySQL database password */
define('DB_PASSWORD', 'marlake-0Dagpengar-risgjerde-tyristuv');

/** MySQL hostname */
define('DB_HOST', 'tribeofthinker01.mysql.domeneshop.no');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v%L}@tk>TN2;pAG<$QW]&P?jqcdO?0PUm?:(OHzMPR#e_cAJGrjy`<lP&f]388H$r');
define('SECURE_AUTH_KEY',  'T<3AY!7&wyE!qtq;9ruERNq55n8RReU^!xAX7a2B!m`fp1v3e>4@p=7I>wqR,!uYp');
define('LOGGED_IN_KEY',    '>(EaX4>`bj?e3<O>m]H!d<Y/5kGm<>{z+<Vr:cn)L<*i(Ku6X<AE.<G-p%g>`L1o3');
define('NONCE_KEY',        'QI_AP9W-7+jS2R[--HLR5v&SQ[/[obg+8|Jyfs|<7|s<8HYY)E]IsJ)L9|fev$<f4');
define('AUTH_SALT',        'L,?8`]Z5KS+/yK_`K!BB]WhGD-;3=X3bgfWjJv-juCY7&bq3UzUkpJQNRbG(Zuye;');
define('SECURE_AUTH_SALT', '+JYrm<,VP8:V=H%];01PzVlkg3Np6D!brsjccrw<]U0}#v[)7en5zvZv2*)^2V=Gk');
define('LOGGED_IN_SALT',   'LTuPt|O&P;9q=;>Wfiq-LF==S{-PFF}{Cq(,9J&OGp6j#>mxWK^P&bFx.B;/Z*Z>h');
define('NONCE_SALT',       'YDq9orD!:_zq^R^J{p|G__f[}+c=iqgD^#(]5y?x3.c%a7WKX2a{&E%>5-^)K:ius');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dsvvy_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
