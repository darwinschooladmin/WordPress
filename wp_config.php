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
define( 'DB_NAME', 'unaux_26627843_darwin_wordpress' );

/** MySQL database username */
define( 'DB_USER', '26627843_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '52lSS])k1p' );

/** MySQL hostname */
define( 'DB_HOST', 'sql213.byetcluster.com' );

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
define( 'AUTH_KEY',         '4ia3gpwnmgildacdavtswgbwciwhv7riqhoxpppglmzerntxrhga8udmfx63az11' );
define( 'SECURE_AUTH_KEY',  'up9zdlfaizlhzlbowxw1qack0tbienzfywep7voh2uhtfwsbmv7wphbfsfns9u8p' );
define( 'LOGGED_IN_KEY',    'xkjw4k3gank94hkfxrlencativ4q7inpcqdq5muq4u1w850alfuast8wezsqblrc' );
define( 'NONCE_KEY',        'myed0nb6fu81cqlevafmz5crgtxvjqvcvypvzhk76amgae4q8syqagcmftwgo1ka' );
define( 'AUTH_SALT',        'ky82ifmdxfpkdlehiwq39jz3jra8xhbk6duj4cykxszugtoh9rs1dwnkiklohiqq' );
define( 'SECURE_AUTH_SALT', 'lmuo6jg3mrzgp3kjcyvlaiaokzwjebgs3rcu3occsppj2zcvpfytom7gxwwnrt6a' );
define( 'LOGGED_IN_SALT',   '52pzmysz1mu4kgj3whcntow5qvplj7ub0v6rovsbxwdqw1wpqdbhaehpgemguvel' );
define( 'NONCE_SALT',       'wjpyhamx1qhs51rcx2dhk4zsnf69fb9rr7lp9pcsgoban99bwuwkd7nlld0ji6y9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmc_';

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
