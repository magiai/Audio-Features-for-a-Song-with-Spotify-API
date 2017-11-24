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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

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
define('AUTH_KEY',         '.kDVmZP0h,^1W`Ga}qw<.dnoTxZoNCSR0je{ee3ZaQLV 1dfzg+L?pF~BPs7v.X~');
define('SECURE_AUTH_KEY',  'Ilu%h8$,B(]~k4Bv)dXO H37hOQGbQ=Rd79RBOz_.^8~ygDZj=Ca,*vQMH)Qr+J&');
define('LOGGED_IN_KEY',    ';pe}~-)<Rm>4HlXbZrivoTnTm-K_~u  RI&8(~fnUl9ey:LZ%)n1;w($1t+NLYv#');
define('NONCE_KEY',        'B3M|Qhp:eWe,R1.(@{ZUNC=W5[X3,!wX.?<}]9/Rm~_Tq^--`+c0S=;5*~wt^[F~');
define('AUTH_SALT',        'j3VUxcqw?EUWh<$=D4_& @$5H7<oS;I*@OyR2uXW<g&/8H*xqtY/p{b4&pW`(VFp');
define('SECURE_AUTH_SALT', '|7<>{wU/{miJ9OK_N_coy!7os)_R,|^aTsD.#]!U1}NL`Ej+9e>wX1CXGtO5e=[~');
define('LOGGED_IN_SALT',   'LrrZ^?B2^o$szcaB3n5cJ`jXBk8/fw{huL&N7m=<y%Zp^TWe Qi6IMJ)&h<s8FDi');
define('NONCE_SALT',       '[*P?zsbI9<YC?6[d}EwYA;F0Rt`25vEfGqRiEJ<YvS$j~T;$O`t@f+V6%>-gr&x3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'spoti';

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
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

