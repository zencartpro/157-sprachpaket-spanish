<?php
/**
 * Zen Cart German Specific
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0 
 * @version $Id: checkout_confirmation.php 2022-04-24 14:53:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Comprar');
define('NAVBAR_TITLE_2', 'Paso 3 de 3 - Confirmación del Pedido');

define('HEADING_TITLE', 'Paso 3 de 3 - Confirmación del Pedido');
define('TEXT_ZUSATZ_SCHRITT3','Überprüfen Sie Ihre Bestellung und drücken dann den Button "KAUFEN" unten auf dieser Seite.');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Ihre Kreditkarte wurde erfolgreich verifiziert, es hat aber noch keine Zahlung stattgefunden. Bitte bestätigen Sie nun Ihre Bestellung mit dem Button unten. Erst dann werden Zahlung und Bestellung durchgeführt.</b>');
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
define('TABLE_HEADING_SINGLEPRICE','Einzelpreis');
define('TABLE_HEADING_PRODUCTIMAGE','Artikelbild');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Ich habe <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>AGB</u></a> und <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><u>Widerrufsrecht</u></a> gelesen und akzeptiert.');
define('TEXT_NON_EU_COUNTRIES','Hinweis:<br>Ihre Bestellung wird in ein Nicht-EU-Land geliefert. Zusätzlich können im Rahmen Ihrer Bestellung noch weitere Zölle, Steuern oder Kosten anfallen, die nicht über uns abgeführt bzw. von uns in Rechnung gestellt werden.');
