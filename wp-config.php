<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_fanatic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'm1k3m1k3' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ft6W-?2b{T,UeSk376D%Oe1>gN$Ic/~fj6LKHF:T28Ak5WC)*2cF6U&_A?r1piYa' );
define( 'SECURE_AUTH_KEY',  '/)TsYXIO?^WySn:Zbtyw1?}B:Tk)2h52aUuaU(CBV8o9s!p;8e2g?u{]wlOnd]Ze' );
define( 'LOGGED_IN_KEY',    '9(^k3]mBoU8!v+)RJgz{24*=g`os.xzz1E:D4%rJ,9:OaKZng//Tb_;-tUI#i`c?' );
define( 'NONCE_KEY',        '=Lsv<9?L^5/3*;0FO6aA+Z<6_W|88ix!=<TfBJN/fZX8M<@T_e]64S772DMyWZk7' );
define( 'AUTH_SALT',        'm$-zoRYq{gZKUn8e]~j[D*Zf7]NfA)yW:&2h1`k*Xj/]XCE&:,&$!ex66AI.)bs(' );
define( 'SECURE_AUTH_SALT', '`j[aD<P4a/anB?%/^7Ft)J%$pQFIJasQ_$[RtABE4wMjP`e1v3)fNx0M1ShsNz{]' );
define( 'LOGGED_IN_SALT',   '+H{EH[B34ychIg@(*..n.Z/^yP(GQ.s0JCC:N6H8Xo<*mE#n%Nm67>|,5/8INzjV' );
define( 'NONCE_SALT',       '>,{8bs-).%*0di}c]*J{BLEP1yhv3H{bM [!C`p%Hf_ANgl6C2-Rex5g!i2-?eD#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
