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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'roct' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'yMM4mcH!~2?Jc<;?c^?GwO(U>#t&YaT}Za?N?9|4/H ~h{0=,E*oUw,$PI-zVWN#' );
define( 'SECURE_AUTH_KEY',  'v6LsC]wv8sa^)3_3edmWkT*ZynHVvZ7G%.-X@PN=AAKq}~{E(CLk0$7sB`@#]x_G' );
define( 'LOGGED_IN_KEY',    ';V2b]hy>,mYT*qsK80S8kJ|hC07<397<V.;M)Z>gmC>{[!vEzwz8I{vo{<)+Gj$?' );
define( 'NONCE_KEY',        '/b]pUUyC<dY44(;vnRiStTw7K{2+L+tL,4ndQ:.<{O,xw<@+Bt[ew7wLT?&MJ]LR' );
define( 'AUTH_SALT',        'b_iW_7b40}Y@@gST4Z!j@YKCISX%%~r7C#HvXD5s3o0Uq8inIDFl??[a>9b:&36(' );
define( 'SECURE_AUTH_SALT', 'ov[10.H$l&]My_@IqOC@xfBM073-0lgG8btIzXd1b9R>A+@-oji+OO ZvhWO,Led' );
define( 'LOGGED_IN_SALT',   ' %}c*h@b|K<!2W0T&26-Jt9a5(=)XkNHqeMv2.qYfVblug/BlnV6F7f`;R}>c8L^' );
define( 'NONCE_SALT',       'Hz$DaI}JXgHW<Dwg.NRe5i7:3Qj<6%Meyi,2)A,1*7GJ.)UzGTv|XlO9G6An?*Ul' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'roct_';

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
