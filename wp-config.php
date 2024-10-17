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
define( 'DB_NAME', 'wp_mysite7' );

/** Database username */
define( 'DB_USER', 'wp_admin' );

/** Database password */
define( 'DB_PASSWORD', 'wp_admin' );

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
define( 'AUTH_KEY',         'Y$+lfo}:B1E&9}?=)v2qi7~J}~ h(hd<(]99IKizrnl5DY`DU5S@Zc%|%QVY^Wh%' );
define( 'SECURE_AUTH_KEY',  'sTq5s/*_m6@Hy}pgI:xRlf]ccTCtJ!7%Yv,r{m`!d-r_d;k?6MuKJQtSpD<[{mtH' );
define( 'LOGGED_IN_KEY',    '<|1J 8qck!g-yw-6Z0J>-W@H.Ioy`#!guhPa9?Akt}[t7W=T4!x&f62w tgtmMwz' );
define( 'NONCE_KEY',        '/>@Te]+ BLH7@[-u&gK.-Z:U|;>Kf78cU,Eu;Dbv$m&L#yD/%0,S1cC3[y4Cqwh9' );
define( 'AUTH_SALT',        'ZKx+Ja|Lbn.8KwlgP%U,L&E2q-ip}o}J?DlTKXz-X)l%aXXL2g`,B2PmJO(h#5t<' );
define( 'SECURE_AUTH_SALT', 'P/L3OW1~l4:(gP``diw,4yFz:}j/sH/i~hhgt=1S .,4)Hly5KOv,%0KRr0dhgoD' );
define( 'LOGGED_IN_SALT',   '!kp4+vD78h)VXyYn:*1D(|Wad4NBeyHUM.d(?U7j#6TggAQrLdmMD>b;.YL3RF!H' );
define( 'NONCE_SALT',       ' MD%e%Y?>Fq]_ /gU1k)]@$?t|*qA0~(IC~r:|@.C~m+PDQH3:oDI>w&zU8CwmS7' );

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
