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
define( 'DB_NAME', 'erozgar6' );

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
define( 'AUTH_KEY',         'D/p%:aU*7Iy_/e--SCC+gt*XG`~N4RI~} .I%[o7HH(t/Rn<wg7m$w!1%,qPR qZ' );
define( 'SECURE_AUTH_KEY',  ')`FbjVaW%^BC|_)9Easec[`2ZN=$yDVj*}]G])^A59z|4uY8E$QKx^Svo=A;jeal' );
define( 'LOGGED_IN_KEY',    'C?.Kfo@3S/!C21;XNVHJ5WDyt=6WIX=~fe3 ^vmuC!0n(_h[@5Nt2UoenayPfQ D' );
define( 'NONCE_KEY',        'ag8s*H3xdsh:/k;aXg+C{X#V)A:786K`q1=}=_~>.kd#O3AxG(9e*BjHv2K,>&ZV' );
define( 'AUTH_SALT',        'YIDw@&hZRY~n9nb](h+2Tc=%`.J;`~NZjqkf`92-^SK};+CrFE;OUn?F@nZfs[qQ' );
define( 'SECURE_AUTH_SALT', '=]Pvq;=0Ez~W?&0<_^3?yu9zKHx({]m?-{jlY6JRYlIsKnT.0Z<ksVM6r#4:6+8`' );
define( 'LOGGED_IN_SALT',   'l#{#~5E.)Qdx(sf1#j=Ml|D_,[8{LV=+IoNN17V10~)IB:6J~HNZ;)0*}B];}v(q' );
define( 'NONCE_SALT',       'mi8h-?oF(SaEMv*-Eq*LDQ<$= Q_,MCEKb_AItu/ZTr=8Ysg:*Ns_;R2&qj)6Ge=' );

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
