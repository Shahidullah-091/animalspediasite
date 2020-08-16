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
define( 'DB_NAME', 'animalspedia' );

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
define( 'AUTH_KEY',         'q^_O40&Ku>/>xeI#K=cM{X[OfAe+.Adowc|~iwLdWaSA#~o{H4PXmu4(WyXE[n|(' );
define( 'SECURE_AUTH_KEY',  '71Tz5H&?$N4Z2z3A+I2=W iMk*%#?e>-hl/:ROo+!eGeHnl^^y=5;[X}4a5;=XuO' );
define( 'LOGGED_IN_KEY',    '1|mT=Sqwlw-)Xct&-xE)VQO9Wb5eBAZI$/UJvJ@g= APl7P!=Lz#{v(8p~yl{xUO' );
define( 'NONCE_KEY',        '$!|*Z,;pejY2z%,.6zp8Wyt({IBOZ;{`}zJ%wtW,Dee3v/UjRxrNfENHR4YK2hSP' );
define( 'AUTH_SALT',        '=/9X;!oY8^qegJ#0&C.|.NGO1:/W`g8BBD`G{I90FGBSd1JKv%idNOVJ7!Vk*%tc' );
define( 'SECURE_AUTH_SALT', '.jLh egYSBQ^U~(Y;Ci+wzImUP_/k|@`-yWxBN|tU?9>utqa.hj6za:5=0=mm8i`' );
define( 'LOGGED_IN_SALT',   '5:.wcSdxYCb.X0,1>l@w3_ 4/vXA<kquK.q_S]=[Utg8{/$%97kLmhezQqv[t?y<' );
define( 'NONCE_SALT',       'IaMp6axAZWNO7t6j*r~q(Y$!|`?b?*oIoL;mx^qmO*69C{{!$D&[}djjw[WWC.3&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pedia_';

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
