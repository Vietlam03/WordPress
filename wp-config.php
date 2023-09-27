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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '},y?FcEThkr#fkyQmrFLhM-Bm*Wa&8/X8&jW*N*AHfmk(5XM~:`cV%i`Q<|f:PAR' );
define( 'SECURE_AUTH_KEY',  'gxXH~sC=?b(GeV6FEexA6Es[(:lkRLKR:(.6^L_P@%MrYdW~M*A!=a6GJCp~-pJI' );
define( 'LOGGED_IN_KEY',    'sIr|_[r4g4W]lYrZSqwZi.)hzSH[;{u9`I-j8HV`Yd3Sk&+*o,{kE(.;x sCEc@[' );
define( 'NONCE_KEY',        '90v?<,b,nQAwWOtpCL|kXqc/ePw,Am$*iUNf3Ezn=6y`Wyw.OvwZAQ}+<~0]Z|9Z' );
define( 'AUTH_SALT',        '+X;cSZlv@qTaH_ IHZt7qkIY0ddO@3dal-rPE XZvHO-H,k+c)M;@,8mpV-x7tkq' );
define( 'SECURE_AUTH_SALT', 'DKgZKF:^4_=3rM/uuv`])MeA(Pld+F<0X0|)K8#|c>*dm3fU{~~1_yN^|KatTl#R' );
define( 'LOGGED_IN_SALT',   ';-sIry^JPx!SwL:|O#H^_VA}}vf<UK?+subd,xO``NVq/u JjQQ%.;^cAXVuCj)I' );
define( 'NONCE_SALT',       'ur8>l#jDe?q<;o%<&W!}vJO[{-]53UotPruU !{-w~Nrd0C:ABO5BZQK}*QI+xZt' );

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
