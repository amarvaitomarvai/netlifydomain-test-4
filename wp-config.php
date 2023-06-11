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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netlifydomain-test-4' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Ax1Xpd9 _XV`lR1#gD3o8?j-yh(h>#pj@NS *4Vk^~1wbgMi!wwqtC#E76;/W}3U' );
define( 'SECURE_AUTH_KEY',  '/m!g(*poRD{XTsJa.(CR-8eXD6& >R,u*EAPoQKv#lhd6hP[~hklO0]H9TlKf3im' );
define( 'LOGGED_IN_KEY',    'rv`- 1gRUT}%;-y%*%QjAXda2I8A|BW#7$!fIr#1?Cb/Q#`(@;@?,M5pBr(|ndaK' );
define( 'NONCE_KEY',        'r@yE8[_Wy`3g)ijbXjqu,+9Bu<s+N1yNacEr*jt??L>wjbMClLW#GX0 {,f0Gpk~' );
define( 'AUTH_SALT',        'OZ*Jq[e+R%l:4z4Sc,@9pJmmPJ<w2WZK.m.POp*l)8ki;LeE.Pv_:$pD nR5vAB>' );
define( 'SECURE_AUTH_SALT', 'soT2w!b^8v?E$OEOr=R]63?oB,FL]DMA7y%/v!:8D`MZ{[CDUM7?c/Y0xq9-iHHc' );
define( 'LOGGED_IN_SALT',   'wi@6pB`d;7seXx9J,A:(ySdWe+_D0ehC&|$!`YZIL~P2a@71`tBn{sZTq^{$*DdU' );
define( 'NONCE_SALT',       '@A*bN9lVL@ZU?_c3%6pKju, H><a/FrrE.oj3PMx`8_Du J[Ls$kc!+JeRVG2@kt' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
