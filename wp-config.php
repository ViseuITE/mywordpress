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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'bL>AQhVD);k:V~9?]G4oK_my?$0V57$]io-{n8:ZC}t/W4k/I_~ B:z1yZH1^ A#' );
define( 'SECURE_AUTH_KEY',  'RTf20Tx9{Nr7oa0`la7NDsX)J(9+jW,e9XR/OctA(/InE6=ir:#ug4.Oe,5}4(be' );
define( 'LOGGED_IN_KEY',    'Brjl1R:Vs}K8b&VW2b6@?__0Psa7;lzT;7W8oMJ;uEU<X_z*EN|X{|1;d/;a0;;b' );
define( 'NONCE_KEY',        'rg/vTWVIJH^3eoaA;ZXyPL_QHcunW=om=*_f8aZ,x&8p~}]6djih|}/_bhdNmSv4' );
define( 'AUTH_SALT',        '(|EKgs/,uS&h5,5_P#MGSZzF:.7:$fb.;ak]B{v`Di}qjn,iA:MhScFFRYN#X=6j' );
define( 'SECURE_AUTH_SALT', 'KAX$!FGrd%Ku$5av+%zH_lo7q+28#bHzIA2k-w9)Nr,PPEiIkh=4dC_g$Mq7Pve?' );
define( 'LOGGED_IN_SALT',   'De[Yh0AS]]11/[)a{QD>Dx}5H;9`xlKysS$ho|}.)z8_P{FmL|QBt5CPPG(i7:L>' );
define( 'NONCE_SALT',       '}pcD&q%q83Xx:Y[MvV>PQ.lt ~PiuLtD[.9>vokNAY>G+}=[z_af2ZPFn.p.h4x3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
