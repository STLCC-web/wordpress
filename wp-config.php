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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '?AXH1S@!ott(G(fyl+kdYuLF_)Mh}RY7|o=!6|+l1I;!.51TZwc0>eV/J%bb!mZs');
define('SECURE_AUTH_KEY',  'A$+X-Co^=2aDJ0=u`]$v+bwwaKhzA,>I9I&%O1B+hG93|zs<T&>]>5}/E02EJ,L!');
define('LOGGED_IN_KEY',    'w7a3,(+=o%3vaach?70|a.C]`Y;Gk]i-zrp=ix|+=<^i_$ZrGygdt;>u3QPz))O{');
define('NONCE_KEY',        '.u 9G(Y+bNX`%v<J#asl,e/y5&X?6gU3*9OPpvghC&4$CGT3My{/:Ks>>u@?cMim');
define('AUTH_SALT',        '8>Z+Maq&`b1[MTt;vmDfaw.:I|!b/*H.8!8+=l,Jr.nd/ >0PqsUkyjo%-hw*+++');
define('SECURE_AUTH_SALT', '>+1xHo UPm*.Q8Hz+XmUVnk8&i-`&dvKX.!saA?U2qo16W!v+LQ8UH]<lrCHBQ})');
define('LOGGED_IN_SALT',   ')OHN^J<rkZ1ghO-0N$SDhL})F.StYSrO0G&-4<H9rHd7y-0tb5pNHQAag:?a7DkT');
define('NONCE_SALT',       'E6}$8Zge@Q-2N]U-!XiYXJ-5o}P35CNVDu-(R3%x^tB[MgpP08DW^4~]VeLO_.+D');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
