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
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'shop' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'MK6N~D%G]UDQ<>yg5kYa:/O}v>U.wp*Kw%^NYH!$fDvEG6}5]oqE*D4GWAysMtn}' );
define( 'SECURE_AUTH_KEY',  '`V3U&z|0vI@11YXA?3IgA_1sJZx.OO}U?=5[S%OeItP5taj?g7OGQ%O[f6.kYYPb' );
define( 'LOGGED_IN_KEY',    ' ~W<(%HUN2Es`&r$q=:Yc3(*<UvCo+CF>]BxUyD2}ug)W{yw;z:7uftPq}:J)BPn' );
define( 'NONCE_KEY',        '*kE@0dciAK.i.V(3kl(4r-c5QKx3p:S[bzxwR)3pe`Ui3OK][kVGqnGUZ0>^8[tp' );
define( 'AUTH_SALT',        '$g5*#a!zKjdhW[kjcf;Wa p 5%z7NI>RWss_g)j<3EfB.u[$p!mE#&wB3D5i<}$=' );
define( 'SECURE_AUTH_SALT', '(/40#]:=h+XX(}0A,}2t,kQ(u26,j3<;#r[%C vDJX^DZ(b<rNc5~CP$[T@ 7]5{' );
define( 'LOGGED_IN_SALT',   '`-aaa-u(IaKwy^G6U~<L+u.GPEn^R=[r9{00at`^KtoWib|K(o/6/C/aRn[J,n/M' );
define( 'NONCE_SALT',       ' ./Gr0+*^c8g}KQ(C%*#BF%JUalIjG m4}(nOEMvu.sod`[Fz*1/.Tn2wZ<cS)Je' );

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
