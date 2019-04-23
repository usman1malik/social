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
define( 'DB_NAME', 'developer' );

/** MySQL database username */
define( 'DB_USER', 'developer' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'BEW={ez,7.deA`*L2)?9a/Lk|D =p2?}i)o|7A:W0ts1`wIQ>a3rR[;vU(p&=#Bq' );
define( 'SECURE_AUTH_KEY',  'p7rC%)XXLPrt}>3#x4xD|E?YeSLfy yI<NNlaM^.R2{odG4_W&)N]Ov7zqJo4TVD' );
define( 'LOGGED_IN_KEY',    'en{cV*Un}=SpOb#5sYN1H+11d0`qd#%P< OPmu&{02R4?^vzW$LK=.W]eG5[3Zcj' );
define( 'NONCE_KEY',        '<5qDHE^W&(:7fQuUs^2doK@tr>@<B4Y* O9w)!8|yZ6K*4a{+^l#[o92zsEcf3v:' );
define( 'AUTH_SALT',        'vTzRm( c2|~P*,#_*5;,e%1bIz?V,}/W:% UooF)M{)lKv]fq?iO<CbNDNHE$^/s' );
define( 'SECURE_AUTH_SALT', ';[kPpU!&,n)jD.>QfMh?#wl< ,wW=zH/9x+@d.6Cmz_&Qk4tRgp?a{#<{|_/Tt:c' );
define( 'LOGGED_IN_SALT',   'do)MbYSF1@d+1gS=/7>6sWvOBky4ivO4u~=+yeYPo~gO340QT!`48NEe(ff[H5S(' );
define( 'NONCE_SALT',       '%R]Dic)iMH9DX1P9m)Y(q;XA9Mb%5EUi~0)~BKTpyv#()]7zTX)R+f; |F!`?=^c' );

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
