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
define( 'DB_NAME', 'gbidzlil_tulasi' );

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
define( 'AUTH_KEY',         'viiHK<rLxl^>io6E.vm8,FcFUkp>eRiJ^._Q_VW4Nq?eD-_{/u9k[*.V%:/k*@bE' );
define( 'SECURE_AUTH_KEY',  'xOg.(9,h5QFi.``&P+#b_3& )f*G^>GXM:t3dLW14+S~o4X?A?Bm_I)1rV@$/N-G' );
define( 'LOGGED_IN_KEY',    '$:_I>{$eBzNP!u]$`=}aWb-#|2+%f44wVt<7-J@q^-{E1sfL V*gwL9dT~D?wqKd' );
define( 'NONCE_KEY',        'Vc!u(ZLa4e)7gI+_JPHtr=aZ,<e22A]{sXA?<h1-h4VhK6#ya<LfLMkHp{=RNUj5' );
define( 'AUTH_SALT',        ':T)W&H1=Zm7$w;daN%v{;pO1a9a6OMc`f7^HAmrC7R}ZCj1H2rY~!9h}YS1>waZ[' );
define( 'SECURE_AUTH_SALT', 'COvXYtN5`m>II0-$F6d+X3g uoU9VX0}R-y&C%|;U.D>u.o,XP~L*1onq>w2Zu>?' );
define( 'LOGGED_IN_SALT',   'H_:G{6-9P5wA^Hb4efB].9XIq3E;$+:C0_/CNQfH/{!9;z!HN_J;j01q3LB_up|:' );
define( 'NONCE_SALT',       'amOf;ZG9v[)-tUmm1+wxJMgX5~bb D3<9C=1i||n&M(3Ahs/>jY@_Os|fuDOD Dx' );

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
