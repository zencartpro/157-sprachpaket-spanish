<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eustandardtransfer.php 2022-12-06 12:36:14 webchills $
*/
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Pago anticipado/Transferencia bancaria');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'<div class="eustandardtransferdescription">Utilice los siguientes datos para la transferencia del importe total:' .
'<br />Nombre del banco:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br />Titular de la cuenta: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br />IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br />BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br/>Su pedido sólo se tramitará una vez que el importe se haya abonado en nuestra cuenta.</div>');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"Utilice los siguientes datos para la transferencia del importe total:\n" .
"\nNombre del banco:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nTitular de la cuenta: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nSu pedido sólo se tramitará una vez que el importe se haya abonado en nuestra cuenta..");