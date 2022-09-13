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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'VOU%1r7sZMekB:XRe`,3i3Edd;.&;_F+#kkOFw*7iQ<~M+l^wbS2~<o,W;~Tr90c' );
define( 'SECURE_AUTH_KEY',  'qPIP)IaS)DZgUSQ/,qH]XB@Vr%Vqt{dX2$x#H{|uAi)IdaC tKNx5+.O+%g!L9hs' );
define( 'LOGGED_IN_KEY',    '08OU;mRZW;.jb&z7vfHQvaw4x5dTkp@IdcQSqSaF%7[V6]u2BJ%FIRkV(| n7-9|' );
define( 'NONCE_KEY',        'i(Lsuepgi0w:t!J {a`~ZPZv1?,|ic~a`R}aYo)T:DijAm`6.8~ ^`BUBZpX28e?' );
define( 'AUTH_SALT',        '<6D6{Ob#3sf}=<&K1Cr4XBmZDe3hCE*<~tw<t5h?yEN[%WYYI?=Be,jI3r9H]Tsf' );
define( 'SECURE_AUTH_SALT', '_0R3fKh2U [+a^/45U=j,/W!Ie!f/6S]}kJFz6/,i->CHH,E||8^sI;b_qQ/I-9B' );
define( 'LOGGED_IN_SALT',   '2/!Z{xLX|r[ofUC$K;;GoE:Ad7,#$W$.qA8+MM@M3fY~3Eg{EwP0vP2[tEH;x*su' );
define( 'NONCE_SALT',       '}?>egv_SruRcrMJr-_y$0P0|Px[*0.>N>f<<2|RVlN<BU>=l[d}yTM#B7`k1)kX?' );

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
