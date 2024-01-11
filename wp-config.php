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
define( 'DB_NAME', 'actarc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ea;/D&a<BVKGZ6389v3Cowb;#d$vV#f}?inuz|}oqQLsI.~T&9HVjzY<~9P-&@>s' );
define( 'SECURE_AUTH_KEY',  '`Pd45euN)N?(hJcU`B@^_U3p4gGo+2{yp&9*z`^BXGoKz3A8YTDqyRVJKHL%w;m=' );
define( 'LOGGED_IN_KEY',    '*y4hC(ADVI9Ex0U>M8`}p&89[JheMY#IrepI0&y,B/cj1RAlEdn?87FT(&NU:HpS' );
define( 'NONCE_KEY',        '[Ot$PT!BEU{oZAA:,.$vTf7p%.j{(wFk>b8Y!j>JQ:764>cZV8T9.h;g35,a~r71' );
define( 'AUTH_SALT',        '1|)&5+ j,G#]YUubkE+7kJSb4zH>QB@ &1>#fKycv3jnai;dWa([#X#S,BE7An84' );
define( 'SECURE_AUTH_SALT', 'HgqZr;HE2Tc`!0.^7B0Z|D>h:RqLI^{TvzT%g0N}G[PyKO6(kF@AAYIe,6yX`A~q' );
define( 'LOGGED_IN_SALT',   'CkRY%?;3gx@V!A*G*TQf}_HPU(I*O>jLw[TFG_;#H=<KM1icg|w4(!DQL_jeHL%;' );
define( 'NONCE_SALT',       '5ZmPhwD2>Ldp[h0fgR+)yFyt6(Oc9-.`?*D1(b)eFfOn@CVh<yx0a+V#Kr~!#R.V' );

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
