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
define( 'DB_NAME', 'word3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vQ7eXP~{3-,eIBGq1Uzy}(Na4!.G=tbjoVgu_2n@3xMhZPVuMsOLxNz*Feuq-0ke' );
define( 'SECURE_AUTH_KEY',  'rk=Exf8!N^bE7HqRDgk0rn^et+j>K#9qKCg[Dw-vS1/slxOb_SEwXm(^WKs%+*w^' );
define( 'LOGGED_IN_KEY',    '6 7i+KKvaA<3yJ%|oA-_q=$ui=Cb(JQ^y%w;}*[pwhfS:k?GHfd|q>bCl!+f:3iH' );
define( 'NONCE_KEY',        '2W(+r4WV^S[X2e!t)O4k&Jy[#7FJ#*k[%L(Z7@~@.9j|@rgpIZE<wOu cpB![av7' );
define( 'AUTH_SALT',        'hwVmxg$&h!Ta#>{1cz%9fc98 P}/o;+[mYGCozMPtxhQ:Yq)T8nNm}&7NCk8Pc72' );
define( 'SECURE_AUTH_SALT', 'wh@K/<,Q GJTeT!=bh<)Z:C/&,ApyQp>I?Stp*I&Hz7=#{yT;,=5NRa.ne?Vmxw)' );
define( 'LOGGED_IN_SALT',   'jl{03l$}1Hfi/7E9%A:Zs.n:(zNt25k[{wt$1mJok.#UVVQHA8jh*,1B;Ze+J5K?' );
define( 'NONCE_SALT',       '.9-yo^<)2|~bf}cX:vT>*Ii|QUFDaNYBw.3*Z0D#DVMSZz^rItmyiE}xw|Z^XC_5' );

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
