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
define( 'DB_NAME', 'cms-brocedesigns' );

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
define( 'AUTH_KEY',         '!L=j<x!W;DXeofSy!Gl+Kba8+]c8&6Iqa$n`<svjq$}]R3!Ge}kaKNFf0pCn)Chh' );
define( 'SECURE_AUTH_KEY',  'WaNz!wux{nYy :Elg6%4A<4F(VV(%:{yAQI|!mo<)co@YM}o~H&!doo%;4#nV]z$' );
define( 'LOGGED_IN_KEY',    '3s1ew[[0}y22hf*14|,HGexzpR-W25d/#Wa>AiO3U$Td1v`+By?xWSkuQ}tNoS[7' );
define( 'NONCE_KEY',        'uP`rZU?DFqalY|^yQ-N/Su:s7}K (|g(8}j7dl1nrdlzW)~$(p].QviG.9A^Y?]@' );
define( 'AUTH_SALT',        'j^7t7]f6sed2`(&|)W7J>IPq`@wXl7*kCWh3NZo sz7i(~8S({MVjD;58MW;$pfz' );
define( 'SECURE_AUTH_SALT', 'l,~a*+uHiQUiG1Q(%-3=mTc@3QUnB]op$l0M^TB_qx!!Ka?8retW9,Vj(%c[3%5<' );
define( 'LOGGED_IN_SALT',   ']HI4*Q7tF$^<0GHl$l>`h]*I`EK%,e3Jj;Q;#j]x--nom!*Fq`3NDW(Mx&DA)tkW' );
define( 'NONCE_SALT',       '-Teo6Zkcf)PhKvAf4BYP+>YM6MZ+Sd^1`:A!b.Q^8I7[U{i0>qfA!CEOC6Q/X7D[' );

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
