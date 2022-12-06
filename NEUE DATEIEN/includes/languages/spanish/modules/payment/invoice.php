<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: invoice.php 2022-12-06 12:36:14 webchills $
*/
 
if (IS_ADMIN_FLAG === true) {
if (!defined('MODULE_PAYMENT_INVOICE_STATUS')) define('MODULE_PAYMENT_INVOICE_STATUS', 'False');
if (!defined('MODULE_PAYMENT_INVOICE_BANKNAM')) define('MODULE_PAYMENT_INVOICE_BANKNAM', '');
if (!defined('MODULE_PAYMENT_INVOICE_ACCNAM')) define('MODULE_PAYMENT_INVOICE_ACCNAM', '');
if (!defined('MODULE_PAYMENT_INVOICE_ACCIBAN')) define('MODULE_PAYMENT_INVOICE_ACCIBAN', '');
if (!defined('MODULE_PAYMENT_INVOICE_BANKBIC')) define('MODULE_PAYMENT_INVOICE_BANKBIC', '');
}
 
//Berechnung Zahlungsziel
if (MODULE_PAYMENT_INVOICE_STATUS === 'True'){
$tstamp = mktime(0, 0, 0, date('m'), date('d') + MODULE_PAYMENT_INVOICE_PAYDAY, date('Y'));
$tag = date('d.m.Y', $tstamp);
}
//Ende
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Factura (a pagar por '. $tag . ')');
define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', '');

define('MODULE_PAYMENT_INVOICE_TEXT_EMAIL_FOOTER', 
"Utilice los siguientes datos para la transferencia del importe total:\n" .
"\nNombre del banco:  " . MODULE_PAYMENT_INVOICE_BANKNAM .
"\nTitular de la cuenta: " . MODULE_PAYMENT_INVOICE_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_INVOICE_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_INVOICE_BANKBIC . 
"\n");