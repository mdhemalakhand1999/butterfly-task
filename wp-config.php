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
define( 'DB_NAME', 'butterfly-task-1' );

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
define( 'AUTH_KEY',         '64G0k?rZ#bK^_tzcjp]v-@3: 26I&2i~_LT(faShPEPYZy$uI43d($:]H,@n:<Ch' );
define( 'SECURE_AUTH_KEY',  'ez<j]|pXx!.Dhr;9_F@n73H-]1K}.>18bI,p1[:0xPG/.!;(zbH2JB%M&rbY#(q`' );
define( 'LOGGED_IN_KEY',    'm^7n3F5/0t1vWgC|zZ690-OP-1-z/JJPEDQSJqPPc&l`?|YtZMsqdxsauYm(lz$,' );
define( 'NONCE_KEY',        'JIzY0ZlYE(:ha.4=@D~.%0-d9@A>zHS$L/LkZ)^`/NCWg[4hNv~ul$siRCC6tZxN' );
define( 'AUTH_SALT',        'y]>w(fgS,=Q}Y00!+X5_v5-B=xk@3SLX(f=^B|:s;q[|,&b:&v~5PV01-B0PR?w*' );
define( 'SECURE_AUTH_SALT', 'F7iDc-uiEA@;Y6+a< SvOoH.YDs4B:dSwI(izqTfrPU-<!D0!xP{S`+9Kjdf:21O' );
define( 'LOGGED_IN_SALT',   'sLRvI-Vz9z:dpXNnEO3CcI+}PYTcI+ziMy]pBhKRz9:6|^u`gUfgDgG^{od~3j>I' );
define( 'NONCE_SALT',       'MqQfy$Kr/`ZiEOcM(0qbrc{DCVr2tC.!Q%u@gsIa0g29v!PN?i;N)q)aSJ!aGDj[' );

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
