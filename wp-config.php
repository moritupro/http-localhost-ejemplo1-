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
define( 'DB_NAME', 'ejemplo1_bd' );

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
define( 'AUTH_KEY',         'Ng1i%Q-rYGTICb`QUUp,s#Z{pevY}$tuGj$O_V+0!eG0cuxrY#,Z I.9NAuB)Q{M' );
define( 'SECURE_AUTH_KEY',  '>/##k!`rzK )2~NJb{p9-qn8TZUp_%H3pxWMpxV@0w.fOk13aW]-gED>~^#ook?_' );
define( 'LOGGED_IN_KEY',    '-#/T wjaij;kJ,L0X>qru{2%h,y%i$D4yP57*qx#k_VCPBt${|LQ-P8>@}(q~GR>' );
define( 'NONCE_KEY',        'yNp@<xM 44#&L9Bcy2d;/XN}ow5F0xvr+ C1!2aCr6.60EP1v<7;_b(tV>)aQ%;>' );
define( 'AUTH_SALT',        '{Py<H8|(LE@5fKN*JP1~hru#!8dl9b1d(xtXNE1I]S >:zjO7>9|0n!LpKH-}Ni4' );
define( 'SECURE_AUTH_SALT', 'e+|?$5=lN]iD[x1h`4l={]C}2~yCL/b.X[+o >#/*|Z >z0ywXYk u)Ja0L%=?Q4' );
define( 'LOGGED_IN_SALT',   '9C3w$/U%xP<p0.QOhc.(Wf$o+d;s6;%kL}g*%pa;._)V)V/_*O&Z%[0;#{W=Mn71' );
define( 'NONCE_SALT',       'Bl/=?f_5D@Sh:/.0masAdDkOg|l(3!9Z=A T8]J-#S4JHl,excSb5S!r(BA4GyOF' );

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
