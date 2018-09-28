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
define('DB_NAME', 'dmd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'bc2faa52ff21ff84a5b2fafa8687a06802e6c366c686d544');


/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'http://dmd-pathfinders.duchenneuk.org');
define( 'WP_SITEURL', WP_HOME);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+sU^|JVGs,qmV,lySkaRysait>I=q09~>Jh=U_z;QD$GJW+(~LkAJSvlc%BLGW6}');
define('SECURE_AUTH_KEY',  'o%NrEuWE-(}t]p]@2DSTLd6Rh}t=l7x[:md8$#3jA?}K#p~VNOc^t{Y2w,<5)^&G');
define('LOGGED_IN_KEY',    'cp2QU#{EV2]SiKz+.n8#F=xqcg&jhL..BGo@`TM7 Lj.ZHs;@/IuWCx{LEW-WIGU');
define('NONCE_KEY',        'M&WUokv]#W5[@_/nft,v]QtBG%,?I;) }BghA3@FG]Ord*~d/45>~XaI+mTqZuqq');
define('AUTH_SALT',        '^%N3<p495{0R+420cP+O:_1}(KM1B8d@6{}[_tJ%iO@1GhCcq#e*mig6}3kD^*#J');
define('SECURE_AUTH_SALT', 'e.T#FmFhBwF8&1~~.B(FKaylva<RaYS<>he@ x&=Eh <a5Q{yf>moo8p2D/3H9#%');
define('LOGGED_IN_SALT',   '00t4KsvK]yiZ,8!y]Ou)j-hhj,5||a,m>hC5VX93}p@(JxkW`a;W+N8@T))&nM9&');
define('NONCE_SALT',       ':=[}6d*#(6W~4O3..5#h,^W0>$vfh@kSXi%AwL.ri;?OyHu.!7*}~3(j!GcoBLev');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dmd_';

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
