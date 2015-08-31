<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpresspractice');

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
define('AUTH_KEY',         ';{I[c=[f9(FcSvH,8U>Kues}7REz#DT@ks.-4byN6kmUh:@-TK0Kt[(vw|:__-y7');
define('SECURE_AUTH_KEY',  'TLT|>R6b-xrl*jA]i,KmyA.&xnOBqz6nDZj$%xv{WLvmH?sChit}Ep)|(*3`EXLh');
define('LOGGED_IN_KEY',    '{j),[)r6;=X2NBkDD)0l0nj[D0higUO}UeW^+MDqYLCzhRrN4xtb|*vACztv|b|S');
define('NONCE_KEY',        '}eZnLprT%&y=CEv9NQ|1|1R)_n!BA2*%xIh&9>ybLRh/YW=Islcd4$lmzUoN0>WM');
define('AUTH_SALT',        'A*EQS@V/_f+*B.<!<0|51SK@QSTLZx&=xvCFqnMLH+e]I-mrUNh>:rPI0Lj29(L,');
define('SECURE_AUTH_SALT', '&qSheh#m$o$6+eo}./T?Hjd.Zg0|%rEjMmnA`[va0-TU5{7_.vKPGp;Wv[6S.M(z');
define('LOGGED_IN_SALT',   '}4.npDe%biWQzlAn2qguC-,Bs7+NZrf<ov9db4-.jwbsz9Jqj9>ND|lZ)5)}OH<b');
define('NONCE_SALT',       'O,[iHzm+`bbgk!Mj{UmCsn7e|)y/W!3NaG1Z{lF$R9P>L)?$S@Lnx-jC+@0Q!|{w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
