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
define('DB_NAME', 'kirriephoto');

/** MySQL database username */
define('DB_USER', 'b0d4548f05bb62');

/** MySQL database password */
define('DB_PASSWORD', '5b9997c2');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-azure-west-d.cloudapp.net');

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
define('AUTH_KEY',         'w-qVhZArmJV$T.X2@-p6bvbBq8G^-T({*kW|[;>>-*Aa9E&ShwDR zVdsb-_=x.^');
define('SECURE_AUTH_KEY',  '-w-D6mVZV~F+OXtG.I!MCX8Gb&oQF5a-p|?7I;./DtyS.*bhqDcjhP-K6PAfV1fC');
define('LOGGED_IN_KEY',    'm3|>3r.RgSP>sk4(j7i?2u;)p$W4iyj5;QQ(-xP9jlK;&2qZBv1-X%-Z$43(~Ysn');
define('NONCE_KEY',        '<W9`;_^M)<~QVEX-MHA6O$W {m%Hm*z{`ikq+/M7]iMY%mr1juFu!y0#Yz}MV$Q]');
define('AUTH_SALT',        'aST@y-z7{[&&S~17QYb+7IlSPi{D+t|fZHm2iKJU7_u,~/vrrVQR?,Fo7>&:tA?e');
define('SECURE_AUTH_SALT', 'p2!#P0]n$-LdUpaA6)67QJ>GXV.%~%tuk~z2_Q.;[-Z0- og|+Tx&;|Ig/r(9Pp_');
define('LOGGED_IN_SALT',   ':/|#Y|Uf]1>*]@@x/?}[e-I+}z-P(?wz;Nvn2&-|s ~[8P6Gin[p6Qu)Agy3$gFJ');
define('NONCE_SALT',       'oUjy|L+u&%)z |-Z.ef@l:|2~*=|d(,6 AGjOM_SwF-@^9,_{V`6HSi!*k<!a|MT');

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
