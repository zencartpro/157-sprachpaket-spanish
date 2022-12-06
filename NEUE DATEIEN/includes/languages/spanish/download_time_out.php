<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: download_time_out.php 2015-12-23 19:28:14Z webchills $
 */

define('NAVBAR_TITLE', 'Su Descarga ...');
define('HEADING_TITLE', 'Su Descarga ...');

define('TEXT_INFORMATION', 'Lo sentimos, pero su descarga ha caducada. <br /><br />
  Si tenía otras descargas y desea utilizarlas,
  por favor, diríjase a su página <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mi Cuenta</a> para ver su pedido.<br /><br />
  O, si piensa que existe algún problema con su pedido, por favor, <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">contáctenos</a> <br /><br />
  ¡Gracias!
  ');
