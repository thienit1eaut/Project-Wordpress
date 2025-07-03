<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'db_toplistcafe_demo' );

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
define( 'AUTH_KEY',         '$Aj&@}yp3fA:hF_5|++ZG)ytcCZv?KWJ`=@Z%0%A*MXe_&2@%(`BTYd5wX3L0Pc>' );
define( 'SECURE_AUTH_KEY',  'nrC%l+:sRh<f02Ndx~T5G_gJQJ>&D9<(<0yR.k#!)]?&NDM5ss]K?x!>9zokq`#s' );
define( 'LOGGED_IN_KEY',    '<7TNQzh0cIJW;0Z{ ~yduhz|lD-sef.WPU:~ %2`{+ OMgKx(4*-&kviJ|4wON,+' );
define( 'NONCE_KEY',        'Xao oVd~+j=3 %f5QjviuTt8`d&|V}9IDV+PjXQL~g0d(N;x_o?2GIeyf`G;b8~K' );
define( 'AUTH_SALT',        'Qhsm:_tzE4N%428*|p5x2M){51zfGO0<gsEDZFB^pEIsJ*v&3Yt iDcRWJx}MLq9' );
define( 'SECURE_AUTH_SALT', ',,[^_X0}m&=R_w}^e?7sV}`}?!nqF%ckz!,!aEB6Yn(.@QogWUO45aR-SflzL(<$' );
define( 'LOGGED_IN_SALT',   '_8o@M$x-L7awE11.UtM/cBQJSmJ`C0bd~tL_V fe|bq%B=1]Hk4&s3b3K^1yo(h=' );
define( 'NONCE_SALT',       'Ms<V<2@-;OX((]&WQS.8eOd.YKJ26Pis.~!USGflvwoPj ]K:lndG&xQw?NNm;qy' );

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
