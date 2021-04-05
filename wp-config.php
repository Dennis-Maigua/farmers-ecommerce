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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'farmers_db' );

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
define( 'AUTH_KEY',         'X|!I4wK7wwK(r)e~wG5Z:hk`YI2=D`?Smu+o6R~$~6%S2YaBhC0t4y[RkDg@bd7m' );
define( 'SECURE_AUTH_KEY',  'v{LbA]Z)!DBrDH54=c.q!X@!UaQg*VJ&A`x9n33dB<vsTehdYZ7^}V/b4Va7_!TE' );
define( 'LOGGED_IN_KEY',    '4n8@`F9h6:GFG~%?t-V&40+*P[,AyR[TZdv.aNtF/7Qax/G{D$i1e5f1Z`i5RlNY' );
define( 'NONCE_KEY',        '>&i@pj}StSr+xT?G2f(wx_]7OB]GO$s)92SQ4eTy+@=oy$Ou|.>/@^5FeTq~s<&!' );
define( 'AUTH_SALT',        'LlE4Rm_R-i&V]>GtHC(mu&p]Kq,*YoPu&|32ipmqxx7l).Lt&:4?X |DQ``d!*B ' );
define( 'SECURE_AUTH_SALT', 'F<]bWnH~JWMm(wy<+![g:~VPi$AGj {;uViD]KU)t[X+1@ /AE^M0h%}G-$5D{5q' );
define( 'LOGGED_IN_SALT',   'w?<*1wXGAHem]>qI;#D$SH/}dx6^D#uvHI_GZfEvRIq)IkS()dpT;7WsW$=cGa@m' );
define( 'NONCE_SALT',       'Yq,.i *zQ}XkhFG-<iYt*jKTT:joqT;vF#~]%Z[bVW+QEtl`pd7esfo86~mV[,))' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
