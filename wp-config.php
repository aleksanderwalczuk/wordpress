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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'alexander' );

/** MySQL database password */
define( 'DB_PASSWORD', ';;' );

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
define( 'AUTH_KEY',         '13Tu*)ap+>3yNVtdhrB#0$:+s+-TIDxN6zS9sadI{u@JdBl?^iu_C@>gNT&4ZKGM' );
define( 'SECURE_AUTH_KEY',  '^kJ$lAJv.7>(x!56+p=-5l1m;:N0BBxQo?>Yj#~Hiq&lL*OG8Ub~}j^bIoD^#=0>' );
define( 'LOGGED_IN_KEY',    'cn+4m;y{5ocu_Gr_>J|wsQ/9$6CX=L$CszF~!~k?P`zxSUB54G70zm70D=w-/G3T' );
define( 'NONCE_KEY',        'B/LH[x^]i(Yq#Xb+)] 5y*I.Rg ?N*n*3<IFL!Idxsi7okVPg-|Y|)?0z9^Y%MYy' );
define( 'AUTH_SALT',        's8dP)U#iLc+,}w%)?%*911=b_LAF87:=0rm|Ahvcb@( sxQ%q}d~*IYKLQ$2DW9k' );
define( 'SECURE_AUTH_SALT', 'FtV=HsY0k&oF/%c:z@a<r@-9,jDn_:l!;(reyU9vl1YpnuLm&g%`~xdI2(n*Vcy}' );
define( 'LOGGED_IN_SALT',   'YnBHi8{p1@UQ=:IB{<CRyljk<6r<&nlplA#Li0$tZ$S3T?`1@=$S7$t+m&Pno@p>' );
define( 'NONCE_SALT',       'F<GMZ.?+kM9&gv8maDyUbYye,!w/[MMlYDD1/FMxVzwX!E[^]fb0J%)Ub7*f](Kp' );

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
