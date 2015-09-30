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
define('DB_NAME', 'serido');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'eIKG+b9$GfK)]saSSp6g)qfgk0cOleJ<|9luse~~->N)A.]7Vzdi.#9xvm`LwR/o');
define('SECURE_AUTH_KEY',  'A+`0<mNxA]OS>6UVu oO|AUtn3R3kKZ$.FS741t]W3kr+POHwtOWE/J@R7(_g*B>');
define('LOGGED_IN_KEY',    'L]H49] O)}{8:GZzD4NQM^`zJ1%1INO*f6rdx<?YzkOhv]X4J#k)P5P$Kfd=J5z>');
define('NONCE_KEY',        'UR0IJ) <vz )z>v7iR(ziG(R1X6Hs+q`*?2srs}Qog5f1@-z`kdoI{3+WQYRZ}*X');
define('AUTH_SALT',        '(IN4oett@NVxH*q@`S8g~g8~3q(t|-5Q0TgpKB>W5GnGXRK#+AoJbE/A%k*6BT/4');
define('SECURE_AUTH_SALT', '7pb`nzL+7elq!ZR>/qmLKW?:]3 nwFLL!#,kL}2!Ug,w]2;^rYLX/6*{Z|.5-:r<');
define('LOGGED_IN_SALT',   'C<emI6-Ws|@xC6rXO7fgdwA05Y7hBWP4qrjl?}>loTr/t[-b&[l8v&C{Z]rD*`+b');
define('NONCE_SALT',       ',98by~vIpuEH0N^J4HcS9u~$d2y!! )z~N)P3B>zysc$ZG?U(uWIltQy&Si+jQGe');

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
