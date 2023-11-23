<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: time_out.php 2023-10-29 07:49:16Z webchills $
 */

define('NAVBAR_TITLE', 'Expiró el tiempo de sesión');
define('HEADING_TITLE', '¡Vaya! Expiró el tiempo de sesión');
define('HEADING_TITLE_LOGGED_IN', '¡Vaya! Lo sentimos, no se puede realizar la operación solicitada.');
define('TEXT_INFORMATION', '<p>Si estaba realizando un pedido, por favor identifíquese de nuevo y su carro de la compra será recuperado. Deberá volver a realizar el pago y completar su última compra. </p><p>Si completó su pedido y desea revisarlo' . (DOWNLOAD_ENABLED == 'true' ? ', o tiene una descarga y desea completarla' : '') . ', por favor, vaya a <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> para visualizar su pedido.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Aún está conectado a su cuenta y puede seguir comprando.');

define('HEADING_RETURNING_CUSTOMER', 'Entrar');
