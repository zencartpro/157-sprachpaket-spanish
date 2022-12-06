<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: checkout_confirmation.php 2022-12-06 14:53:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Comprar');
define('NAVBAR_TITLE_2', 'Paso 3 de 3 - Confirmación del Pedido');

define('HEADING_TITLE', 'Paso 3 de 3 - Confirmación del Pedido');
define('TEXT_ZUSATZ_SCHRITT3','Compruebe su pedido y pulse el botón "CONFIRMAR PEDIDO" al final de esta página.');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Su tarjeta de crédito ha sido verificada correctamente, pero aún no se ha realizado el pago. Confirme ahora su pedido con el botón de abajo. Sólo entonces se procesará el pago y el pedido.</b>');
define('HEADING_BILLING_ADDRESS', 'Dirección de Facturación');
define('HEADING_DELIVERY_ADDRESS', 'Dirección de Envío');
define('HEADING_SHIPPING_METHOD', 'Método de Envío:');
define('HEADING_PAYMENT_METHOD', 'Método de Pago:');
define('HEADING_PRODUCTS', 'Contenido del Carro');
define('HEADING_TAX', 'Impuestos');
define('HEADING_ORDER_COMMENTS', 'Instrucciones especiales sobre el pedido o el envío');
// no comments entered
define('NO_COMMENTS_TEXT', 'Ninguno');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Precio');
define('TABLE_HEADING_PRODUCTIMAGE','Imagen');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Tengo <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>Condiciones generales</u></a> y <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><u>Derecho de retracto</u></a> leído y aceptado.');
define('TEXT_NON_EU_COUNTRIES','Nota:<br>Su pedido se entregará en un país no perteneciente a la UE. Además, es posible que se apliquen derechos de aduana, impuestos o costes adicionales como parte de su pedido, que no serán abonados a través de nosotros ni facturados por nosotros.');
