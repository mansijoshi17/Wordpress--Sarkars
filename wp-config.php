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
define( 'DB_NAME', 'laurasteininteriors2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thinkpad@123' );

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
define( 'AUTH_KEY',         '-|AL3joc3[<+T/w8sVHygm%dx.ytxj9]#wOr(z=QXy:^Lt&8}[lPb9CVCxqN>=A$' );
define( 'SECURE_AUTH_KEY',  '+J,(W+Oc*8i^kXwAlOp66E|8-%d*0fs)a@F{onZL.u3U@{bZem|d?:o4W(,lPa9o' );
define( 'LOGGED_IN_KEY',    'rUN zC}@Ys)<UvdW<az,>pHzMEYd&p(-gs4|]@&ctJ5VTHe{Z$e$uO.G.jQ=g3jP' );
define( 'NONCE_KEY',        ';>k.S;{yZ F=)c2 xB&+c!]~SbzMQ<:m6ol[U65nU&e-lix9RbXK|`9G*P1IOo@Q' );
define( 'AUTH_SALT',        ';/kefgN[dLm,`7s,Yn~6TO;?ddRESs_+0r[NIzuML7iF}f#SQASE7BN 2ZA6ZZ1 ' );
define( 'SECURE_AUTH_SALT', '6=HhSj0X$lWP`]NT5,G>Lp`r%n[GU$y#*VK&PX2;BnojZJQsjx&P:u-DgpZuE0^Q' );
define( 'LOGGED_IN_SALT',   'ct,e}1GVY|:QJo:=(-p6VM<gdrEpa5m@Io[?`O@c0a4U|7)udA3rum>F7cxi7TaA' );
define( 'NONCE_SALT',       'f5UQH2waG:+B/`yy^a_|PrC8WAVc<|hoeIT2am/_0+,?VwlnBmddOrPhB4;>7G!y' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
