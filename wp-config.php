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
define( 'DB_NAME', 'abpro-project' );

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
define( 'AUTH_KEY',         '78It{/?,@13x><qX) *XQSJsT<(}`of-K~6 3B%v+f+F+Y-~&j[)A-R,QHmh!VlE' );
define( 'SECURE_AUTH_KEY',  '$Q6-Q.)%ZE^d6s&s_eVto.k95tOCtf=]AUrZeFl/zC{NGbW*^IV%+yI,kCfgS:V`' );
define( 'LOGGED_IN_KEY',    '*zh4$7Y*DDvfo-qwHe}J%]t<QK2o;I}+ZR]hLKq1!)x;KgP}]HnN$)3)5!p_]K|h' );
define( 'NONCE_KEY',        'm%w?/[+:I7TH3VFRppGdGLrmy8`c=Wr:7<$y([x^_y|UTd,ZIVV6,LfR4: $VYHT' );
define( 'AUTH_SALT',        'g_aKI* h[L#_2Mx10dSZo:Ryh?bzV/T:4tX5cKyc4>~<B9<Dae49@lBrs={Hd~&6' );
define( 'SECURE_AUTH_SALT', 'Y1&,F`*o3kRt!}?d6OUehsWAz4F<2HzVXg8Em_*L*T<I1s9IP8b!r>14QxkqLboA' );
define( 'LOGGED_IN_SALT',   'MjbA1>t_mTMzZ_duwY{l?~XN_2VaHI/n)msAJ7h{!ZsXF97h^ui:]HRZY*D%!}zx' );
define( 'NONCE_SALT',       'QtBoS_a!CvnSgjI8.$MM:DoQsefx1@?bp36VA4[D`l37PY@2vYrfJ+2Tx=zfUZp,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'abpro_';

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
