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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'g+X(zb_4pDJz$S.tNr#hHqajfwb97bw[a]m_GIG~nN{bz Z-.oMhD$jJ4.zdP7-r' );
define( 'SECURE_AUTH_KEY',  'Fn5h>tGEq2Ji+HKZj6lsKuYJj+3wSY9Vez>gFU@Sr?pV&mIXJ}PdT1#96JYuEc_7' );
define( 'LOGGED_IN_KEY',    'jR_.k0=Yzp2~1X9~Ldsfm|= |T >5gXnR!qlg3Nn&(7ETDg?d-r!UW;M_ye]M4#g' );
define( 'NONCE_KEY',        'sJ./3IUr(??B&(}iA-H<eB34v+cqlC6mHaDR[@D^F0(}L0/1B1- _)gj`x#!N]L}' );
define( 'AUTH_SALT',        '^l7_4c|cm27n%TEaurXgGNn~aI}D&0s}sj6_paUp1g U`STNOh^V5NogADDj;`Au' );
define( 'SECURE_AUTH_SALT', '8&He,o]|`/qa:GA3v^>P]5NCB?xjSgy8/=A !`^|2oE1xLoeW4Xo1}: xW8Y4J8i' );
define( 'LOGGED_IN_SALT',   'f:]H#bj]Q 7~Kq!Z_3WoaDC*._A9oVnk-z<%<dMszvLi.sWdpZ_glj,?CDs*S7J?' );
define( 'NONCE_SALT',       ' .7dOsKhM5-78 ~vHxr$+~Kv*ty6`VE5lTp?Z{lcR{/)<j%ir`@ZD@v$TZt1MepC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
