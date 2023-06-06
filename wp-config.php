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
define( 'AUTH_KEY',         '_|:k|iDJe*g{=EjcCS9eD/ q+ifF1hcXqV%GH8|F;I,c3_J-4KDpr&~qP5+?%cs)' );
define( 'SECURE_AUTH_KEY',  '<mLvl_(Eof7HQi>YarJ.l?F]W#HB;e 5>H-7|A)@. -P$=3Tg`6ND{v;xh5rCr_p' );
define( 'LOGGED_IN_KEY',    'MqgQxK<f%nTrz$hHKZD-6*E oia]cPX@qmAPrw@bs.N}|B(&#yHT8c:}N_GbQB!5' );
define( 'NONCE_KEY',        ';?HD;@GEE=KhyTOO1}DRIXHj`tDFAGI]T=kjDgiahe w15+F.n497/0,zrAp5tp}' );
define( 'AUTH_SALT',        'n0DtX{}CD.<S|k^9FW$kn?l.P><LC,a*#J2<gpR{KaF|ai. 3^x*9aGJZvj^z+}A' );
define( 'SECURE_AUTH_SALT', 'M0c7fB}MP1C,mE (HH[1K8^7Nf>) PU:Kyif]Y$*$:Q&k{eXy%?jK?=onnAzLEk}' );
define( 'LOGGED_IN_SALT',   '.JCOS&*Nfy~WgkPwv3$;YMr7@&:2)+ewIVtgKC..TJMLCZl`W|.l>*M0pI*1B|5`' );
define( 'NONCE_SALT',       '6eUc4)Lv<^.,|M8HhjO,/,n; 0C@v!HKJu#::2D&-=Q#SziNiws0@ <@<5!/?A>?' );

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
