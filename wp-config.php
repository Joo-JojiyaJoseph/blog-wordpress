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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         '`|iu)QSv)Bn/=]%Ae*8^)pO*,}l0o}=2F=8^SSp${^mES4s_dN8gs#:^,vPmxJj]' );
define( 'SECURE_AUTH_KEY',  'ob=cUzAUP}FzUS{]_iA{i-*)=LVk!]mCbIe-}K yN1OtLQS(k&P0zuPc5|.Y.J6u' );
define( 'LOGGED_IN_KEY',    ',xR+*b|nWXBp5jsY5vjazB@jHRLAbc8X^:YLcB[`uxbf)xfL$uOcS5L,[nWNd<5B' );
define( 'NONCE_KEY',        '>cnD0v#I#HLwi5$!jwAs4 lD%-A.3j!3rdB)kRMM7}++|:Q8~:gVGJB#$ O?%cBn' );
define( 'AUTH_SALT',        'zQhl: 2.W^9L*I#!yZ,b>ODBNMAj$@13KC9It``jKrhQugYY=Tc}o2yxO%U9lPR?' );
define( 'SECURE_AUTH_SALT', 'K}6RxbL|A?vd^{ 9Ga/Vrp6>luA<73`,Pwd!(G4_pn#n8y7luOq[i<W%hoBr#KX$' );
define( 'LOGGED_IN_SALT',   '?v>,jG3%:k0Jg&)47<HGihj&Su)}Nn9L)X0HItd7|tJ^8s;|U|[WW=P1Qjg:6j!?' );
define( 'NONCE_SALT',       '#U>nYD_d%O~q)$E~&,reEJ!(*^z;`]W`mI;aCKdBB{bqjE^ik0_$;L/dk<LWe%Yx' );

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
