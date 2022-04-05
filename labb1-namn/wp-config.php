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
define( 'DB_NAME', 'labb1-namn' );

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
define( 'AUTH_KEY',         '.?Z2<AvlCnNwW!~i{E@/l>@i[W9_r*v:vbW6po<M.&.l!i[C?6Wk!{?gQkE4FivG' );
define( 'SECURE_AUTH_KEY',  '~YYb)f|Iu_y0P/l;OYoWOR#q.3A=Gr7v$!J(]:94EC,{7/?OTGK )2F^8UF4GWZG' );
define( 'LOGGED_IN_KEY',    'QHH:O+^vl)LUidL,.E Kcm6ao57P0,U6a^@0iw+=v#hAj?gW#0_:H_O?c@b.igo7' );
define( 'NONCE_KEY',        'hGe*^j@JHPXEv0kQfsl6bNs/e@8GglZ}t<$#C90Oz91Q%9X]$YzE1/m.)Xj`g_^T' );
define( 'AUTH_SALT',        'ld<;`Tcp67Sq!0~tIuBtr.G<R:r)KAiAes]XY4@?NRKkKlkaUj}(C(F3vf|)_>1A' );
define( 'SECURE_AUTH_SALT', 'rfSjKKL$%^[uod8+d7&[cgfhG/O8QP$JzJbi|M(>/Y4KHR(<go,zCr^75o1]$eEi' );
define( 'LOGGED_IN_SALT',   'Ul(C|VA_?7hWE]R }Hz#i_L#s4=>n50LcX@!g5?*< 1<kD[j4MeAGQ8sqO{212a[' );
define( 'NONCE_SALT',       '% ?;{Y:}}]lZ ^w sGz; (EoP6 G!4A%-QDD7Ve,m9TqtQ^!4V=D>64I>GE pfB1' );

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
