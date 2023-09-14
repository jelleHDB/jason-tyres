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
define( 'DB_NAME', 'jason' );

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
define( 'AUTH_KEY',         'Xhw`2vAE#_&+Z8`SJcm~6]EJ 1{82CnTCQC9&fh)rOX*_52a6?<7SB5J604<}[j_' );
define( 'SECURE_AUTH_KEY',  'HShn786g}oL!i;Xj~4&4oB=0rk/a2,w`=B;Y%/d(,VqjH)4h@lp?A.7x MPc=T48' );
define( 'LOGGED_IN_KEY',    '!FlOye(nPfA[aZub8u:p, w;-$oS24`wc*D:J2H%wC}4vW|;ThPU0?h28^-~4VOv' );
define( 'NONCE_KEY',        '(t;|=zB}Tq}+o5I/{y <&lQAkrTfeW<M!Ck9M_*YuWe]^2vNtyJ+Ksi)/,`is[qb' );
define( 'AUTH_SALT',        '52PMh^RtJ4):$C>WHnvjm}O&T(Ob7GBrmyYdRX#WlV&t(~nWcI#:}<kpC-V}?~o>' );
define( 'SECURE_AUTH_SALT', 'pM_N?,G@#mZ0/$h.GQjutwu<IH,B(d^j6gJa64JZ.tfP5rp]Ny|/Y} K(If&&N2Q' );
define( 'LOGGED_IN_SALT',   ';TZ{?`1x]T Hz?ctYGj;xTMHTd(Np>yo&!i|bZA{  CmakAT5zV-W8uQnT-Pk1CA' );
define( 'NONCE_SALT',       ']6 ]fuT|t*#;JM,QyS(N[t9sCS{B`v>0`)IZK*k5RCr,!X{^JWJL{Yd@;8#UAPZ.' );

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
