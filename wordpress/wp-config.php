<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'desafio_mamp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-cElkE@vHJWxYOpWs!+[]+U3P92u9ISDTK|A]sRE/uz}eC&0/Dchfr^J+*to_t+2');
define('SECURE_AUTH_KEY', 'W%~q@tQKk:cO[[O{g1Vt)m`yNe2j<(stT;~ e7>KW6|i729PP8sedMqBY#-J;d+T');
define('LOGGED_IN_KEY', 'JwPzl.tyr.WD9<f^H5c8 Jbv7mJ=<1zPMaEDQe U(y]oO]AQJ0dYdb}Qpfgm{)8-');
define('NONCE_KEY', '51FNzmk0%?7W=h8-qM]W{U}3B<;`~L|oZ1L{j8J_=K6cfa]LYzGO&inHEg;bdA+O');
define('AUTH_SALT', 'hy)nbFY`KV#XcDTZU7(3l4OTg`b~l,}lX,0%(s@>;]_dDNZkEw!e[d2}CfMjxnKw');
define('SECURE_AUTH_SALT', 'WY!qahW4M9B=C&!h2)19]E}*+iCA[%4VmB0QW$8!)ka[B2QS|*PS[#3~d:G< spB');
define('LOGGED_IN_SALT', 'X4XEzqkO?XsH:ld@Imw<RP$XdH!Wm$|])~t}0 E/<5up(||BmiaQ(j/rv(-*1+n$');
define('NONCE_SALT', 'zo`a@Bd,ZAMJo[5]WO`nG$PcD]ewtKui~VHC=MBu0S=!8&k.9:n-DZ?jzaqE4 2C');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'dl_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', false );

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

