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
define('DB_NAME', 'codeline_wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+A nhXk;8MVW&3f9}}Mo0p}:d6>=zQ~Y0UuVpbe4X(ewjMQUow+4xQW#>fTyK[E%');
define('SECURE_AUTH_KEY',  'qFRbh*/A2/6+(jZ:D`(r#vRhUkaxLN)YaY|MSDsQ;Ri,]R|_Tr0@fQ-48tHERlu.');
define('LOGGED_IN_KEY',    '(1uKeIG@!B:Hy#&Kl,]b|`-zs ,zP%sx/dk]rIo-ykHhb]_c6/`qLKX~7,v=*km}');
define('NONCE_KEY',        'lZm*w-p2sg/-=F0KB[@D5&zF]8S5rl]r*$bwHm)!tWUTu+c/T+b19pJj4Z^vRE7g');
define('AUTH_SALT',        'o5{3LZyeE3/6*P~*}>WP(T7K4SJQ&F!dc%sq~.7%xc0rFY!:.Kcl133RuIGy2 9r');
define('SECURE_AUTH_SALT', '=`CMU#)Iaj=o0b [7HU}qxC5ctlS?{88>P0}.+s^Qbgk5_S3@{wD&F`IBv/R|e-O');
define('LOGGED_IN_SALT',   'cbwt3wrmLlnLEYFSWrkaT*($H@%xg@z{WJH/a1k!>s1onIx~[dTTDh9LBLD,?!ko');
define('NONCE_SALT',       'h/jp[J^Y47)M9JE_to=u?Rw(OIm2-O5eS`v ^,gv{pFGrHym&@vf)L@-p8w1y:w;');

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
