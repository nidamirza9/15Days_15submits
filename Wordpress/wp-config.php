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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         '+#;ed(gWy9?hb#$pwuIEsyVb:5A(]c8fH.c3pPi%tF9B|pK:gY2Z5-t>LV@]J:t{' );
define( 'SECURE_AUTH_KEY',  '&rSA~0$5vm)#~xcUKaPab7$wt:Bl.Tvd(1WjX@myNoZ@W|kqs1*97 bt%Er{9#.[' );
define( 'LOGGED_IN_KEY',    '?xmFe[CIQWtQ4@RT1[T|x^?7UGR@Y{ ;VxMy!8_nE${%Jh2,DM>|0c19!#U68Y-y' );
define( 'NONCE_KEY',        'hl-~UgJ4XVA$4d7MSq`o3kLg}k&V31G&-oR Jy940lqahEBR+~_W1!Qm[bCL8|(`' );
define( 'AUTH_SALT',        '3JIC!(%Sh1Jz!i/1)23BlZ*81+JZ>x:w`GD)VAKmKK3+L*6X7T:Lh9,UbV7$?-gW' );
define( 'SECURE_AUTH_SALT', 'ZXL:;.IgcA7LNg) M} _f.?L.[QyDuH*2y/Eq`jD,SLL1|{Ho~S:}e~ZO#tNus~n' );
define( 'LOGGED_IN_SALT',   'F/@nstisK/a@nT+[y[erGS>$mRZC@7Px%{.0w#4N9R6=p_@7ZH&}^F|smX)<69X@' );
define( 'NONCE_SALT',       'G/ osp2F3Jn.enp]pW_ne3|VL[&9@COVO*4(:rXO!.FsF]o})y[UA]Y4$G(hcVk*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_Ni';

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
