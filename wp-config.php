<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'rayan' );

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
define( 'AUTH_KEY',         '`nAd}tasWXVr`e!2q&Zi`R4EI3k~E6@+.[hNd3~HC@.)%N9xHB>G/?:CTlD{5zWV' );
define( 'SECURE_AUTH_KEY',  '@{)lUgklv0i|$mYz^+:qG4_GVeld*u>^(0Dwl~~%t/Cw]Gi,4{QSfZ{n)GLtb`;5' );
define( 'LOGGED_IN_KEY',    '(R|[ZCS:3]XzgdeW6Ob.RMN+5L3xY@anseZ[jF|PmU5#BlDhh ZV[|Z[/k-ukNfV' );
define( 'NONCE_KEY',        '30T|J]k4P~J1HOzc%N-p[=-cF]9}V^,Z%9HY:62b[(])dFDEp&]3(TmEE/jeThU}' );
define( 'AUTH_SALT',        '~*[+oT@Nj9Hl(-Zb7FFTs^uqAw(7s&6=_39v`xt@rmD&/O`yx]Y27m,U-XAsE=Q.' );
define( 'SECURE_AUTH_SALT', '7D[,NpJHpDGGZ_z)E%}J.JyK0JYGoy*wa)a:{-K-4@/Th4;@Tyg%BZm7(En$SVTn' );
define( 'LOGGED_IN_SALT',   'u@@^Q?s{Bbt;.,jnPvBQxO1h-K9fB.Qrv]]0[QyGYeMU_X@jY|YG.>ZAHt&!Zdj2' );
define( 'NONCE_SALT',       'bZ7HiU)e_uV*EK2kvJ,7S,fT;HTuUixRJ~SlL@`p*(b{bsQA1_HGCk+OjM1s|{V8' );

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
