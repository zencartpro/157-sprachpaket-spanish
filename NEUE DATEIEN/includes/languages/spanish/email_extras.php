<?php
/**
* Zen Cart German Specific (158 code in 157)

* @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: email_extras.php 2023-10-29 11:32:14Z webchills $
 */

define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');
define ('EMAIL_LOGO_FILENAME', 'header.jpg'); 
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');
define ('EMAIL_EXTRA_HEADER_INFO', '');


define('OFFICE_FROM','<strong>De:</strong>');
define('OFFICE_EMAIL','<strong>Email:</strong>');

define('OFFICE_USE','<strong>Sólo uso Admin:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Nombre Cliente:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>Email Cliente:</strong>');
define('OFFICE_LOGIN_PHONE','<strong>Teléfono:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>Dirección IP:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Host:</strong>');
define('OFFICE_DATE_TIME','<strong>Fecha y hora:</strong>');


define('EMAIL_TEXT_TELEPHONE', 'Teléfono: ');


define('EMAIL_DISCLAIMER', '');
define('EMAIL_SPAM_DISCLAIMER', '-');

define('EMAIL_ORDER_MESSAGE','');
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>');
define('TEXT_UNSUBSCRIBE', "\n\nPara darse de baja de los boletines pulse aquí: \n");


define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANTE:</strong> Para su protección y para prevenir usos maliciosos, todos los emails enviados a través de este sitio son registrados y sus contenidos son grabados y están disponibles para los administradores de la tienda. Si piensa que ha recibido este mensaje por error, por favor, envíe un email a ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");


define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Este mensaje se incluye en todos los e-mails enviados desde esta página:</strong>');



define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');

define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');


define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE', 'Lagerbestandsbericht: ');