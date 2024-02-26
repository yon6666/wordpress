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
define( 'DB_NAME', 'wp.cc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-{_qHDL>6m_W7]TrvO+(+6cML&P_l&G{MG3(;E*LH*J]qj*evln6@ieY24Zf&`$T' );
define( 'SECURE_AUTH_KEY',  '{?5y|A{:NS|yE_T4(^^ta[sK.t(.#^dfgE7Z.]K}`T/Re7q@VOvoQ7c^b<),-sZT' );
define( 'LOGGED_IN_KEY',    'q!7zS9G4qXQOX9z*x,V-xprpN5S2oVt)MliG`3P|[h4Z#k@uMwRnh_`WoR*^,+iZ' );
define( 'NONCE_KEY',        'V5#`6I%$>8OS2:fOEnaTOMZU0L<)qR%$Ps!Smtck66yU+<zB&~^1O5RA!;hJil;P' );
define( 'AUTH_SALT',        '^U?@[</cf*8Og)u2,obe6X<]SUM#PJuo4h#rQ@QsLnuX`#). aoJ8y!O8oq~b1W8' );
define( 'SECURE_AUTH_SALT', '[UD3PQVO4ktkvs00{`eoiE@Pp}usxE<tQX|]T=LzF+IAZu~7j44~ZLyr36q_$c1`' );
define( 'LOGGED_IN_SALT',   'Vxyi@(B*%HKob2Nu_=TR(nF;68xB[xgAbE:9atJ*OesY-@dPc={:76}1GnC5k0ii' );
define( 'NONCE_SALT',       '9v{MJQ,7sRjvR&.kz(+*_K}YOssi3l|$vq{3C(j[SlAK-tk^dT,Brz)C[ *@IO.E' );

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
