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
define('DB_NAME', 'sys');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'administrador');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY', '1Cz_PS weWOqA?!6z`_PdH||k>W7d,]8.ob.gE!=)4[@Qca &1;KK!O,5e;aL!;*');
define('SECURE_AUTH_KEY', '&34;rZqk- AG{0~E82qz<p,?W?2K3qd!nbe|:P~Z0/jd:eeOY!4(E,aG}, U%J/e');
define('LOGGED_IN_KEY', '_GuF_y)Suv]N-Tjkb |m9Dz-xqK()t(?Pos):u`>/NgB*d7JHLZ_e2h}sqCdn@U_');
define('NONCE_KEY', '7XCfxTMMPo:$Fp~?i_!<&9$?-V~tFbjKD/=8tpxew4f}zS-7Q1is6Q7A1#yOY56X');
define('AUTH_SALT', 'X|Y)A=Q5]9lZH@zx)D5Za}x[AvB Fi_y1)Zw0-QB2zQSg9d<%-IE;Raa^mYx4sL|');
define('SECURE_AUTH_SALT', '&)zw238x@.<Ihi=$i?g=X$DJ4Zw7h#_bt^oZ|C< 7e8?Pb^oly@nEQ yB}[d;npe');
define('LOGGED_IN_SALT', ')&DK?9@c z@{fT<V2r@#RfpW?.;YZ%b$$%Gd8/Z!e4Z{c38!0/B{An{tjW[xiM?H');
define('NONCE_SALT', 'UX,}+YITq~S@iV=v)wEe&_~(}@CG!x4(DR26S_=@BIp6H-:M_D+){0cZ;nP+xay6');

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

