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
define('DB_NAME', 'wordpressplg');

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
define('AUTH_KEY',         '5q~p?ir|QyT7wu;h>IY1ZoU4/3<etvw~s38L~TDcA_$. oy|~#KC(Rp[).F.joe1');
define('SECURE_AUTH_KEY',  '`RThQH7x=G.U/{%&(z7SeH.zR]a0>>@_WCt(L2$bhqa!op=r=hrV*4u]/iW.`[i)');
define('LOGGED_IN_KEY',    'K I/)!y=Qd%0i4L1%QgXJ=5d&MqVX#fN+k9;tA;{g#}gy)RQVSt-+EQK~g4dxm~*');
define('NONCE_KEY',        '@0yofDi7Vaz ##xB.]2=n,My%Fa3`wncvG/DU8r (MmX|2CQ22A,dI!jm9|fkrCi');
define('AUTH_SALT',        'Na!K;EzNz&1DZ%$=:[Z-~Y%&wdWc4p,;l( &Pi4|dN.m.?luEI=?WcH5^ZB@sP?w');
define('SECURE_AUTH_SALT', 'CWv~i TU[}}tn.W)N]r_t.o$?y*k!LX[COn>WK(Libs<R$1hJ+[dy}qxK6a.d2yt');
define('LOGGED_IN_SALT',   '2@l @q`B6;6x)?SLR#vwTLYz6Ca(ewC+[]GTcIxi>u/w.[NqdiC9p/Zzv.6aG~h&');
define('NONCE_SALT',       'V+.Vx>ErQk2c>/AaKYN)`y2^zk?to~@i0!y6Ngkb*SR.,X#U-ICVfl>1bo(h-<M)');

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
