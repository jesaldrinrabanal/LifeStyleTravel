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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lifestyletravel_db' );

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
define( 'AUTH_KEY',         'gfWk!D;>@l{A aWJTTMV@L~R8TK-Dwe;U5(<P}E0(qh}bcxiQilb:C5CI@h[.WlO' );
define( 'SECURE_AUTH_KEY',  'Q?vY6K8wMm89#Co{+59+UDak<T6v yGMiDPam+ |.<]LH:uh$pfXpa3uUA>W|&yN' );
define( 'LOGGED_IN_KEY',    'qh#]R[:>*[&C;_E5cmbJ1Dc@C&8+|)9T.(~X2(@S~43i>HY!OAb~=bf4}r6K,8?7' );
define( 'NONCE_KEY',        'u#w,2Qio9VO9;?p>-hSk]3TS&K:;o~?DQhf.15~kV.$GItoMn-84-^ LhM4z8@ii' );
define( 'AUTH_SALT',        '3z/=@I2Vah[oNecepS.0a2*jF>MMCGM)*t3B/Q,y-M3<sXc#kKNO2~,8L76NC4Mu' );
define( 'SECURE_AUTH_SALT', 'lL-VRnq9ywcc{NQ]N/4A16](^[;@D;yaeBpo+{FP)#LaY]KQJadu26wtyA?sI)}E' );
define( 'LOGGED_IN_SALT',   'h~=)c}`|~z.D[fb{Y12xC:l,Mk&(1oF=8QY*3K(UTo!l&#n2OEM7N9PQvoRE|z<,' );
define( 'NONCE_SALT',       '{evRI9+cl7 *}jm=hW9=#cuNp,vW7::N*UZB*U9)6t_+&=o2|:UO^@o%xUOcH^c&' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
