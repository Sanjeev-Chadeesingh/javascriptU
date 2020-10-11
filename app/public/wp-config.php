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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HpofytzPSOutNiUYwxV+3RFiKFLigA0DMIM2lFW+/nrotwdVtynu1oxBwWAph0tOHvWJldjxDNap/TtAocOuGA==');
define('SECURE_AUTH_KEY',  'DGFRX4NX++ziZJRCei3eEXfrUvAw3LcRUiq4U/TUocVN5bToJLlVxvEYKscPlZA0Qsamqq3UfcZaxOK9DbtkSw==');
define('LOGGED_IN_KEY',    'wFY8rAQXCd7NGsGpzS1dgnwrtXs2Tdil8/KT2vyxupnRc+jetY7WZpg06UzytzviXqH7ba9qQ2UFwZEAeUnqLQ==');
define('NONCE_KEY',        'OWp5hr1bCswpqTADmEc9Au5mLyAYQJXWo+3WuDHUkcudyg4ieuCDzI3owq3PhmPLZy6/ZAItZdq+XGJ3BMPVww==');
define('AUTH_SALT',        'yIJZVJ6XFTMKYylYaDREwNL8+Iw1Zp6QzmVmMWAlwLaeVqCgY1n7YYjNGdPpxl1QwdIlzxrxcUj/4emw4MVM2A==');
define('SECURE_AUTH_SALT', '6axSRwpcfdxCKcIbunG5SROmFhNxyeuWJb5s3oSkzrDEalRPsIHS/m/GBNJaJZC9Rf7/STEiGCm8/fCvqEi2mQ==');
define('LOGGED_IN_SALT',   'kEsm0axXxOWyX0MoTcHDouIIgD/boWulnVM4dg5AO3KFguwQ3yksbOsvI+XZhGZdyUxON/CIAZBLbL84t70zbQ==');
define('NONCE_SALT',       'QfHQZsEGl6kQXJGePzUakpIjLYcImSpiLcft0raQfPNxUxaK60zZAXMHviROYMu6H+LIW/HTnjE7b8wHYfhKyw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
