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
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'myuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WP123' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'nVX(#}3z3VyR/4]Y`9pF[G!eYes=7UO$[]TO }?Yg41t[d>&,B_(.!_PDJu&J}(;' );
define( 'SECURE_AUTH_KEY',  'Q$Zr6j&}Id[0i!y.&[j};i=UkT*ANW#^[v#fLJ@D!*4$CW!jc 3[B.THn_9k|O &' );
define( 'LOGGED_IN_KEY',    '@gYr5ymw?,vNd$9q5=oV=BF|8J=p_QTOpgfJjzb1-*ijEt:0s-4N]4{C56TQ071.' );
define( 'NONCE_KEY',        'tV#ahwhq~|-G[OJG[c5_H@+73<I3PA1NTDNFbvc/$|,$5GP.Mar::FbzQ;_0Ba<Q' );
define( 'AUTH_SALT',        'Vi,4CW3Hm#GX,x4pjsREUkpL[>KE&ai?q%J)?5&z-7Re:g$icH^Q)qZ-y,6z;V3q' );
define( 'SECURE_AUTH_SALT', 'x?hJ6gGbA_jKl({Z-~JahACZOxLZZ1d2]isnp<d|g}PA0p!_=(p930t74[W83FL`' );
define( 'LOGGED_IN_SALT',   '8S$eph,_|DL]o!iI?5*|emeU)Pw8),(7,7X+.NK!O.(i*F)|-g*^WcP}I`Qk)dbT' );
define( 'NONCE_SALT',       'y)e2P,CIrvgP1@?QbFDJ#G~GYt1r/Zb<ZQySu6b;j2B{%<3?N*QinfZa0)Tv@ >f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
