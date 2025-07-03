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
define( 'DB_NAME', 'db_kynguyenviet_blog' );

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
define( 'AUTH_KEY',         '>:Qh`wu,3H?IOX-Qe1|N -R2D8S>>.sj%J]lPs;1Gyo=BR^R7hR%D^6CRNL$dP`J' );
define( 'SECURE_AUTH_KEY',  'M}SU@*y1IZ&]8M~`aEC@~x7Yn6lrV:a?Tu-,/W[Oqt,KnIL9hX#WBT%(mB3M1mD|' );
define( 'LOGGED_IN_KEY',    '2-_x92JF;m_`zD@ oE@9/lzw!qaxtlSM$Sv2W?LRq~#F^orQ(X{c.H<[z2dgiw-d' );
define( 'NONCE_KEY',        'kZ-J6zi9v^K{[E#]36 .b}&:LoH_tx$CA8RCFePX),9+p^h7xs|W?olK$X1vGmXL' );
define( 'AUTH_SALT',        'fIWx=x3Ci(a]gd^&b_mU< );B>/s:xz-~b-Ex-eIvAb=)xD_g,!]}BYCuN!D:Kb-' );
define( 'SECURE_AUTH_SALT', 'B7+I#d,~?Ek0WVWWpIyEmPiJp;<e].oJh,r^ER(mAoWoq}rixO#8)J=;X(5T$~*i' );
define( 'LOGGED_IN_SALT',   '`T+7<_B*%-TT1f1B6R?@MAx3QA><#uos*VHM&R[O|1Cw6K#(@P.K3@!9ZbQx kA&' );
define( 'NONCE_SALT',       '2=Eb)i Z8)Zij^PLy(dz;SI,;)K:|NUyh9yl7Z=;wIV-9!kCG>ghH+:c@%Wn#(U]' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_POST_REVISIONS', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
