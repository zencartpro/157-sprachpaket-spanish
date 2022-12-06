<?php
/**
* Copyright 2022 torvista (https://github.com/torvista/Zen_Cart-Spanish_Language_Pack)
* @copyright Copyright 2003-2022 Zen Cart Development Team
* Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
* @version $Id: gv_faq.php 2022-12-06 12:28:14Z webchills $
*/

define('NAVBAR_TITLE', TEXT_GV_NAME . 'Preguntas Frecuentes');
define('HEADING_TITLE', TEXT_GV_NAME . 'Preguntas Frecuentes');

define('TEXT_INFORMATION', '<a id="Top"></a>
<a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Comprando ' . TEXT_GV_NAMES . '</a><br>
<a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">Cómo enviar ' . TEXT_GV_NAMES . '</a><br>
<a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Comprando con ' . TEXT_GV_NAMES . '</a><br>
<a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Canjeando ' . TEXT_GV_NAMES . '</a><br>
<a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">Cuando hay problemas</a><br>
');
define('SUB_HEADING_TITLE_1', 'Comprando ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', 'Los ' . TEXT_GV_NAMES . ' se compran como cualquier otro producto de nuestra tienda. Los puede
pagar usando los métodos de pago estándar de la tienda.
Una vez que lo haya adquirido, el valor del ' . TEXT_GV_NAME . ' se sumará a su cuenta de
' . TEXT_GV_NAME . ' personal. Si usted tiene fondos en su cuenta de ' . TEXT_GV_NAME . ', comprobará
que la cantidad ahora se muestra en la página Mi Cuenta y también se mostrará un 
enlace a la página donde podrá enviar el ' . TEXT_GV_NAME . ' a alguien por email.');

define('SUB_HEADING_TITLE_2', 'Cómo enviar ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT2','Se puede enviar un ' . TEXT_GV_NAME . ' desde la página Mi Cuenta.
Cuando usted envía un ' . TEXT_GV_NAME . ', necesita especificar la siguiente información.
El nombre de la persona a la que le está enviando el  ' . TEXT_GV_NAME . '.
El email de la persona a la que le está enviando el  ' . TEXT_GV_NAME . '.
La cantidad que desea enviar. (No hace falta enviar la cantidad total que
haya en su Cuenta de ' . TEXT_GV_NAME . '.)
Un mensaje corto que aparecerá en el email.
Por favor, asegúrese de haber ingresado toda la información correctamente, aunque
tendrá la oportunidad de modificar esto tantas veces como desee antes de que
el email sea enviado.');

define('SUB_HEADING_TITLE_3', 'Comprando con ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_3', 'Si tiene fondos en su Cuenta de ' . TEXT_GV_NAME . ', podrá usar esos fondos para
comprar otros artículos de nuestra tienda. Al momento del pago
aparecerá un recuadro extra. Ingrese la cantidad a aportar de los fondos en su Cuenta de ' . TEXT_GV_NAME . '.
Por favor, tenga en cuenta que igual tendrá que seleccionar otro método de pago si no
hay dinero suficiente en su Cuenta de ' . TEXT_GV_NAME . ' para cubrir el costo de su compra.
Si tiene más fondos en su Cuenta de ' . TEXT_GV_NAME . ' que el costo total de
su compra, la diferencia será mantenida en su cuenta de ' . TEXT_GV_NAME . ' para el
futuro.');

define('SUB_HEADING_TITLE_4', 'Canjeando ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_4', 'Si recibe un ' . TEXT_GV_NAME . ' por email, tendrá los detalles de quién le envió
el ' . TEXT_GV_NAME . ', junto con un posible pequeño mensaje. El Email
tendrá también el ' . TEXT_GV_REDEEM . ' del ' . TEXT_GV_NAME . '. Probablemente sea una buena idea imprimir
este email para futuras referencias. Usted puede ahora canjear el ' . TEXT_GV_NAME . ' de
dos maneras.<br /><br />
1. Pulsando el link que contiene el email justo para este propósito.
Esto lE llevará a la página de Canje de ' . TEXT_GV_NAME . ' de la tienda. Se le pedirá que
cree una cuenta, antes de que el ' . TEXT_GV_NAME . ' sea validado y puesto en su
Cuenta de ' . TEXT_GV_NAME . ' listo para que lo use en la forma que desee.<br /><br />
2. Durante el pago, en la misma página en la que elije un método de pago
habrá un recuadro para ingresar un ' . TEXT_GV_REDEEM . '. Ingrese el ' . TEXT_GV_REDEEM . ' aquí, y
pulse el botón de canjear. El código será
validado y sumado a su cuenta ' . TEXT_GV_NAME . '. Usted podrá entonces usar esa cantidad para comprar cualquier producto de nuestra tienda.');

define('SUB_HEADING_TITLE_5', 'Cuando hay problemas');
define('SUB_HEADING_TEXT_5', 'Para cualquier pregunta relacionada con el Sistema de ' . TEXT_GV_NAME . ', por favor, contacte a la tienda
por email en '. STORE_OWNER_EMAIL_ADDRESS . '. Por favor, brinde
tanta información como sea posible en el email. ');

define('SUB_HEADING_TITLE_0','');
define('SUB_HEADING_TEXT_0', 'Por favor, elija una de las preguntas de aquí arriba.');

define('TEXT_GV_REDEEM_INFO', 'Por favor, ingrese el código del ' . TEXT_GV_NAME . ': ');
define('TEXT_GV_REDEEM_ID', 'Código:');