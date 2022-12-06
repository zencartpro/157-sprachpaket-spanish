<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates.php 2022-06-12 webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Actualización del Pedido');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Nº Pedido:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Detalles del Pedido:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Fecha Pedido:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Comentarios del pedido: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'El estado del pedido ha cambiado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', ' El estado del pedido no ha cambiado:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Estado Actual: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Estado Previo:</strong> %1$s, <strong>Estado Actual:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Si tiene una pregunta, puede contestar a este email.' . "\n");

define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT', '[ORDERS STATUS]');