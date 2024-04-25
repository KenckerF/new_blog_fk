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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'v:.bqHXoh+iEkn5hM_G8f&%v))!}X@dJhW4*lbdWD]Or`q_vJiTVwA::KuX:^$4R' );
define( 'SECURE_AUTH_KEY',   '-EsVmQp<m]2@9<n_~;;4*[-)6g/~+c_?!<lduOj@6![e7!2#r6^yL*qri}:MgTR&' );
define( 'LOGGED_IN_KEY',     '~!qx0bE)Kp!:=98$z$X ]qf2IvPhP)N2GfIB2H?ua ME%@sBkSRjqy!k/S8uo(lg' );
define( 'NONCE_KEY',         'CA>-$IdOs)X2S)`AXf_.mE?X:C?4Wp{nC,t[6^Ts8G3#=`Qn 28GFVFek4Vfqks;' );
define( 'AUTH_SALT',         '?KW yFD[kcAB[lk9CZH[w!@1sWy ~&qs RN4WH))lR!Bt?K1AbYhx7r?wo`Zv1px' );
define( 'SECURE_AUTH_SALT',  '(!3,u):]8%H;OMIuDJ*ovlF+oG7I*lwhp8_Bf0o<Bz1Wx@s3{bVfG4<qD@^s@ 2+' );
define( 'LOGGED_IN_SALT',    'mUxYw2!{x3/jiD)[hr+!FYyUIZ=y|#PU{uVu%iD?J;~1HO}F_+b nflrj~|kohg-' );
define( 'NONCE_SALT',        'o1LBzCeFNdwLpB^G0MLVwP_$havihe*qx}B{D80YjNAaGHQjI~w0[9r@UJfxQ;@W' );
define( 'WP_CACHE_KEY_SALT', 'WkY4D-N}&SCCY)^Ooa=&0n%Ev}3U~HC#wmjRe4KRdqL`(_[gY0zb4y7CpvxmSOAN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
