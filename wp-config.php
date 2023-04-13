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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'SS_portfolio_website_db' );

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
define( 'AUTH_KEY',         'e;x8;Jmcy4DmXI7R^t$VQgU6T{JgB`oQ>~+kH EOegp5$<&?2j.V/zs>TUfFFxL{' );
define( 'SECURE_AUTH_KEY',  ' `_cbI!u%_a0x&ELRS*L4zTz?PxIv]%O7OHGw{1j-6F/JW)?<+^lVKbn1Rc:uCHE' );
define( 'LOGGED_IN_KEY',    'R.sd`|N~AhJj23I|`%,Y~-txZ3.agIyX;`mBM:m[ZjaXAh^G_:m#WR%AVNrb9(3o' );
define( 'NONCE_KEY',        ' ,g&arC]af]a}islu5D|u-O!*hi?l}igqL/{3TR$QK6~m%:0oApVI6rD}m=W^!_G' );
define( 'AUTH_SALT',        'nY@5=84fzy3_%.B-Ak};#W ecvm:eFo=(H)4`ir`;5)$-8vl,AY4K*p,ZegWS.Hz' );
define( 'SECURE_AUTH_SALT', 'M^c$?X[89n/_qXTwRy]*IgzC_QUQ#Hr!@KR7G5ZTtH2*5uBG6>SD;rB#$Fd~c?|8' );
define( 'LOGGED_IN_SALT',   'I@!5H-&A{b3_@?T5Q7ldTLN>_6d/N.Fw=ZXvq[,mKoYs~>2]YIByy(fDG/Har4e>' );
define( 'NONCE_SALT',       'J}$EsYBPTn]-i|v2&5Ib+#dB6(~BrU.WZrccYeS1u+O!g>U7m9jtXQ_;W}o1xzj8' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
