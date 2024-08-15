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
define( 'DB_NAME', 'azeem 02' );

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
define( 'AUTH_KEY',         'ZvXp`{N /5:;B+CC%&>X5*3_hf4NqMR6U<) pMj>[OWWgOrqDm6,G#FU;k40J8~S' );
define( 'SECURE_AUTH_KEY',  '3|KK3,V{2|A4kemp;8?u#fp&V<YMO sr~>zo%8j^IG6@D)VfK^C*5(]S7KQgezzU' );
define( 'LOGGED_IN_KEY',    'B(hr[f# HQE<w[}4%SA_LzXt&7#3/`Br(.DFp~:!Qsa)rBXnI6UH@YL9?Cav?)HX' );
define( 'NONCE_KEY',        'VWGyv&2<AIVIZnPSpXjIs#M23`s(]C ;*:cp@{A9lc]76!.V&Mw@ gME0,j:lZ8J' );
define( 'AUTH_SALT',        'YstfiN#Bc16v`m,}&Xav!=T*vNkbV{UfO}^@4#@u1 Y=Jl(hEVkpbl0w-DbRA9|h' );
define( 'SECURE_AUTH_SALT', '1R6dwwxj0!`%MII3o]l.^{3x,6!Dq3GOar8wbYga|,*8*wa]HefEx2=NK{IEVC ~' );
define( 'LOGGED_IN_SALT',   'DQB&wY;<EJj*&PJ2e)qZ}fv*Ib.xz@PB==|I`0X{Y|u&0`TeKd_Kk(OM$DF>f S?' );
define( 'NONCE_SALT',       'b+l2Zd!_(#m41o}KSERgC@z%7.2B_4_0vV[0x/Ak^24<oypW&S#}+Zzlzq-QWz1Y' );

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
