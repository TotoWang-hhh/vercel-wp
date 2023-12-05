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
define( 'DB_NAME', 'epiz_28245616_blog' );

/** MySQL database username */
define( 'DB_USER', 'epiz_28245616' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wtt637908' );

/** MySQL hostname */
define( 'DB_HOST', 'sql100.epizy.com' );

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
define( 'AUTH_KEY',         '+Y6B}^:~G]+m!gF R4mvdrK?dnX#QHhXkHZ|:Qg#@p2(>Z?nB06V-^Qs[<r:9mI*' );
define( 'SECURE_AUTH_KEY',  '(f3E:,T:f&Kq~)mk6Zx%T5MahN@$EOKnT*ncHeRdZOD4f@n=~~Ca%pSet^.5IQ[E' );
define( 'LOGGED_IN_KEY',    '%8@d|%Y[K=U:/Y]?Yz91:1xFNytq7 F)HpJ9Ylx!S$HoPW.{UJE H~6dUHil1qxn' );
define( 'NONCE_KEY',        '|*l5nM*M?b-]B_7u8W3w?m$4F1/9Y/gmsIJL<2hZTe]vJ{Je~Mcw1CD3V9_!G[|U' );
define( 'AUTH_SALT',        'Dq:wxE0 e2jP/qT})1Z4P,VmDq$5sj6,v|{wR21ZS3foQBZDL%[?^6mk}RL*gq!K' );
define( 'SECURE_AUTH_SALT', 'qq6!/=YIt<7e2uJa-brlt*`;<b[ D;|e^[yoDPso@h:GtMY-DL>+,iQ~ZQSQm,c`' );
define( 'LOGGED_IN_SALT',   ':s:^jhG@.-0a_7%mU9kzq+Y2TS{.+Oj$aJ3WVjH>#xik`$HQ3,uY{[)A-2q/qji-' );
define( 'NONCE_SALT',       '?aO@@2k8RqbbiIcj>,w<3ha??,,vmN?;quAw,CORrY2bU*Pyr&fE51zpOT~gd8[$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'main_';

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
