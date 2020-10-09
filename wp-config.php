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
define( 'DB_NAME', 'proyecto1' );

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
define( 'AUTH_KEY',         '>Vi$g!evvZ%u/]s&#!LaN($/L6-rn_8~ufPyR*J?W(MCH^t5pB.NIx_ZNS+V=K;#' );
define( 'SECURE_AUTH_KEY',  'Aqd>9tn8.o@Qsh}f#,Pa= |kX2l?1Bo] 6iATQsHKVb,M9O@[?G5?_(>=qYt/~)Q' );
define( 'LOGGED_IN_KEY',    ';$`cWs^;XFe_xplZOZ7#`([6Fp$]B<M}]2vY>is`m[$OUMo(e=6C2cxs%bq7c./z' );
define( 'NONCE_KEY',        'yf8[a_A;K_g~?8;(<4$T.<j@E@g|ZLBt%R`^W,+qp[iD_5L=~`t#+Kh;q::N#[q7' );
define( 'AUTH_SALT',        'A~Zz}+(]RJT<WyN]miwR}[KoH-Kh;vlwjUKIi,F6X.~eVBkg$J;qna&ZR^.~Q(Se' );
define( 'SECURE_AUTH_SALT', '@xmFYxSq]j,6pkl}Yc%:/%GImPhuCaW3Xdl9wt9,sp*L+%v6YmHo`=S(&kd#lu;*' );
define( 'LOGGED_IN_SALT',   '-C<I/MY%%q40?#DYapm{J`u;waj^t*Mvl3O6~w6]Z{&%_3$jJ?$ZX9{tY`l#63RB' );
define( 'NONCE_SALT',       'S.J6ySJ/DV%HxZy(j&KsgDv,^30</?<`DkE3)%7yHbB#-dI)w1H+7=p <s5dif2D' );

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
