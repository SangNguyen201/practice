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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         'dTH^>Yhc<^Jht|^d_VSw;X([I9x%Q&Don@o8jH9!%qaeV$=eJ<aP%@X;^kot1FAY' );
define( 'SECURE_AUTH_KEY',  'FF6I.W|n<>#M%JMD{0l*Q,2Gp5YZ3_*W2#`#wzS2Uphg6EBqwB(0NI0^pU6U9;t)' );
define( 'LOGGED_IN_KEY',    'YOG8$q&7FM(t.~Q!fv2 %mytL[!ni<zD!m5k.b@O/X gZkqw3du:TO)kBE/W5%Hq' );
define( 'NONCE_KEY',        '[t)86AO0we2r+X6=dFGKOF/4YA7bWV.`,.)dj{$oaOh!mv^)Os$^!d5c(m,hs/mW' );
define( 'AUTH_SALT',        'Q|LCM/?_-tk<2Mkc:L%cWlg]b|.vt3!Kq.s^)jHnJ7klgGTK<Ah?Y+&k+sgrdTJI' );
define( 'SECURE_AUTH_SALT', 'xMIh^ 4x>3tIv(ggT0ZUfqW)?o[)c_a6nIKpis=P!,$%{}}z%u(AKMQl+;ai!rnz' );
define( 'LOGGED_IN_SALT',   '^>#&b-s)(=G]Z`70e[?Lfx^Lry;^K3taPuVo>^ZBT{jZ@}KN2AT!3n*.y}y8rFwJ' );
define( 'NONCE_SALT',       '$wf,E~HVgiB=zOMlwGRb{GCc`JsW)!gGETdu4{Uk}~jk]~!exo>OCg/4J#]oJa`M' );

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
