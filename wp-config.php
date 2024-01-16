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
define( 'DB_NAME', 'stubgroup' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'oBr%I2;6C,wJ})co?!EQLCvcb-7>^2Ci .?yL8<Mb6d7/-qd G>MKciZ ^&zbUbA' );
define( 'SECURE_AUTH_KEY',  ' o1pleJg)X~{cByr!_wzKxS&4ptJ-,u}dm`!,Z3{7hB$h23WZ(s!/^R#%p(Q#e^N' );
define( 'LOGGED_IN_KEY',    ':P)7mDGxp?E]255Ip}2;cuR$ld&M_a>6^b3[3l-bKQO$yrS;1b!fQ-H;(HWU!%}p' );
define( 'NONCE_KEY',        'evEg$)!&}L05P}F7~G=h}F+y:,CGmm^?9JJj;6]eo}K!e]}Z`M9(.bxMu.Z6)oTr' );
define( 'AUTH_SALT',        'pDb;$x&Y_9F~|]Vo]kSRcl7f~o YQeR(u;v(e{]7j;Ui7hZ Y3KAg9e]@%mSWnD7' );
define( 'SECURE_AUTH_SALT', '_=`0i `<7mDf#M(S3@YigLEW?^FrNHotf7fC5PV5AN|a<,X@F2{=:cT9/kZ2ifra' );
define( 'LOGGED_IN_SALT',   '5$u_H$0`B+Wq::w`jNsD4HA_qnG$3(2-kPaktvYVQmt{x+MeStG_h#^=HU[VUqfW' );
define( 'NONCE_SALT',       'A+&L(*D%#DXul=m9xt/l~l<d(z:EZ-~i85`p#v;N-N*&F,G3=(6hZIP;|&MlH_OY' );

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
