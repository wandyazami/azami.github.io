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
define( 'DB_NAME', 'azamistore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'w&DC/>)`Gud]tTfTl.+c mZI_Cp)k!MZG5? 7pscY.&OaW[zEXFpns%+cgI8*k]%' );
define( 'SECURE_AUTH_KEY',  '7v?d`/)~H)?,j:Q|X._,qWbYG%CEsSF`wHZ5:pbz9gFKA#4PkOyuka09pLscL5=#' );
define( 'LOGGED_IN_KEY',    'IWSw9Zf;u~X9q>v|?9^}.-8*mStJ_Ta1=&C;#Hv{`$/nt^VZ}Kp;@f^t1(r-X07Q' );
define( 'NONCE_KEY',        'rz(PEKb_d7r0-L1 93[ud&T}Vmy_LXM=GBs~XW$vYuiID7s}$}Mzm{{fKb:ol+?8' );
define( 'AUTH_SALT',        'QgYm9,B!}FD#]+I VNHrr[tX;1r!adB4os-G`JAtmPi_Qp.N@4W ?UIpK XATd{>' );
define( 'SECURE_AUTH_SALT', '`zb0lULkrYl>+;JB3!wJN}DYV6t]9UB)=JK{}Lb[KE.W;H662DDvbiTf<XY:r4{R' );
define( 'LOGGED_IN_SALT',   '$5d#1p pIpjLl .cnyLvA#Oz>ph#uF-!>Mt=cV<$7KmPjVm57H?yU&a<gR /_o^n' );
define( 'NONCE_SALT',       '>-,|lq1+zQ(U[%}zqwVULghvT:ueJ6<bUgC7IM z._D2Hkb?_+5tW7pQvg@Ia]0r' );

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
