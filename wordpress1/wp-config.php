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
define('AUTH_KEY',         '9xJ0S5|*c?EaoBy8&;ZW_lzz4q]iFKDe1D[U4CB]yomIUe7]OLKzK$--UZwz=HJ;');
define('SECURE_AUTH_KEY',  '6!L*y<1|UJ;)F&Emvq)ukXw1M+ioJ4vDH`a4DY>ZC_f1pj7lHNGgD3*Yx;P0$M0e');
define('LOGGED_IN_KEY',    'OA7N+}y&0w~G^NEdsd*VGB(kcCR>ZU4-|7xUaIh]>|~#qLC0($nEl[U5Y;~<UHN:');
define('NONCE_KEY',        'VM[0pjxxX/DsFbII2y8wWY<!%,8VblTub|lshN?Wat@t0-~>$trgX]?{bO.VvcpV');
define('AUTH_SALT',        '&=Pc|+KSns^N0_OrF<_Oo/:?a$P:toP#(RzqcRWy[uq8Vqe]HYh+6m)Uf,:-uE.M');
define('SECURE_AUTH_SALT', '#Zh&]!A(QG0Su#8bmfA7O,/)/$,$%%kwEzvuW:,YGGgBH!,Vro@|TF* C|^;`i[8');
define('LOGGED_IN_SALT',   ' dG_j8 q@4!-I-)j;pz gYGV9)0Xe-0q}oG?#h5fn+N*J|Zhb!T/1p+^wk2Cegc)');
define('NONCE_SALT',       'OUk/dy1}Rfhlu@Ya]]FU!f=]sQn{+?J]&+_9vF)0@J#d_pKt+%)MKk_4~#7E!cb7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpjomar_';

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
