<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wytobaccDBsske8');

/** MySQL database username */
define('DB_USER', 'wytobaccDBsske8');

/** MySQL database password */
define('DB_PASSWORD', 'nTNEcWQKF9');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '**{.A2]#D6TeWH9WPmi*xaTq+u].tq#*6;A>F7UMnfQIfrj^ycUvn,$>yr>,B3QJ');
define('SECURE_AUTH_KEY',  'ks}|92OaSpiSKhaxp#~iaxp].92_+2]H9WPG9WOld-ZSph~w:#ph~-1]H9]_91OGd');
define('LOGGED_IN_KEY',    'n^70zr>!}JC},B4RJgYOGdWtl_-ld-s[_91-t]_91OH1]G9WOldVOkd-s[!sk!-1[');
define('NONCE_KEY',        '7*A2PHeXHAXPme+uXPmyq<*qi*y;<E6rj^z0>F7>,B3QJgYB4RJgYvoYRng@v},$u');
define('AUTH_SALT',        'v^jvn,@4}^z0>F7UNhZwp#~5:~w:|C5SK:#D5SKhaKCZSph~wog@w:8C4|0[G8VNR');
define('SECURE_AUTH_SALT', 'YC8VhZJCZRog@wZRoh~w1[-s[!81OG80NFcVskUNYvo|@gZwo[!80!z0[F8VNWtl_');
define('LOGGED_IN_SALT',   '-_h~w:[G90[G8VNkdNFcVskvZRoh@w:|wo|@8:NG+t]_;LD;#D5SLiaD6TLiaxteW');
define('NONCE_SALT',       'x*92_+2]HSLfXun,$3{$u{<E7UM>F7UMjcMEbUrj^mf$u{.A2.*6;LEbT6MEbTq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
