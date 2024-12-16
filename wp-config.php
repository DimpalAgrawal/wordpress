<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'j!x9+Cf>%W(il-9Q]~{S*<Gb!,sBt0J^)&Q=pX_khb]9#suDRb@?]e#wF/sdb]EI' );
define( 'SECURE_AUTH_KEY',  'q`o%dXZZ$w^Gmn[#ef[Rpl}jEb=}1&~m+F2;y&PRza>@![}[4=NIL{9WV*uz<95;' );
define( 'LOGGED_IN_KEY',    '/?UvmG`~T=lInSTc(Hx.z9x~g<y{Vc5O8%zaw:<_!rC$2-^FG}8;Gi%vj[V6JJ2x' );
define( 'NONCE_KEY',        '}pv#LLb=3v+LFpA/_y~wO;e)OVxsWl(`v^FoQ*f8X_,8`$Tb?6.(+kS6eb5j<oD2' );
define( 'AUTH_SALT',        'P&}q-Iv>9sFh{.Jga~aU~A0PeP:*t.d;!|$;#x^Hw~$fmRewy)+Pi:#]/63%EdRe' );
define( 'SECURE_AUTH_SALT', 'j$Z%PA^tG7);1M]595G7AWTCeX}v@f_Y89,#-r%|v:8=cFcp;Q#/Eh)R O#rgIpQ' );
define( 'LOGGED_IN_SALT',   'c_6&z5VE_`!1nRsyMMfL;CLP%j.WHEcR[W{`]XyekY@PS!%PL&Lp]k&|?we]/;,q' );
define( 'NONCE_SALT',       'h9#5rJ(oN  S1V<Q1} SePegvF3e$CJ(oU}Sw} X228/$I42{i@e@|)8[`#Kt2wA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
