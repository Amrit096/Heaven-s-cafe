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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heavenscafe' );

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
define( 'AUTH_KEY',         '[VU0H0cb@j6ckTnd^l72:$g_`N:*qmx~Ow&QQU(J{K1`84q/n#Q8G:HAM]`6^pUh' );
define( 'SECURE_AUTH_KEY',  'H:Vsxq$zNR<D01X-upqw2JcA&x`i}D|iB_9ecsV?-#w!b1@9U%Yi@gYL(z~!_U.y' );
define( 'LOGGED_IN_KEY',    '39FJpi>$U %WSTZ|!wtq3W^2l2!4|L*4jLP5#;5:Ij[1<]YzQwHN{w*`Ki]YkpN&' );
define( 'NONCE_KEY',        '-hX!t4^-t^?FI3+Pde%aDsxdIpS)QRuuAiq9p7x3t@ s<exBqf8F-nD};Y3EU>k{' );
define( 'AUTH_SALT',        'y~Na!zRA$ 2hQrMp6~Hoh~HUq[mNtfQ}j!pj=OSe1Rx+6*`>kG}5u HYF>ghx=fo' );
define( 'SECURE_AUTH_SALT', 'r=y^(oUm+C}~L:1Nx8we4T>_6p!p&fgs{(G]g54JK-OpU#s{QGndKLBN8HitFx=y' );
define( 'LOGGED_IN_SALT',   'et0}FT.8&*CQ=0-k(<+)vh<R(wGf3QSb>bFSIOXj;e#F*iwUMYM{0*YzG_&LwRve' );
define( 'NONCE_SALT',       'ygIaKG&}6t3c[]gQ7+s:^dW&d^+.ikH3OaU{k%hg+No:^^3sn!W&9E{kMg|E1[n(' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
