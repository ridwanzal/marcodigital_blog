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
define( 'DB_NAME', 'marcodigital_blog' );

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
define( 'AUTH_KEY',         'd@g[6$*U[f$(qj7Bq@bCJmxv>or9 a:5yKm5!YKr{A8O-%OKfNq68=IdU`0!1`_L' );
define( 'SECURE_AUTH_KEY',  'yftn,?7s,jLmH9#:kxxF)B,ASI.Q%j#O]Ha+`3!El3Ntam*U}J8t6yC?Qo~*._|F' );
define( 'LOGGED_IN_KEY',    'H.{hVacq~$j7Gykbo/_#;TffV:;AEdwm)zyr:D_98~UlXfaZ4,wcc<U[Uv~wzd15' );
define( 'NONCE_KEY',        'H1L`PEB#e,05hu-!7Ov@S#/3?ip(kxU>*HOAKgD@(-XvN,W`mWiFbYGrQYdK^bI-' );
define( 'AUTH_SALT',        '0Q,&BIk:Y;[CTPq+M~}Kh+Rv)jaB?^&~I[A1eaHL+Dl+5,<5,~M9mkny1+v2gsgA' );
define( 'SECURE_AUTH_SALT', ';el-InWW4 e.UYAm}~wcM=5@wRt4Cc&55BcAm~ke5N_/k|G*R4^Etv3/r}[Lf>Kk' );
define( 'LOGGED_IN_SALT',   '!z-xk/5E_3QWmkN-8I,}]m{a[X*WgSR%1`zVr`6erI2p5/$P&B35Te{DOVv~B/4L' );
define( 'NONCE_SALT',       'Cs+SX}~pbp0C!sT2u(r+ <Plk-Tgk}~WCUBaPxEg~bt!b>P,Q2Q8[^cR&=sQ1.I_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'md_';

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

