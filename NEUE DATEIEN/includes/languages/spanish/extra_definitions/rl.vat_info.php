<?php
/**
* Zen Cart German Specific 
* Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: rl.vat_info.php 2022-12-06-12 12:45:57Z webchills $
 */

define('VAT_SHOW_TEXT_VERSANDKOSTENFREI','<br><span class="taxAddon">incl. %s IVA</span>');

if(DISPLAY_PRICE_WITH_TAX=='true')
define('VAT_SHOW_TEXT','<br><span class="taxAddon">incl. %s IVA<br/> más <a href="' . zen_href_link(FILENAME_SHIPPING) . '">gastos de envío</a></span>');
else
define('VAT_SHOW_TEXT','<br><span class="taxAddon">incl. %s IVA<br/> más <a href="' . zen_href_link(FILENAME_SHIPPING) . '">gastos de envío</a></span>');