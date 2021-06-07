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
define( 'DB_NAME', 'tp' );

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
define( 'AUTH_KEY',         ';!-an( &ge_?$<9K_~h[JkX3>}HvDK5X./x6ZJw:}nD`}Q,)a0Uc$ikare4D{]J7' );
define( 'SECURE_AUTH_KEY',  '!TyY1~vF)|SJSz(Fala=gHgs$RQH{l-VzBDW4cA)hcXkrsbSLvr).b6]qq72Zb:u' );
define( 'LOGGED_IN_KEY',    'C]av,-r+EAkrP#9,pVUheJ;A8{PfLr|bxW9fanh7`xHz9zP&6:G9m;0]JGL/%*lk' );
define( 'NONCE_KEY',        'qgMx6CKYNU--cHseba0#7Knf,gq|q|$p8~%au*!&Ahul+8lwE?lL~Km4dfy|,%vU' );
define( 'AUTH_SALT',        'x[{NK,;:fCHEA)r8MTpx}/Ie0_luap9bg!csjREw~)Gb)lsg#(y<w;y^C(z7<(mw' );
define( 'SECURE_AUTH_SALT', 'B3t<%3d&%XP4M/h,sZ6}B9?98;S)3-a!V:UuAOB2eS!bI_*R.>U<[?1.w Di%in4' );
define( 'LOGGED_IN_SALT',   '*&j]!8wO@Ah)c{%_a^M~?@8,t(||y^5*~010d`zhO*Bo=?1c[I|BSyT1kuXOU780' );
define( 'NONCE_SALT',       'aeP}>M]vR7E/G87D?Ly<HV*e)f1tc1Sor5j/J.|UonVL)x~s}Z.j/ZFD,NpO&lqZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ys_';

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
