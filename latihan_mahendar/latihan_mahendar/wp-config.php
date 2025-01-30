<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'latihan_wp' );

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
define( 'AUTH_KEY',         '@%pOsI$*v~f;28RR6f/fi92)NBL>5@?0J/cscn)6A[2:c16E*e7/f*Ih3)>W5ix=' );
define( 'SECURE_AUTH_KEY',  'jXRGqFI$Gn$Q=H1F>m~_~ eZLRHSbvyZQ-4&ZA6ynt*0,>[|/9$YcR5QhX:phaQ*' );
define( 'LOGGED_IN_KEY',    ':SdCwou|&RFLYY[M{H=c 4+]QU&;@VeLKwV!;u#{BAvyblD)`ibab<N2.J)RNfMN' );
define( 'NONCE_KEY',        'b?P<Big6ITBP8+h5AVx%D3udKGF_#tnH^p:b}u0%!.#]qz~g)R2p.n(wB6,;1~ui' );
define( 'AUTH_SALT',        '1/:MEmGa?0Mj$Hp7iY6<^sO@r|s+)#.|!>x(3^X:=IhTAAo=SkK8oOGOq=LP{-9{' );
define( 'SECURE_AUTH_SALT', 'c;R5pA$cxR#8x;?WafmnU?#LeiDKsB//{HS4A*Nim~^E~MId_^jxS!bJI32XNn|{' );
define( 'LOGGED_IN_SALT',   '?K>fG1s(>CaMd;fq~%UI6zsK(<~kX{6M.d0)q4B-^L;W)Q*AcjlPaGc$8CpGL-Qr' );
define( 'NONCE_SALT',       '(=256wS}0GTYm&$=O|ay|DchiQt[8/+!AWbSn[,R@]rY*EcLx{=[miTDn:9oc7Ap' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
