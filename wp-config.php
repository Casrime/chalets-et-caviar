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
define( 'DB_NAME', 'chaletsetcaviar' );

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
define( 'AUTH_KEY',         ',`,hKU+GR<(Fl/(qa&s}sUQ.ZW!Z%,F=8B9.b=s.;aj3I5()M*Eg@!mE17^Qkk)m' );
define( 'SECURE_AUTH_KEY',  'D4^L (|T:stNr$f]kZoj=$rwQ?b.ffP$$OjGgJ{@*(|Sfey#W$k:!}i[k{sCPUEz' );
define( 'LOGGED_IN_KEY',    'g-}w%9C^Ax^hWuk]u5t{k {&?Qg>}X,bm{Pt^MiH~9-%$+1{lwiw_g 82?EU|ucy' );
define( 'NONCE_KEY',        'T-=(;:|F$cE[hV1gs%eYX.hOo;0KY_|}U@#4Ghfg(qaI?4?3a}j]~TleeI(Zwou+' );
define( 'AUTH_SALT',        ' s#DB1++_`l4]AM@0?mQ3y)fz[xz0bX^9mX?/K]YMH)@`xM$uS>hv53nky<vN|II' );
define( 'SECURE_AUTH_SALT', 'p#EAQIMTQnP8i*sH)ak+e%2*PzOI%DW.ABEQl33d24b|xsooQ>o;H,.3[YA1/CUH' );
define( 'LOGGED_IN_SALT',   '>n(hpEG7/f0hztG -bQroqPQq#-6_)%^>hFO<K7$P_Jo&yNL3|Vm[FC5]+gi{50 ' );
define( 'NONCE_SALT',       '^O8h^E#n^4>Sn9:KUL+ljFv.!W6t0q#X.x!Yye`&98gKGfsd:w#Kq+5Q;}Vsi:5+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cec_';

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
