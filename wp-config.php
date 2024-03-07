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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Pv2g8YoBgS7qKK:#)-D7O40[$R0_$T$arLBV/e7/k4=fH*V[hcy(5yIK=kIGP1pk' );
define( 'SECURE_AUTH_KEY',   'UR->&d_8}oJq],<S)lvc&a/g|f3%B1De9a [2p}WoX<cSMb80gavZEq%-yEN{ZF.' );
define( 'LOGGED_IN_KEY',     'Wy h{kdM}FS^H42k]]oX$+C[m.(=?:AF[=nJ.:QnfARiG54I8%Y8|+@Vn_+A-D8(' );
define( 'NONCE_KEY',         '>$bGOT`V.$P#~_IJEdjxpA[TeF`mEsy_:`7Z)wc~<dMdMtr#d 8GDW%0&vPd<;a4' );
define( 'AUTH_SALT',         'Wx-niG,_Xje +k+E]KQ<f44Le1<umO!|m0d B{yxJi0*MfE@ZQ*LY{=iS& KO{YC' );
define( 'SECURE_AUTH_SALT',  '2z)O(Oo.qC|zn;<On=Hz#40PfP%mAPFi*H1&<QD1dp$&c;HJ/_P4m5{Z>HE#xhKN' );
define( 'LOGGED_IN_SALT',    'OB]E5wO8F<tIk.~S_0}tb )qJ{`+fSjB=jgnhd6=<~7Hit?}-4]o,&SpB^MtT.9[' );
define( 'NONCE_SALT',        '/ QHS`yi`k-SQ!$R,:]MND.4(x){:E_~f3YA:kWj3$3i)-`SW?<}FQ:FP{_{) rq' );
define( 'WP_CACHE_KEY_SALT', '<q[J4WT@78r7dGKw6SWGLm*C3s6-9^3^s6?MeFs2@n,T|$_Sa-eb$&VV!tC#Ou1m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
