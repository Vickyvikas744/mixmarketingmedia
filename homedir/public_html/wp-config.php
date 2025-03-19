<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mixmarke_wp751' );

/** Database username */
define( 'DB_USER', 'mixmarke_wp751' );

/** Database password */
define( 'DB_PASSWORD', 'ZX0!4n)7Sp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5gpdtid48pw60hi3xut6af3vikg8wedynvuxw7exygf8gzsgowjmlw3tfogvqzs7' );
define( 'SECURE_AUTH_KEY',  'v7wn0s2kj0niir7rkzmo1clk2l4lcj8tk1nf9cjyb01psep7lbvqqya1fsmzn3jf' );
define( 'LOGGED_IN_KEY',    'ew8imu6wfp9ynbvwglc0w42gomgkbbmziczcponfwh0ejk5oigfvammupiyna7xz' );
define( 'NONCE_KEY',        't8feh7v7rz67ucx1lhzse2tjryoxqme7royw4qz8lpgztc9ddwpqjiosruru12yt' );
define( 'AUTH_SALT',        '4fv4yhd1hjppzmxmymlfvl96dimwaevdsfs1teuk2gy01su2gwsbuvb7gg5j92i7' );
define( 'SECURE_AUTH_SALT', 'bihlmdl7waqylbqtiugrab3yq4ijjge9y8zrpaprb05ej5og9dzuvifzbxjhbhvn' );
define( 'LOGGED_IN_SALT',   'thaw6w8rdus8zqr6kkuzib85nwvcgddwzqeespky4g7rpuzhgzyytmzfkixhcokm' );
define( 'NONCE_SALT',       's9cebocndm2zrlzelol392ljeefllp0pu7lhe3fvx5jtbviuyjud8sokjaduwfkq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2g_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
