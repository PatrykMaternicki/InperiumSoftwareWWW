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
define('DB_NAME', 'wp_base');

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
define('AUTH_KEY',         '|<p`VJ{gu_+w*-.ShGnRw?HV2Zr.Wn7Bsf*E`]lMV|vwoa)QK*;1@@Nt`cBU89UQ');
define('SECURE_AUTH_KEY',  '!i+--erIx)TbUNJ`r||R|`lVu$+a[BY/zaY8S~v$+q!W.+OANOwdN|xQ,-DJc:!U');
define('LOGGED_IN_KEY',    's3vy&]}c&*4uH@a??|_5tU)ed.:*kY#E^940+2=7o,s|6u[|tzV8{bOK}Kw;2S+5');
define('NONCE_KEY',        '! @3&(ED:0M<=|SA$SGL`z-40x|NLfRcr3yy|&NfjPwcgbf2GvY&>|WqV-;^(H`:');
define('AUTH_SALT',        'ce+(9iF!9;[#sOdjSB-r1]|%M8n:FKo9-8$( O#}&=g{/q46rM:=acoS?Uge2C;w');
define('SECURE_AUTH_SALT', 'iaBjL2<CmrmPS+.48e;YZvfAa^I-gaW<.wDL|DST:SOFd5%*zuvRgK$(O(ru`7[z');
define('LOGGED_IN_SALT',   'A+B &RMLyCa*]fBAL0ek|$+1/,t[ExJ|U `L3j (@kcinIPr4ylMw:oQuCP2ha--');
define('NONCE_SALT',       ';Q#iN6`.z;A|VR*f%-M3,Z..H[D$g/*jxAxiCU}d}d@PX_)Y3@JPS)_bWM+Kc.-G');

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
