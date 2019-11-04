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
define( 'DB_NAME', 'kapsus' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b614aac6b6e28dd7029e7518b0ef89832789fffa1fb318c5' );

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
define( 'AUTH_KEY',         'K.CYCmA-Vr*X+boGZa,tYR`137t~Ax(MWaCXv;!vub(YIL3HaHdKm2hEMJN41[Au' );
define( 'SECURE_AUTH_KEY',  'e}%-V;,h&/jS<}t0vMILfpJ1EA|+&2CIFQhVb,V>,Bx%,/0M!zUx(u-&dtI5sanV' );
define( 'LOGGED_IN_KEY',    'q;s?b7!U~(D#uWm>{.hl^X!o|T6$/75y`s9#Z zKy:hVlZ2lJ`%[7ASza7:&{RU=' );
define( 'NONCE_KEY',        '1:s|>_ 3kmJcjWNXe_LNP3!nk}zrx(hhAyPH#*#sT76aM[r85@HhCCy9%1CMx;m%' );
define( 'AUTH_SALT',        ']BRD3X.)%+^ABn&]n+yv5ijzs3Fw9fz|FV*lAofL=1D?~aVCMz^D0X8,Wtv{VX-M' );
define( 'SECURE_AUTH_SALT', 'G1_<-SmTr@#!V,=8`{WM&#g6b>6{7]OBvX0 tujx+<{6S0W1f(wfSkRuK.R?$GBQ' );
define( 'LOGGED_IN_SALT',   '_LYE+,g*JtC dGhga,z ->n6~MD}D|e.S_!N#CVk90+rf#MIaZ).d43PJNxu#<9=' );
define( 'NONCE_SALT',       '+ZBiS]<b{@i#NevG#KgiKotd<>o~g>G@:EB;A+VHE}*`2)_.WAj&zra#]Bfp3ZB(' );

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
