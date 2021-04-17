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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sphieretest_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H!l sb*+{GMV=Dqbu;(%`F+OV?LK/Ae ^=*ki?_{~$DafDiaI3?GiU!(H*zvEeaw' );
define( 'SECURE_AUTH_KEY',  '=W6=(Ku?*yKDz{Ozv{%$.GipFr90;SoA0k|fYn21@tB-D15Sro?b:0I^8x1k0)~0' );
define( 'LOGGED_IN_KEY',    'y;@sTPW#}$^D-mq24RyJpVhon}AvB-nQf=~`DDeb]xPa}:?}4/qX>3+sdCzG?ZOR' );
define( 'NONCE_KEY',        '*KXxIX`<DmI[oB+m~iV_ 2{bhEZ1pmqTI*b9arBnA=`9moeNQYyOt;4A70]m(2!`' );
define( 'AUTH_SALT',        'i^Y,MPic=2OwfcpTXJce*6}dths]jh5by&wXzfi X2-OKX(s[$wQr)V]9k*mrjs^' );
define( 'SECURE_AUTH_SALT', 'cK;)RIq.ZA:_]s>l_Tf[gA@q@0E|RO3?eqD8HpyQGt/!QmmC!/a7*xaZkkIBXHrE' );
define( 'LOGGED_IN_SALT',   'q8bTQ+mJ<?BW>]ks#VPjsbaj{fr_?0NP[%O2S5_jk-t}*G#%7h(?sNl>X=M@#b<g' );
define( 'NONCE_SALT',       'RR1-.$Ej!=V*;z9G92VR,W@jm`4{U?Q(}%`.Ma80UlH]*v]x8OCx_Na+_7t,Mqt_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
