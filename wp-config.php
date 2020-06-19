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
define( 'DB_NAME', 'luke_db' );

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
define( 'AUTH_KEY',         '9ze|jKz0EK[NhWPX*lU$ > 9=D;k}e {?C2oFY2h->RX6{u*;6gdPjI6W?&-tvO{' );
define( 'SECURE_AUTH_KEY',  '<-igL(Dlr0I<if2toMAv(BB-{o(S6ZQ6<1PFI,&IC[i}mZF45R^n9UNvKtZODhYX' );
define( 'LOGGED_IN_KEY',    '4HJ-eL,pFX 1st;-rBAlBN/{{&IzW/T$c~LArkWaf>>ZyR!+M[4KyxOo^<O{uYc2' );
define( 'NONCE_KEY',        '63@[8%//]T8cDi4IpKo%h;tp JF CGzXl<c,m7cR!#{~>F9eF>1sv_B}UI$:,)]~' );
define( 'AUTH_SALT',        '007kiZmyd.l$6@o V/$35??:s41]/|Kj^_TFv7h5EdR=9UBB?uVev9:@%GZ4<vs$' );
define( 'SECURE_AUTH_SALT', 'x7]WO>zUF?}P5`c/tqcxpz<z(FqWGLIxKYw@@B#l(2&1v8V8q>@T!kNnD[/Rg([Y' );
define( 'LOGGED_IN_SALT',   'O+$d@k~QQ?q;a=$C:)/<&uit{l*h(tNBm|`8FkWjW$]_#6V9d;5oB60DdL_S!$/t' );
define( 'NONCE_SALT',       'u7#jtG[hDlKrd|:eNCtn *lCP}I+8T3VqaA7#neK6x)J|,t`h?_ogc[Y2<wkkFUj' );

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
