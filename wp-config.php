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
define( 'AUTH_KEY',         'ZQ3c =%&EH!=lY<!mKJoeUPvj5^@Byrkff8@nU]hvt.z$f)W`.hgS:=>exDx9P(.' );
define( 'SECURE_AUTH_KEY',  'dFPV#0T7H:1(zZn0S.gmvV@*?L#$h.KbnHT3<dZ9D0nd}@R%%|:fkRSR}2E,YR<l' );
define( 'LOGGED_IN_KEY',    '2ud(UqLP-`mla]=&b_V@ux%^IxW~Prh t8;1)zz5$pfwtI8l&7<{bSPc]Wy<a1a>' );
define( 'NONCE_KEY',        '8P)lxx4wF*_72xd ;friY@]>vZa9JrzRfsOf7;wq+eI^&gR>KNokJ=paBEV#Brej' );
define( 'AUTH_SALT',        'pXW(KYxfuTA?2L#z9OJPQJ/Li;]>&y<s9a]xXwwwPdHb,rPu=kW=pfN.2dlYU}V:' );
define( 'SECURE_AUTH_SALT', 'a#^Vi1;v$yM#eMt5JX]?7E%u~yyA6tn2IGG.j=/](An1;0<HpA:x%`)acx/8Dqww' );
define( 'LOGGED_IN_SALT',   '6UK_w)-8.v2j|T}@HXW7G${v,81;!~fE/ycK,+(7dmkG7IO$btc:UqelEu1s}3?]' );
define( 'NONCE_SALT',       ',Nt@XotiJe?}7P.Q*1j`maiEc+H6]OkV=_[ 2`(-6?C(>kYWOw>/T`Vk07quiFL{' );

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
