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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'r|Hw#gc#MNtSV,c,Bd5bvH #!CS$Fl/<e`iar6%Hf%!7qyj[18Bj)}w0 L=B%W.0' );
define( 'SECURE_AUTH_KEY',  'ZVP9BVo.O/(Jl:jT`5n(/fMGwYC|2y~p[UFqR;YuKcJy_WKHjaH;q7P}ZbeVer-u' );
define( 'LOGGED_IN_KEY',    'YVo*QHHFiTeqOCcYR+*OsR7t#Y_qzBo/).F0D4!+~Ny;G-RK{Byb=?~d_kZ*mdk7' );
define( 'NONCE_KEY',        'jg-C22<WeT+T,(`nErT T+EnlJ2OKG=-(Wxl=,#?;=nK64ZDi?p!6n8CS*:$a<tM' );
define( 'AUTH_SALT',        'nY|M)rPBZny2j*%@xd`zw<-xs:0)g7)q&o,!{aO)1rVZSQJ_bN1S?utYMqb&/,8n' );
define( 'SECURE_AUTH_SALT', 'pck`?U^y,#7Xl5ep+q;.1QBNN3qk/eX^fR~3kI?^Vo@p]^gZ84P@D:LB;^E/o, <' );
define( 'LOGGED_IN_SALT',   '4m6,Su$TR=)[X?eMC*WyjnGnr=%u/0@yx:KnS)(^I$H`>olNq=QAg,E!|+n3RY]5' );
define( 'NONCE_SALT',       'g5.JZ11I-#l[[OR>0ri8}NXri+/>C~@C$1vgsn?fdu{NDgWFy(siqxnqHV#xB_Em' );

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
