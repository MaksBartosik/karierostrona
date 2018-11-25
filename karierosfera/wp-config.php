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
define('DB_NAME', 'maksbartosik_karierosfera');

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
define('AUTH_KEY',         'noK_zNH`;CRz^},}u!OPNv[HGOio)AWFVCo5ydc`=3ZK]sWbkAO>/!-gJ/~)Hs@,');
define('SECURE_AUTH_KEY',  '>PkI~Z-V9t,^)%;Kv*Hv5.SB:huX}|kj=5-]hzM.+WeMc&?,P72+O{FT1!NKRle+');
define('LOGGED_IN_KEY',    'W6Co3aXMMH7# .r1kLp.jj|Hmjp)c_~B`buxTZ%A-Qvo#b~J$%~tC+CNK<D;@87C');
define('NONCE_KEY',        '= }=].Mk?YB2o-p9iU(!aM?+xs=Wd;G^y_gPPpIXJI,gR})KF~-p8`CTnKrC;N-|');
define('AUTH_SALT',        'k,#XI7LYo~-4r+<11[Z*xdlbfll%4MFdw>BoT/[ u:lc:2@wX=V[KI}mS2]|q+E;');
define('SECURE_AUTH_SALT', '|)$4*u>%!9_o5h/3+ ;B{,}hZp8J4{ysMUvj!P,.qXh+-`.}MeIiJ<3QJhLx;M9$');
define('LOGGED_IN_SALT',   'e0CO6]#YI2.J!!*# a]]#-&XD._*bu}LGC%.siU,cQBgGCcnv+!ob%,RtLK-*+2L');
define('NONCE_SALT',       'e+JiS)2I1?+u|k-:_%Q]^X!jz~;)h5b(0TK}nyi&_5tME;7>O(EtY)]#CA-eC*Cg');

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
define('WPLANG','pl_PL');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
