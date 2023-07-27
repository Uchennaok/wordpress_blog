<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uchenna-db' );

/** Database username */
define( 'DB_USER', 'stackuchenna' );

/** Database password */
define( 'DB_PASSWORD', '1Juggernaut12' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y}B,G~_W<1#Z/)[8eq-,Q-|!+O1Z#7&B`vj?4+)Pw|glpDdbe`N*>Q[&ei6r+:)+');
define('SECURE_AUTH_KEY',  'GuAH}keuCW^C+K7V$jW8=k1Dc5=?6Gu`e>M|s(fQCxZS.Bq|r+aNDHeI3hAhi)3,');
define('LOGGED_IN_KEY',    '`WSTRvu b|PDTL0=r+wqFfTR(nwhSZSDVNsbMJmzn^D4j-[ e@i<BQ;54]P4w*%z');
define('NONCE_KEY',        'v|BKRd|;s;2&=OeE,52.S;[<?*JhlIqWBZ3-*gy .Y0->4!_N+1|--vGY*I5.NVz');
define('AUTH_SALT',        'YK_t}2~k}.HGN*0j, XjS$`$2kRI/-/}uss00?444yl[>*:E:p+~<G|jwd1,-:G/');
define('SECURE_AUTH_SALT', 'x(47rv=}@Sj4+|Qn<~;yRD8j<7[l.o3N>*2s|:X8I{ZAyR|XJg}M8t0hEenTJ!WB');
define('LOGGED_IN_SALT',   'B9HnoNJ=1]f(nP|7%ieM.6`IZz+E6ZgTmMhhdsSk+=-xM C>HWyk;E7]Y,L~JxIh');
define('NONCE_SALT',       'M90?}2TN_OId+fC?`v-e{ySs&=2^hKY*0ZckC[y!4O-b9@7b036)+L3>V_Beq0#;');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
