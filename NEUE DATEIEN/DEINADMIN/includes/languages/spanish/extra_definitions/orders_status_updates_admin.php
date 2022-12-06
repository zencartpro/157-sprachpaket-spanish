<?php
/**
 * Zen Cart German Specific (zencartpro adaptations)
 * Constants used by the zen_update_orders_history function.
 * 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2022-11-30 12:02:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Actualización Pedido');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Estimado Sr. ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Estimada Sra. ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Buen día ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'Le informaremos del estado de su pedido con ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Nº Pedido:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Detalles del Pedido:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Fecha del Pedido:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Comentario del Pedido: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'El estado del pedido ha sido actualizado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', ' El estado del pedido no ha cambiado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Estado Actual: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Estado Previo:</strong> %1$s, <strong>Estado actual:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si tiene una pregunta, puede contestar a este email.' . "\n");