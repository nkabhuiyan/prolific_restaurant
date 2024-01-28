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
define( 'DB_NAME', 'resturent' );

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
define( 'AUTH_KEY',         '3E9?RRQkWi9prW/2Q=O?b!}[O0,sONaR/Sa*ycFHG,#bu3rbDjK&?Gsjl0H04nme' );
define( 'SECURE_AUTH_KEY',  '+<3DhO0W3.e?lbv63=Gyu.(N%3xzt9H9x$W.|%:<E7>|X0BIG0]zE{64;6*sIt1i' );
define( 'LOGGED_IN_KEY',    'kG]T96A>,0_j=5%V(9`;Tk7Gl,bO3Xx!.f5;;en*n;-Z-boWiqj#ZeH04z ?Y;,+' );
define( 'NONCE_KEY',        'je[g|J5Nyu9C1_bmR5j.0:L<iQrYWF9Su-`)OuNWDbP!0E5Z&SjIEq<!c-uM^@}Q' );
define( 'AUTH_SALT',        'c9$gQ?Q[Z{Ey2=6gLxWUiOg5_389}kPE_AQyR&GC|<]H2t`WX!$rZa/{+=.ir/*e' );
define( 'SECURE_AUTH_SALT', 'D$&5c)rT:2P:Sx:T#MTj}@hvLKJ5&6Qf>dT`7oVvp||)LlpX+S]CwT,j /TF }(]' );
define( 'LOGGED_IN_SALT',   '(KZ6M+x_Y-to1Cd![o6OgVq8nL<I?J)4:/NH(X$dZ#CU6gy>6EN;0bKtov1M<!]_' );
define( 'NONCE_SALT',       '>cc&stXfk:&O[9zd~{=-I.ed81G*YZ|T;MiNdQ4yU}7FT*Sr0*l-!o:r6pZU`NIO' );

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
