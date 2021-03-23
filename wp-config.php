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
define( 'DB_NAME', 'hieu' );

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
define( 'AUTH_KEY',         '<;=c,;pRn3cz)1T>7iP8n6AR_^)yK=3|CIv%rFxu-kop0TirmvH:x0b=e&{I.<? ' );
define( 'SECURE_AUTH_KEY',  '>1k[_N=K2EZPZJ/PDLMNH$3i>qh5Mm#[!Mi6z:cL$R06Rq>XCp#ZUJUz7g)^i5bh' );
define( 'LOGGED_IN_KEY',    '45rPTpBRHZX>[+)TJe1w3b6L9+NebCDO5kRYK4h{|Sl[EG+d.^]wqc-w+^p*_Vg$' );
define( 'NONCE_KEY',        'B:;6=IGu%e8Sd`J2Y!D=[--%kg)R{dknEo!.^tEQK=##^@d.eeHRpq*9z0Z>[]kw' );
define( 'AUTH_SALT',        'M_B~F-YcAqBMc|_9m&`ZzOi)G?qesb?`&|yK%*1%adHcLi(d-[5 Mt+b|G*ft><H' );
define( 'SECURE_AUTH_SALT', 'EKZwOq5q-wO;7[.DI.xlHBA!<!+}Y%0}d9K*l9#Zq/0~c{Ub;#Nh7$l%*|3rRL@7' );
define( 'LOGGED_IN_SALT',   'ey]21wl@AJ_it#Lid5d~v`{ oq}o3XC}YzMap<?EJBB8`V{jPi:@y@/TVO ,i<G*' );
define( 'NONCE_SALT',       'PM[F%8]#8MUwNzyB^|k1,ev{5emOM.vj?kFU5s0ek}g@[24(MT-LEb%$@1}X1GOY' );

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
