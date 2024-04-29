 <?php
/**
 * The base configuration for WordPress           *                                                * The wp-config.php creation script uses this file during the installation.                       * You don't have to use the website, you can copy this file to "wp-config.php"                    * and fill in the values.                        *                                                * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys                                  * * Database table prefix                        * * ABSPATH                                      *                                                * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *                                                * @package WordPress                             */                                                                                                                            // ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maria' );

/** Database username */
define( 'DB_USER', 'maria' );

/** Database password */
define( 'DB_PASSWORD', 'ccwp' );

/** Database hostname */
define( 'DB_HOST', '192.168.10.90' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+ * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AkBaZe*XRTol~nt0|`8p ioE/Bfsv]H;a_; dV)+~w/1!?xOTOmEytPTafwSVq&j');
define('SECURE_AUTH_KEY',  '=+D=7(?4-n9Yr+jS;b)%j?5ulrN*QZ>&#1?{+PU%)e_})WiZF&jsWJe^%cY>uH )');
define('LOGGED_IN_KEY',    '~SSO+k?>(CGjYKKPF1iG>NtZ`<?B%;8;)c_E-y|~./M=lpdzF>5}TnOLaPOWkuTp');
define('NONCE_KEY',        'Sns|VAM]k{66+kV_Yh$|&RMv{P--;P/$bPDIkCjX)_;jfA]dmR%*t^{O9HT5iBSC');
define('AUTH_SALT',        'H_#_LwX6A~AV+q}iiK|zMzEqT0&Cr$!KK?=)V0z&u-N-}7!0?`+?:=4Uw*|^)y-D');   define('SECURE_AUTH_SALT', '~P*pxxapF()LpQU0q]Q~qA&eFi;/|sDD{6`sQ=-V56{PM(#zW7Bc9aIuBob|||^~');   define('LOGGED_IN_SALT',   'VnNVv72Gwi+N?Z4}Io,&pe71SQMJ})ND6,!,qX%o#egp92w{^mhSOdUDq:fs[)!Q');   define('NONCE_SALT',       '${Ajgc^#54K!&4q8Z]K4&QDlDz3!sgoHr)5A+>%flw!,+hZ@qw8sGNb_#0Ccd|B3');

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

/** Sets up WordPress vars and included files. */require_once ABSPATH . 'wp-settings.php';
