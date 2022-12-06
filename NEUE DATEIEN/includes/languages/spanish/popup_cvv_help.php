<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: popup_cvv_help.php 2015-12-23 19:28:14Z webchills $
 */

define('HEADING_CVV', '¿Qué es el CVV?');
define('TEXT_CVV_HELP1', 'Número de verificación de 3 dígitos de las tarjetas Visa, Mastercard y Discover<br /><br />
                    Por su seguridad, le pedimos que introduzca el número de verificación de su tarjeta.<br /><br />
                    El número de verificación son los últimos 3 dígitos impresos al dorso de su tarjeta.
                    Aparece a la derecha, a continuación del número de su tarjeta.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'Número de verificación de 4 dígitos de las tarjetas American Express<br /><br />
                    Por su seguridad, le pedimos que introduzca el número de verificación de su tarjeta.<br /><br />
                    El número de verificación de 4 dígitos impreso al dorso de su tarjeta American Express.
                    Aparece a la derecha, a continuación el número de su tarjeta.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Cerrar Ventana [x]');