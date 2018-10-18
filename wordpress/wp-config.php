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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wiki2');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Reto@wiki2.com');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F-?K2kBr9[6>ZTJ}+CAhh7urjX:e/!um}YlM?{8Pf5H@(6.J~_IR%q5mbF2D6>80');
define('SECURE_AUTH_KEY',  'A_5.B5PK+q-;>S8Y&MR+aGI`fk1i$%X[+~|BR<^l2Sr7w^~B$kS8*mcU;4OIJ+cd');
define('LOGGED_IN_KEY',    'EU=j1?KK4OxmSw1*)AE<js;][4x>>mSaH?p4U.YYYWeQq;CA[+Gcgd#h;#f59.gO');
define('NONCE_KEY',        'urNa}IV`%^f/9yKm^8p01?/3PX3Q1]<vBb/Qi^Q]f=3LJgypDxRCO7^)>(LDK)Ib');
define('AUTH_SALT',        'd2uCW8``|JMpaqGY!m4wR7+9j@?*.]q3G#z)$pkXHkMNc-09viY;![E,i`Ei$*e1');
define('SECURE_AUTH_SALT', '04vKAxjAf45HMGM!2rf.>i-.k8P@tUgC$*`jU28afv:MpTXPrW^Oq_R$BxZ0Xn^f');
define('LOGGED_IN_SALT',   'HaDR*a$TJg}$S3j?.#DlQ}4Fv}X>gSL3OT55zHG=|q=9Dz1hD&GPGlfL++y)!mWq');
define('NONCE_SALT',       '1L|x/NJK0Z88`ydy|m}~]tGV6mO!(/p;2<|FnV6W-yo,=}[cNBIl/cd&EN![^<i(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
