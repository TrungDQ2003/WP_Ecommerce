<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'if0_35366723_wp35' );

/** Database username */
define( 'DB_USER', '35366723_1' );

/** Database password */
define( 'DB_PASSWORD', 'S.g62-2Ip3' );

/** Database hostname */
define( 'DB_HOST', 'sql105.byetcluster.com' );

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
define( 'AUTH_KEY',         'niggfb5fufafdtbivtvtuoatrgnrbwxowzyqoj5e6u5ntbdjdcbz9csubg7cca5e' );
define( 'SECURE_AUTH_KEY',  'efmsexeysvsaxnkoeoc31psjgpxmclwsexcmdbvwahi2apsz9e9smaztqhljsg1x' );
define( 'LOGGED_IN_KEY',    'y0cefoxbiqkaduept96va71bhrvstc5p0xeqfdbx8moexrtjnukgfb0x33g2rjzb' );
define( 'NONCE_KEY',        't6effiiro3i6aogaxxkpc1nd84tp1cfckofenv0sfivgy5skwu3babw8ztvchzpc' );
define( 'AUTH_SALT',        's1wwjsgfw1buj0790zixoyecsr1vbtmexuh6alz7tvbjygcsa8uxnaahyhmu6ghe' );
define( 'SECURE_AUTH_SALT', 'nfmvzx5q941nngqivpmkxcgsmm6cpayn74t5oddqmwx6mo7wo2kh7eso7ncpbeof' );
define( 'LOGGED_IN_SALT',   'octgtyl2mrhgvflxfa1h93rrawwt595j84naoyq3vctbm6z5vnoev6f08smncrgi' );
define( 'NONCE_SALT',       'pzglnu7mpeckpy6ahnti0ye6wsm6wmjykhhnqh23hrmaemrw7bd3smbl1twrrxcj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6g_';

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
