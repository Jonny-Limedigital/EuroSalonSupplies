<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'eurosalon-wp-h7CQsGt6' );

/** MySQL database username */
define( 'DB_USER', 'fpJPqTHRtjeH' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zcZzv4OLVtk3gzVn' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '<u:4l-,Ea{N?hJ+0KsA~3@n@0)M>?Q(c:v+ZF~B=b%S#uQlc~StK/yJ-PlYu2=Pp' );
define( 'SECURE_AUTH_KEY',   '$nJ;{RwA(6P#dC-7</!Eao(KZ:i%WMHpz70%{qs8=dOvOXp+Tgd|8i,*B>>^E[P{' );
define( 'LOGGED_IN_KEY',     '~*a0j/8/b1KvOxz,#..Be6`;McX5NwfAwYdUHPp}n<=-0q7(wM@=DQ0LN]K:`w7t' );
define( 'NONCE_KEY',         ',Ue*CS6m#3K_J;:B3TxXkgHWTp$,O{+N?y&U,Ek7Geq.>KtHFW[0X[[Fs%S.#,IE' );
define( 'AUTH_SALT',         'J7JfxdQ]H,w&e89:cloz92z?^Zvj{||T]bJ_<1W{MNS5JH4EQAWq{unfZ UQ2B4@' );
define( 'SECURE_AUTH_SALT',  ')M}ko-feWTy`f,V{L#H0H67fGoWQI3;XOZPksIa+XiiRK[|b$[_:wFGO!J3QpV){' );
define( 'LOGGED_IN_SALT',    '=`E2++N*VDENJ@S)&2z,S3+q%M^0xAF#Bby?V@+PE&3vK}1**juDkX_nIY0`wT,A' );
define( 'NONCE_SALT',        'q0<h0u9KiQk<Fwdn__h%|a^%PzCB$Gru}As{&tvbN|d?n$UeS-Q=lJ-)L}XU.AGB' );
define( 'WP_CACHE_KEY_SALT', '5XeC3BP|H0Hw[9s(+4YBgXfne,uiO4t6@J}=*<)HBiy[ypy~s|1A-S Rs^9SyUr>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_7d03c80bbf_';


/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
