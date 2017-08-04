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
define('DB_NAME', 'eindproject');

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
define('AUTH_KEY',         'JE%>Y_YcC+/yp?ZcUzK^dI?>A%wyFT7K@j;OmtsyAgrE?K5k9#77GHc&|QcEs@hX');
define('SECURE_AUTH_KEY',  '$m3pZ&X9]fim]u5^5iED]K_HcD$`TP=r$#wRFmHvFm!ef=t*Wd]vdS|+]uB7C+T(');
define('LOGGED_IN_KEY',    'su|Pa:CBq9j^n0ln [{+m?!cf:xHG7$~3l{-<&ZJ0EYv;yB/&a=CQafZa!R08C`5');
define('NONCE_KEY',        ' Y4D_7gZD$s2Q7?Ts{[:ab{Z:hmTDr~i}~/UA.~z-5Dr0Ee~rq*cym[oh2GT+v!a');
define('AUTH_SALT',        '#y)4mdfCQ8__HOk;!$hae-g-H<m(+HT~KGAK0%Px80tOZ+!!%MB!D$T5n,w}zYCI');
define('SECURE_AUTH_SALT', 'p1e(S&X(MwzRWBx}x|SU^<(fgQ-x+4gMO4d8>wj_GN-m5!PvU/U/df(`K/%=`vF?');
define('LOGGED_IN_SALT',   'Aw8ky tXOc xA,UOxWoh)W&mW 0TLY5HBq61YzHGM0 M?U!^|,E[5Vg0/iQ6jnR:');
define('NONCE_SALT',       '%{-W[^iD-HxILLjpw%*IyC4FTX WL[oIk^_ =0$^{5JN6];sVS5#P#3n KSgs88^');

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
