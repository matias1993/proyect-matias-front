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
define('DB_NAME', 'pagina-matias');

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
define('AUTH_KEY', 'h+0nG2e0:J|V-)%d6kle$)t2*gU.fB<C4t!O5doOl|B_@ayu:?)VS&nKTsF-:T=k');
define('SECURE_AUTH_KEY', '=oQ{1=L+0_^Tc2>p.3XmRR@{?fB@Ch1?kM)Dss-KSx?LO:9Ic0$p>H83Giku8qy{');
define('LOGGED_IN_KEY', 'LTyeXau8L[&JDA}yh!;UHcf)BBN=3WF0dG.U _S/~&`8Z[AHb`4jKL%m%=hM?h-)');
define('NONCE_KEY', '^: C8&tx6NV0f)3EF&/}ekwvnnZ#t)CtY)tqD)qBB Cz4Y!@%LNQ.z.)H:A[fjp,');
define('AUTH_SALT', 'M.D$QJ(_=?*K:(RDO/#t{S=GvLSKf,&<wFelDE!6nC4lW60?_Yk~.$8b&v+1xNKi');
define('SECURE_AUTH_SALT', '8@O5ES2G]y0v _!8q9g)d*8RX1,(x;!vxW:hgBJrZ|~$0`,=Y%=e#HJX$YN}B#.o');
define('LOGGED_IN_SALT', '}wa4w^K} /b5|Z#$g=(~`}2O2PdLUMl/:]b7)M;PHfB@4ExpKe[L)w&C.v?X-ga!');
define('NONCE_SALT', 'aPeqE]-Oal:@nCRBOS``Jy@o9Gbu[y,/QLY9jltVxS|K_aynD{dn^~>NFNwuC2(O');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

