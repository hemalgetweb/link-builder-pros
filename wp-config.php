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
define( 'DB_NAME', 'link_builder' );

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
define( 'AUTH_KEY',         'Nm=gVC2]FwYDPWSDd(]hAN9K%3J|KP0RRjKNp|N,AD(3ZRecxmk8UPmzD{VJF;{!' );
define( 'SECURE_AUTH_KEY',  'Deho$cy$Oxl>V($k8Y^E8acU_D6=|>8nizE,U(ri>N$nBXm0F=g`{lf!2PoY }3y' );
define( 'LOGGED_IN_KEY',    'sg5AF#DS^=dN[D>& h*?10G<:]+*!15XkP88MYl|KMhXF3f D5s)m=gH>[<+/(e|' );
define( 'NONCE_KEY',        'ar;wB$uaQJ;fz6+9XfCfGOBlq9*~<e3Io)lQxerT^PK9Az8S0$/.<eyZ+@o;f):d' );
define( 'AUTH_SALT',        '6.F[=h@)HSl!0.4`8 Q8HOeT|V0mzYPw /Rp7:Ni1IG?0H{f_Wufm8LJE+xHe3!.' );
define( 'SECURE_AUTH_SALT', 'm-`WIOmh QcKhk[[n]|fR<KcF31#H}.bGR[*x`ubW`:DLD>3+Rr`4n:bIF4gjp7Y' );
define( 'LOGGED_IN_SALT',   '93Q5s+=@(c~s&*Jo]dU<M$A>!a2#scpmgz,.e,;GAhF0N.{O6/BkMN|C9(Ae0-Mo' );
define( 'NONCE_SALT',       'MjGx!wNfu!EIJJdv|(<523bnv)cbh./Vk}B`$@$K#^T3mwTm*;:046H_C,RD2N/>' );

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
