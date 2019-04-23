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
define( 'DB_NAME', 'firstdemo' );

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
define( 'AUTH_KEY',         ',yIMPIGu*u^[_$_ZyNUeoXfS,rQ|F).wAFU0jbNFNR?QG7q*#D7PLG8z&+lzwX_v' );
define( 'SECURE_AUTH_KEY',  '4_~d3=W~D*Of1tJxsInfKd;RLFzE,iBB#hG/!Q_~k9p!{PsX?eRFfDxQdt=L4$#G' );
define( 'LOGGED_IN_KEY',    'h@R3gii@)=4a!u]%cqQ8)cksA`b2&I4aw8T-]JJt8nEbr;xoywePBHqSWS=/i#X0' );
define( 'NONCE_KEY',        'ZR),l65!Xq9u~K?jST VKz(0q|4I(xP$&?1<uA?yy9Vl!%1!kL?b/msjLii,w2=>' );
define( 'AUTH_SALT',        '}%XA!xJ#-Esfy;CzSep#9Lj?jQ@Tv0m[;7cI?36V,E+Y/6bx02G%E)MkZe.7Rz8D' );
define( 'SECURE_AUTH_SALT', '1uK334Ml(A<`exNxH9uUQVKFNSDX{7v^p()|]0akF9%d>Qk*5888%7ng=7|Iy>>1' );
define( 'LOGGED_IN_SALT',   '}W_ R.G]PG);lm}CLm){WMi_D!y@q/ <AWg$&_@FRLB@1F|WLlww93@Mo/+jFqDR' );
define( 'NONCE_SALT',       '9U[hG)q(fX%4_NL:y4@M2P8z-m.Uh`Ue:}H7q?)LL{_TX;jokOs=iTnm[IJx)s9r' );

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
