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
define( 'DB_NAME', 'federation-des-locataires--web-chibis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K;TP5Y[@_U]cuNw8d8,)}A`j>VeMvAX`r@FXUT`67ko7do4F8M|J4pM]-Cnx2Ggb' );
define( 'SECURE_AUTH_KEY',  'W@t1qjC(T;qkq8T0sa+shPvy#,-7w5d-. 3qL@<$`mIibEHvT4^{/,CS4SCd4FlH' );
define( 'LOGGED_IN_KEY',    'CK5eGmY7>^apsA`a=ZUpCFoj<1GII A.4En}&8L{G`+iDS)OY@JupGuoc,H1$v^1' );
define( 'NONCE_KEY',        '3yw^9anOIC8c;j7Y+ufCCXT(|F18BG@l$8Ro1:y|o+Ir$RUB?pxeC1`D:UFdc[L6' );
define( 'AUTH_SALT',        'v}wJ4|0|@8-=}n:)Y4n<c5S+&>_=pp?e 9Gi)h$L>2ktk6br<qKj-I=+&D=OC&i/' );
define( 'SECURE_AUTH_SALT', 'sEMZKvMy9TDQNEBZrcQ(a4a!8N_iX~tqVC/]O+_;+aN#(5YDBwu9=vFy>jRMyA&E' );
define( 'LOGGED_IN_SALT',   '5Awq]`ATC(7}_Zf@YtzI+dXnL]/eDgN7#>D5v(._K;;FvO%Kh4u74)o872dU$Dy/' );
define( 'NONCE_SALT',       'h59lGtL_;r%7XnqN(/!GX[uSxnpm7pGbZN%CLd5iyuE*$^D Q.hEbP>iHPBcPg4F' );

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
