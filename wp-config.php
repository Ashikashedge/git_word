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
define( 'DB_NAME', 'git_word' );

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
define( 'AUTH_KEY',         '9gL2s7D;StS6|_4p^xdODkRQwVaMa*%i(v()jA0GC$~Nyf16Il{QK[{CQ4C6Xm2U' );
define( 'SECURE_AUTH_KEY',  'w9OL7~bRM5Vm&T#Ox)Oa~`g)T6-vw2avqmrz0%;dVM 0x371(>gCiS5h-n FG(=k' );
define( 'LOGGED_IN_KEY',    '73Y`JoUrhwy:Yy$JpAP^i,~F8[0Nwk_p-LF_h..5GE=2 y@iR)c5>/C[}6 [^{?g' );
define( 'NONCE_KEY',        '2m`M_@_7jL:5qPyXS(eouC$RuL.OTVM,^a3KL4&PA%hM^@b8@~Syk=5VR&t-O >/' );
define( 'AUTH_SALT',        'n{#}Sj|>H;|AQr3Mrr88$&!,2<Dvo8YP`-U2X]-jYS0rfsIcuzib CANg ]f|SA`' );
define( 'SECURE_AUTH_SALT', ' %@*P)Srm9!ev6=[o#nl Nr;9`JLfFTx5|5UsW*jQA}~&}wd,_[9Hb-RfZuXF^dQ' );
define( 'LOGGED_IN_SALT',   'CeYa)FKrfvQuJ1.++`g}(CLAs-C@}7H_L301Le(#rd Cu~n:,j*E&sOf+BiTFb<m' );
define( 'NONCE_SALT',       'm&(bBE#uitN}P=;/eyXq=CHR)b#f`rU*N&iISjGcDWeYL8(`zW.$&rp9qo?k+/0#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
