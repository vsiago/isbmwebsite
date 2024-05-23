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
define( 'AUTH_KEY',          'pVdye^s`rh{3u<-2Ovx]FipJd$G&S,PUszKu/~,baKjpa4nwE?76a~,`=u1l14YF' );
define( 'SECURE_AUTH_KEY',   'dMn~wD*$`|_=<zn+wI)|kofP!W/e<<q#,0S2}4=Mb$Lbo.+s.gYj!&;2[iffD}n-' );
define( 'LOGGED_IN_KEY',     'u-l-*c!ANAcHz$B!L=_P!xW_0F8p+^&2o>I&9;jODo)E?O/cd2-k+2F$;jO]L<g:' );
define( 'NONCE_KEY',         '?AdS2!2y8l%LaH~>E^3AMit2Tr2`~N86kZ{Q=4HnuYnA&FEr)zVY_[3<_Ui6gh_H' );
define( 'AUTH_SALT',         'w4u%M),O^QJ[Ey:g|A _<hqwMA+*PXWiz]%WjEt+7AXd`31t0#:7hr>yM*z27_u7' );
define( 'SECURE_AUTH_SALT',  '/6OnS@3^CA9pUaL4r8H]FHu0o:j(Uw+50qDYFFY?Zzu?$5?U4L[B;X04@RMJMEzu' );
define( 'LOGGED_IN_SALT',    '{rP;{e92*}AFOJjXTV@sr:9S<kyo;=aXm(bV3jhWw:U^*>fr&ywlKVs{Nv:@aQlP' );
define( 'NONCE_SALT',        'S-d(kgvts}|E!Lr= /p1hh^>A-2>?-4kMH]!1D>3rV[-A<@S5f#{9HNeoLYsjV;m' );
define( 'WP_CACHE_KEY_SALT', 'X(P)r:qT5RywHeByAj[H.$d<$ZjL}Pw:mV&B!Ly1M%_t6@$R5oB;yM$wYB`A#6< ' );


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
