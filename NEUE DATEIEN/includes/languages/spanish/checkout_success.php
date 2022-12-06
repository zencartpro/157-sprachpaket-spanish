<?php
/**
 * Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: checkout_success.php 2022-01-14 19:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Pago');
define('NAVBAR_TITLE_2', 'Completado - Gracias');

define('HEADING_TITLE', '¡Muchas gracias por su confianza!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Avísenme cuando haya cambios en los siguientes productos:');
// Still used by some older templates
define('TEXT_SEE_ORDERS', 'Se puede ver los estados de sus pedidos en <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a>, "Ver Mis Pedidos".');
define('TEXT_CONTACT_STORE_OWNER', 'Por favor, dirija cualquier pregunta que tenga a <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '" id="linkContactUs">atención al cliente</a>.');
define('TEXT_THANKS_FOR_SHOPPING', '¡Muchas gracias por su confianza!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'También puede descargar sus productos más tarde en \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Su número de pedido es:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTA: Para procesar su pedido, se ha creado una cuenta temporal. Se puede cerrar esa cuenta haciendo click en "Salir". Adicionalmente "Salir" asegura de que la información sobre su pedido no será visible para la próxima persona que utilice este ordenador. Si quiere seguir comprando ¡adelante! Puede salir en cualquier momento a través del enlace al principio de la página.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', '<p>¡Muchas gracias por su confianza!<br /> Haga un click en "Salir" para asegurarse de que la información sobre su pedido no será visible para la próxima persona que utilice este ordenador.</p>');


define('HEADING_ORDER_NUMBER', 'Pedido #%s');
define('HEADING_ORDER_DATE', 'Fecha Pedido:');

define('HEADING_DELIVERY_ADDRESS', 'Dirección de Envío');
define('HEADING_SHIPPING_METHOD', 'Método de Envío');

define('HEADING_PRODUCTS', 'Productos');
define('HEADING_TAX', 'Impuestos');
define('HEADING_TOTAL', 'Total');
define('HEADING_QUANTITY', 'Cant.');

define('HEADING_BILLING_ADDRESS', 'Dirección de Facturación');
define('HEADING_PAYMENT_METHOD', 'Forma de Pago');

define('HEADING_ORDER_HISTORY', 'Historial de Estados &amp; Comentarios');
define('TABLE_HEADING_STATUS_DATE', 'Fecha');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Estatus del Pedido');
define('TABLE_HEADING_STATUS_COMMENTS', 'Comentario');
define('QUANTITY_SUFFIX', '&nbsp;  ');//TODO
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
