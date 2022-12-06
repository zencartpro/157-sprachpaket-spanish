<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: password_forgotten.php 2018-04-01 10:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Entrar');
define('NAVBAR_TITLE_2', 'Contraseña Olvidada');

define('HEADING_TITLE', 'Contraseña Olvidada');

define('TEXT_MAIN', 'Introduzca su e-mail y le enviaremos un mensaje con su nueva contraseña.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nueva contraseña');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Existe una solicitud de una nueva contraseña desde ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Su contraseña nueva para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n Después de entrar en su cuenta con esta nueva contraseña, puede cambiarla en la página 'Mi Cuenta'.");
define('SUCCESS_PASSWORD_SENT', 'Acabamos de enviar a su email una nueva contraseña.');
