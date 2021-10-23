<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u587500090_1AD9n' );

/** MySQL database username */
define( 'DB_USER', 'u587500090_zlgoG' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OEaKZWi8C4' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'ixlqQ:R{&b7Y@LZmc?nT^VOOrxdW-PYtbt-CDx_{G7AsaCqst<8jYfF/X3&Wn7t=' );
define( 'SECURE_AUTH_KEY',   'W8#HUJi5a#M+V.]rF,#!m^b4g1)$8YM>;ob9UPp&E>FiD|W1RT=2AI>m-r}Z,e#-' );
define( 'LOGGED_IN_KEY',     'OZ)%OR}1i1TZ9sLD`.y+DAZ[7+a[)&TD~]J_YVY$Yev`hWuHTw#0-.FigWUnABtc' );
define( 'NONCE_KEY',         'xg~E#cG`:uxourWW@F#n#?!Ny;F0.9V4dV#=mQHOr~O`pt!(3OtR|Hcz. 9Jx;jE' );
define( 'AUTH_SALT',         'Z-BK[s{:{Yg+1MnX,-Xgg~2LQ]XqdQwSn*E)loOacqh;d;V*pIaMbv{fV76@mFJ_' );
define( 'SECURE_AUTH_SALT',  '1bo|.9dCY:3 Tw]a4!.^)ePURTE+=:IkF!g8<GJCe4U6D|.0GiH6O+Inv^40xx[b' );
define( 'LOGGED_IN_SALT',    'h1J h|}ae[Kx1ql*sE:2? L/;QHP(Qt&bU++b|[A=Fga+<I7O.GlhAU!lhGM4}%b' );
define( 'NONCE_SALT',        '31@Ke;!n8%b~y^yl(I k3n9|WqERH*X.uQ8}p<)Eni~jnEh9oMWFNKz)H#vxH._J' );
define( 'WP_CACHE_KEY_SALT', '.|yi<O_TXFnM>gj]SF`izh*=wSf9Tx0UDWoXg13;8=NX2%8XVGxrmMgSv3ye;/Fr' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
