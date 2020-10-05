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
define( 'DB_NAME', 'wordpressDB' );

/** MySQL database username */
define( 'DB_USER', 'Hindavi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hindavipass' );

/** MySQL hostname */
define( 'DB_HOST', 'hindavi-wordpress.c5x2avs19yem.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '`ZmU0(wq*}ohE|A(nC&7YZ wgu3Au_#+K_^k @d-*~#MFd4]~[k%L)gk8&VQ@%!;' );
define( 'SECURE_AUTH_KEY',  '0))PKqUyN<;_}P[6!9-4JnO^uS^uk?_k<W_C=I1oJ0:6 bHHH3Y!mGikfiNI=t+J' );
define( 'LOGGED_IN_KEY',    'X!aC^2s+`VBJ~9TMYaiXnf&!Z**l]l=xyq?DCw@*0?iFZtCG.z xtK}G:1~8Xl B' );
define( 'NONCE_KEY',        '+m9owYzG@V6:i.7~hXVYMzHK({9;diRuI^>i|!]hvDB)~c5ns_D265J~5DC/]ps>' );
define( 'AUTH_SALT',        '5Scsoy,sCeF?S*~u?qA,4,VA.I/bMp#OFl }K[Z6y=Br6m1-3,L}X6u<s_iKK(mi' );
define( 'SECURE_AUTH_SALT', 'I5uk{42bDr6)89`lS$+hU6G5R eg!qZAu?iuiO5%W+tr+!ZjI[!Yaaa^ClB*lk_;' );
define( 'LOGGED_IN_SALT',   '3no&cG4Zcx%pIS5D6*7gxd l^Gv0<u%$P{~Z|kv+^sa}b2S$Ni_c>Lg>xG4ER Md' );
define( 'NONCE_SALT',       '$lgkv>_JpHqNKg$T*m:)s/#qo4uIsz/xlJOrB_c8n3,s hN!-vT{b}| &l[nj,lj' );

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
