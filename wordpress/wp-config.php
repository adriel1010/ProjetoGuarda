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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bancoguarda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'I|d|J7/]&EY5Wzl,Y^S.rJ+xYY?OVzI#SX-dw![@SxG6pa7,Js+_+E6vy0`qRYW.');
define('SECURE_AUTH_KEY',  '<I*N)Xc-ye?RVZXg]1r;Nx|MPe1R$%eRX5P_$i]e#6+n3uI^rtGK:OfqvQeqX2o-');
define('LOGGED_IN_KEY',    'P^VI$)F/ [ B^@s6;[&Hs|$5`)>tI,>oeg_+SY bCHa`A42-=~+,:|S5}7x{P[Jq');
define('NONCE_KEY',        'E!=~EfXm~=J!k:omT@f-c=s[K5m.D8MNgDjlz@N&PCX`Em8mmD<w/aB9LYQ[`3im');
define('AUTH_SALT',        '>Z/+ZF#c<tc|OLA1$|Fg|o!GS;)*+3Zjtaa%,aIx,u;:~^2$_t>RaWuV`b-j02k8');
define('SECURE_AUTH_SALT', 'A4?0B|PMf2Nw:T=.cmN#`MZ90?-2L2VJn%>y(G.|*fpLqst+).+1lG/--Qg=$6AE');
define('LOGGED_IN_SALT',   '[iUp.b)CJ5RZ7^qS;+tg=N+u1p?9PMj2*}e}0vYG~Jn+mzy+R+7Khb2<qr#blH-W');
define('NONCE_SALT',       'mluVIr09+BeT^</5(YB33&AR~-;1||4litbs$qIC{Dt5rI @M!$JlvTe+7co?~g|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
