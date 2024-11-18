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
define( 'DB_NAME', 'mg-palmproperties' );

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
define( 'AUTH_KEY',         'UCX :*pTt&E>i-dxJ$K6lM/yh7uQK(/he5~[Oai`C?34wEtgfr`84XOVSlA3&mh)' );
define( 'SECURE_AUTH_KEY',  'aR)mz7GJgaYsI6tJhK$cxt>z%2XF/q`SU6v{|sfSG,HA1O<sG*f/<HD![evcAS1d' );
define( 'LOGGED_IN_KEY',    'l|do*Pa6Ea~W3JndNX}=#p(@O(FT]AdW KAp(z~@.!8Q.(K0fSAT+Xt%b@}&RpWi' );
define( 'NONCE_KEY',        '*ev4X{i!jmG!r+WPF y}i;Y)t1J~nneBbcvC>chl&23AnU]MRQlw>[i_iJw+l[@N' );
define( 'AUTH_SALT',        'M2_-,*DAVmGMfuUWzP?!,sp4$KSx< &bzTqI/amgZ$G5qPu>@21C9-0zlwnTJKkb' );
define( 'SECURE_AUTH_SALT', '-|/Wo+LIqy|DyLB]0hFq|Hk>dd_m-:7=@d=K+R(F}Z.,W%2L&&Q9xL,r`bRH+lBv' );
define( 'LOGGED_IN_SALT',   'sj:ui2A4:(4>{%9;mFRk[d4Jk9;%xgNLiTUo-5WrQ#2FfVz.;T<a<4a HOb,zZXb' );
define( 'NONCE_SALT',       '6S,Sc#/Yo2`9O1e]`m,=8nbSq`bK0cM8!xXFM[tRB=F5XDSOTzLU B2_&D,S:&X@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mgpp_';

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
