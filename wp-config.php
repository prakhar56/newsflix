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
define( 'DB_NAME', 'newsflix_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'V}6btAVZf568p|1b#kt0<D,{KA61^vP]+~(z5B3<$>JSL^J&PhnryOE;MvH4=~;S' );
define( 'SECURE_AUTH_KEY',  'UL%),(ZMeCJILP7Qg>@d^4Fo*S1=*ZsM 0s%R>q[E @n/FGZfEAtkicSl6Nr,[4#' );
define( 'LOGGED_IN_KEY',    '1UEffzRNoWV{vg*ODecr65^wobI]!MJB7YJ:,p^]:*?BZWrN=}+jIJ:-CjrX 93_' );
define( 'NONCE_KEY',        '}g7g/+7swmd[H0J9vFTfOpE wGMg(fOxFTh{f&ZL92xAIR93OC6Be><=Mj_N^={J' );
define( 'AUTH_SALT',        'i?_QE^3A*1%*deI2#k${;0ok{=:gcA23*h:R!`f%&~QMg)!T,!*c@7$0t} KQ&Z6' );
define( 'SECURE_AUTH_SALT', '(2!~hdBVbu], Zj@obSEQf<L13yWZ+46/ddJfB$=!q6!(=ts5=R(<{Wsw^BxL]6N' );
define( 'LOGGED_IN_SALT',   'uP,DH9SL6Q.TSOzIY<-_7Ch33hp3l|Sye`0)VA1sM<f1i9J(~h!eV/ ne?caDCYB' );
define( 'NONCE_SALT',       '1~gKJgphmb#~2#1!^0jbnDcV-pt=fx!{|dklW/N;2<4i.2)4E>0;-:uV|Dg|vqIS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
