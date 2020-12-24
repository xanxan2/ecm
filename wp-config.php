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
define( 'DB_NAME', 'techcode_wp456' );

/** MySQL database username */
define( 'DB_USER', 'techcode_wp456' );

/** MySQL database password */
define( 'DB_PASSWORD', 'V4(3p(S139' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'oefwzvxhe5fijslxulaiehv8szb80r3wrkqxl6ov5f4qp70u27zcnqjttjbxsozz' );
define( 'SECURE_AUTH_KEY',  'qbbdu9ggpzy7jbp0fmjgzchatxdxivaocpgkfqb819ll9cmeel1efk8omskggula' );
define( 'LOGGED_IN_KEY',    'pu6gqi2jg8ft0hf5edvpiagechu8kd6c2ooobdeerlsqukh6nmnhze3ljefzd15m' );
define( 'NONCE_KEY',        'du76hh54hwyk4npzv7rjbmpzp8gyz6whqopvotkrciay5nkuyfuovoibtwiukxvf' );
define( 'AUTH_SALT',        'bxe3i8cksg176oqi7vfrydqsau1psuxok7ajc6dufeftag5ykmrkvfabhr0aoj3j' );
define( 'SECURE_AUTH_SALT', 'jpa68ncnnz8czpgtx0i1rlv4yjyzcnimc6hdqrkmvabmldiwxc8bk1pua7kwasms' );
define( 'LOGGED_IN_SALT',   'rxr901x79v5whz27glqx6fkp3s8tc0fmjod4jyd6gfjw4bbsyriesnyip32yg2cu' );
define( 'NONCE_SALT',       'jkdbegv290crj2kwbgf5ifnhg4xzhndj80p3uxs10f0n9rnhqryex9zgr7zmswny' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpev_';

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
