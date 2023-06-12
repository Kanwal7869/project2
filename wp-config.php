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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         'n]LfzU^1pUl]Jnso@f+gu]_E2+$Iw9f,mS5~@u=G}P 6Z@jd/T^E:[qSE(CxY@$^' );
define( 'SECURE_AUTH_KEY',  'Gx&E/|R<r%TxI[=2vP  `/N23g /^k57&.k{MM;1S8(y0df&o&0,>>M^]t^Rfc$@' );
define( 'LOGGED_IN_KEY',    '9 /59:rsc*p44rC`}}V8y,},K}?m;R{aGWk!oY1@h{pY8&s1?mK3*pV:-o99gBKE' );
define( 'NONCE_KEY',        'M%O~?bRbr%1m,bY5Qvw-[um[z9=63$,qre3av*7agBcR7|=26VrL@LB@FnW)|=IJ' );
define( 'AUTH_SALT',        'Z&^ VF6)RuRq>`M P!D#]y:`);cR6jqr0*_2S5U_&HLWJ>Q9wQSrm1[;%TWBlf$q' );
define( 'SECURE_AUTH_SALT', 'S,]I_Q|yX;(^u`0o@f@|h2n<t<lJv^_C?|4)+;FlH/`+G~Gl{m>]*?s3W)PN,|(e' );
define( 'LOGGED_IN_SALT',   'x/@M+}#_-bI#1lti88W%/vl>2eRghcP gy{b(XD=]Cy6IN(O.fdq#Pu6v+-_+}>u' );
define( 'NONCE_SALT',       ']PDAQR}lb -q` d;TJj]TX=|!Bt9qM5MQF9m+I_1^wfh #PEG{7lq1t=wCY^fb9x' );

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
