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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_affecomm' );

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
define( 'AUTH_KEY',         'tnKb#6GXs?1G|nWvgC[jMOO[_,me9W:N_0x#Pn!1xdKmb0Xfz Hba.C.ILK|+8f~' );
define( 'SECURE_AUTH_KEY',  'uB(vY8-shkMVI3381j>F$,v~vUCl0UVSQEN03*bB20Jd@1aL$x?/)WY2x_.gbQR?' );
define( 'LOGGED_IN_KEY',    ':9+ZL m^E[7k/Ay5AEsS*wa/T}9;Q3 5iWsN7lmPy[Lu#oYM;~{:RI:<NI$R=r>{' );
define( 'NONCE_KEY',        '@mFdKY?><~S4e!4>`-IMyl%Bv/|+cUi8YYKfp>FEU82Rqf~lBHWa8A+r%LDSGYHN' );
define( 'AUTH_SALT',        '@`CqM]Y^DrU=FGD=3DZqyNbvBI^mjWMitUF*E@YZ]u(BBBo5k|gdRNbL{OLTc!VG' );
define( 'SECURE_AUTH_SALT', 'Tq=>(N>C:L[SWCUDI:kz<iPk;tm4%f6@e7X,Axt4~1d[q$:5gaF[iF}<V8M^?i7j' );
define( 'LOGGED_IN_SALT',   'WcT*]r9(KTq`^Ay_Xj(YF6{6a:>ujH3C;sbKq!&m=&{qQ=9Sm%9 1y??!C(J7?rd' );
define( 'NONCE_SALT',       '!HNR 1^oTWNnfb:O8i~+(>=K>&K,[pfwZ$>yV?nla5j|91~}FO{eny_IC>/c{01}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
