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
define('DB_NAME', 'adic');

/** MySQL database username */
define('DB_USER', 'webmaster');

/** MySQL database password */
define('DB_PASSWORD', 'adicmasterMagicmikes@');

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
define('AUTH_KEY',         '}4(<GJ1O:XCf,Rb.4oXDoh0>rIOkIn4eO.`z #4/Qqz#$2y1+Y937$x>ACd/t;bK');
define('SECURE_AUTH_KEY',  'vk1-HN>>;giQ@J0l7F!>/1q]Oy,.KguVw%*74x7+:a{eI$GPHfpm6KEi2hVX?r/>');
define('LOGGED_IN_KEY',    '1X|w[92wVT~}.|8tlo;eexh[$S{dpM756{RIE8m^!9Dbs/.w}:z_%I:$^.6sDkLv');
define('NONCE_KEY',        'Z$%T+@MV3x%I.y6N2O}}T5SX~>wk%dNS8;0X;JV~J_ $t`UK8NZ/PnxyvH#mQ5!Q');
define('AUTH_SALT',        'UxI9[{CM69ulpT1*)SaI71UP99V0_f&s:kJLgR8gg)0x86c<27sHasS=ny[G=o;`');
define('SECURE_AUTH_SALT', ':&~@rvQ,(3_*eO^:M`|AvcpM.%~|`[>*`r<{Wr<7bdE0;K?a[96DjAEzUG)$<~+.');
define('LOGGED_IN_SALT',   'uNon+b4UiS8X&jFL~;>O-p4[o{I|zo:obNS%,-DonM!XE%eXrGvl`b-*Y0OVVP>Y');
define('NONCE_SALT',       'Ef]W-#::/KKwC|H-$an-n78(Kuq*NOVtFZWg,j;ctcuU][%E=cNYcq3iB*(-^Z}Y');

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

