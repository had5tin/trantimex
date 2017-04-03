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
define('DB_NAME', 'trantimex');

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
define('AUTH_KEY',         '}>cLFZyMCkN2:wm[OEHZ(h07?,j[dXHL-1yz],l%=o:3Vud7i5^eV#>uQ4x+->{2');
define('SECURE_AUTH_KEY',  'F|+m;})lac>BnGKy,O`7Qz+yr<5S%Q.n|sb@.gF4i!sy-T@l$#C NjMe.=vwFv0=');
define('LOGGED_IN_KEY',    '2/4gBN7RWnOG`T,YeB!%AW!Xyv_#<l?zn.s;b1r1m-XW}:p:OjH#AWLYBoP6w9s3');
define('NONCE_KEY',        'wj(->6m-!<;,YL{4s) 8fU#eDCYU<E#Dd(b@GZqwnc>;|A&gqAo.aTKw_UD_h)O3');
define('AUTH_SALT',        'Wh<9@!J9-=A91_)oYUBarK.!ssVaud+GYaieY&J9Fy>~WJX^)C]S;`[*DM>rLA[K');
define('SECURE_AUTH_SALT', 'P,2*/$<~AIT)TsvG!7M96hPUY0>Cf-lUI}KsB41,{MUa87g>TL[Bj&qtl@Q(-R1e');
define('LOGGED_IN_SALT',   '2=o{M;6v!2#px*QHHes4x/.x`]x~vn>.)QSIyv_#(6EX=#C<_p>wzMnt[qfo+7v@');
define('NONCE_SALT',       'XH@lo&Y3 e1F. ]Yh[2x##YGK9!cW@|LwTu2vE?FqKI$u,L9pb6AOXFra mt)IAL');

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
