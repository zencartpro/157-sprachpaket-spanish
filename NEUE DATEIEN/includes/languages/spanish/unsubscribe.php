<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 
 * @version $Id: unsubscribe.php 2010-08-30 15:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Darse de baja del Boletín');
define('HEADING_TITLE', 'Darse de baja del Boletín');
//torvista changed br to p
define('UNSUBSCRIBE_TEXT_INFORMATION', '<p>Nos apena saber que desea cancelar su suscripción a nuestro boletín de noticias.<br />Si está preocupado por su privacidad, por favor, lea nuestra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">política de privacidad</span></a>.<br />Los suscriptores de nuestro boletín de noticias son avisados de nuestras novedades, ofertas especiales, y noticias de la página.</p><p>Si pese a todo, no desea seguir recibiendo nuestro boletín de noticias, por favor, haga clic en el botón de la parte inferior.</p>');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<p>Nos apena saber que desea cancelar su suscripción a nuestro boletín de noticias.<br />Si está preocupado por su privacidad, por favor, lea nuestra <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">política de privacidad</span></a>.<br />Los suscriptores de nuestro boletín de noticias son avisados de nuestras novedades, ofertas especiales y noticias de la página.<br />Si pese a todo, no desea seguir recibiendo nuestro boletín de noticias, por favor, haga clic en el botón de la parte inferior. Accederá a las preferencias de su cuenta, donde podrá editar sus suscripciones. Puede que necesite identificarse previamente.</p>');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<p>Su dirección de correo, mostrada más abajo, ha sido eliminada de nuestra base de datos del boletín de noticias, bajo su petición expresa. </p>');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<p>No se encontró dicha dirección de correo en nuestra base de datos del boletín de noticias, o ya ha sido eliminada de la lista de distribución con anterioridad. </p>');
